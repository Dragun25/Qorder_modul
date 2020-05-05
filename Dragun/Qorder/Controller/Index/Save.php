<?php

namespace Dragun\Qorder\Controller\Index;

use Dragun\Qorder\Api\OrderRepositoryInterface;
use Dragun\Qorder\Model\StatusFactory;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Dragun\Qorder\Api\Data\OrderInterfaceFactory;
use Dragun\Qorder\Api\Data\StatusInterfaceFactory;
use Magento\Framework\Model\AbstractModel;


class Save extends Action
{
    /**
     * @var OrderRepositoryInterface
     */
    private $dataForm;
    /**
     * @var OrderInterfaceFactory
     */
    private $orderInterfaceFactory;
    /**
     * @var StatusInterfaceFactory
     */
    private $statusModel;
    /**
     * @var StatusFactory
     */
    private $statusFactory;
    /**
     * @var StatusInterfaceFactory
     */
    private $statusInterfaceFactory;

    /**
     * Save constructor.
     * @param Context $context
     * @param OrderInterfaceFactory $orderInterfaceFactory
     * @param OrderRepositoryInterface $dataPersistor
     */
    public function __construct
    (
        Context $context,
        OrderInterfaceFactory $orderInterfaceFactory,
        OrderRepositoryInterface $dataForm,
        StatusFactory $statusFactory,
        StatusInterfaceFactory $statusInterfaceFactory
    )
    {
        parent::__construct($context);
        $this->statusFactory           = $statusFactory;
        $this->statusInterfaceFactory  = $statusInterfaceFactory;
        $this->orderInterfaceFactory   = $orderInterfaceFactory;
        $this->dataForm                = $dataForm;
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function execute()
    {
        $result = $this->getRequest()->getParams();
        /**
         * @var AbstractModel $model
         * @var StatusFactory $statusmodel
         */
        $model = $this->orderInterfaceFactory->create();
//        $statusform = $this->statusModel->create();
//        $this->statusFactory->create()->load($statusform, '1', 'is_default');

        /**
         * @var OrderInterfaceFactory $model
         */
        $model->setName($result['name']);
        $model->setPhone($result['phone']);
        $model->setEmail($result['email']);
        $model->setSku($result['sku']);
//        $model->setStatus($statusform);

        $this->dataForm->save($model);

        $this->_redirect($result['url']);


    }
}