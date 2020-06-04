<?php


namespace Dragun\Qorder\Controller\Adminhtml\Order;


use Dragun\Qorder\Api\OrderRepositoryInterface;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\NoSuchEntityException;
use Psr\Log\LoggerInterface;

class MassDelete extends Action
{
    /** @var OrderRepositoryInterface */
    private $repository;

    private $logger;

    /**
     * MassDelete constructor.
     *
     * @param Context                   $context
     * @param OrderRepositoryInterface  $repository
     */
    public function __construct(
        Context $context,
        OrderRepositoryInterface $repository,
        LoggerInterface $logger
    ) {
        $this->repository = $repository;
        $this->logger     = $logger;
        parent::__construct($context);
    }
    public function _isAllowed()
    {
        return $this->_authorization->isAllowed('Dragun_Qorder::dragun_qorder');
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        if (!$this->getRequest()->getParam('selected')) {
            return $this->_redirect('*/*/index');
        }

        $ids = $this->getRequest()->getParam('selected');

        if (empty($ids)) {
            $this->messageManager->addWarningMessage(__("Please select ids"));
            return $this->_redirect('*/*/index');
        }

        foreach ($ids as $id) {
            try {
                $this->repository->deleteById($id);
            } catch (NoSuchEntityException|CouldNotDeleteException $e) {
                $this->logger->info(sprintf("item %d already delete", $id));
            }
        }

        $this->messageManager->addSuccessMessage(sprintf("items %s was deleted", implode(',', $ids)));
        $this->_redirect('*/*/index');
    }
}
