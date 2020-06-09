<?php
namespace Dragun\Qorder\Controller\Index;

use Dragun\Qorder\Api\Data\OrderInterfaceFactory;
use Dragun\Qorder\Api\OrderRepositoryInterface;
use Dragun\Qorder\Model\Status;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Model\AbstractModel;


class Save extends Action
{
    /**
     * @var OrderRepositoryInterface
     */
    private $orderRepository;
    /**
     * @var OrderInterfaceFactory
     */
    private $orderInterfaceFactory;



    /**
     * Save constructor.
     * @param Context $context
     * @param OrderRepositoryInterface $orderRepository
     * @param OrderInterfaceFactory $orderInterfaceFactory
     */
    public function __construct(
        Context $context,
        OrderRepositoryInterface $orderRepository,
        OrderInterfaceFactory $orderInterfaceFactory
    ) {
        parent::__construct($context);

        $this->orderInterfaceFactory = $orderInterfaceFactory;
        $this->orderRepository = $orderRepository;
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function execute()
    {
        $params = $this->getRequest()->getParams();

        /**
         * @var Status $statusmodel
         * @var AbstractModel $model
         */

        $model = $this->orderInterfaceFactory->create();

        try {
            if (!\Zend_Validate::is(trim($params['name']), 'NotEmpty')) {
                throw new LocalizedException(__('Enter the Name and try again.'));
            }
            if (!\Zend_Validate::is(trim($params['phone']), 'NotEmpty')) {
                throw new LocalizedException(__('Enter the phone and try again.'));
            }
            if (!\Zend_Validate::is(trim($params['email']), 'EmailAddress') && !empty($params['email'])) {
                throw new LocalizedException(__('The email address is invalid. Verify the email address and try again.'));
            }

        $model->setName($params['name']);
        $model->setSku($params['sku']);
        $model->setPhone($params['phone']);
        $model->setEmail($params['email']);
        $this->orderRepository->save($model);

            $this->messageManager->addSuccessMessage('Saved!');
        } catch (CouldNotSaveException $e) {
//            $this->logger->error($e->getMessage());
            $this->messageManager->addErrorMessage('Error');
        } catch (LocalizedException $e) {
//            $this->logger->error($e->getMessage());
            $this->messageManager->addErrorMessage($e->getMessage());
        }

        $this->_redirect($params['url']);
    }
}