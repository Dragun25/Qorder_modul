<?php

namespace  Dragun\Qorder\Controller\Adminhtml\Order;

use Dragun\Qorder\Api\StatusRepositoryInterface;;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\NoSuchEntityException;
use Psr\Log\LoggerInterface;

class MassDelete extends Action
{
    /** @var StatusRepositoryInterface */
    private $repository;

    private $logger;

    /**
     * MassDelete constructor.
     *
     * @param Context                   $context
     * @param StatusRepositoryInterface   $repository
     */
    public function __construct(
        Context $context,
        StatusRepositoryInterface $repository,
        LoggerInterface $logger
    ) {
        $this->repository = $repository;
        $this->logger     = $logger;
        parent::__construct($context);
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        if (!$this->getRequest()->isPost()) {
            return $this->_redirect('*/*/listing');
        }

        $ids = $this->getRequest()->getParam('ids');

        if (empty($ids)) {
            $this->messageManager->addWarningMessage(__("Please select ids"));
            return $this->_redirect('*/*/listing');
        }

        foreach ($ids as $id) {
            try {
                $this->repository->deleteById($id);
            } catch (NoSuchEntityException|CouldNotDeleteException $e) {
                $this->logger->info(sprintf("item %d already delete", $id));
            }
        }

        $this->messageManager->addSuccessMessage(sprintf("items %s was deleted", implode(',', $ids)));
        $this->_redirect('*/*/listing');
    }
}
