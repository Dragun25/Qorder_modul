<?php


namespace Dragun\Qorder\Model;

use Dragun\Qorder\Api\Data\OrderInterface;
use Dragun\Qorder\Api\Data\OrderInterfaceFactory;
use Magento\Framework\Api\DataObjectHelper;

/**
 * Class Order
 *
 * @package Dragun\Qorder\Model
 */
class Order extends \Magento\Framework\Model\AbstractModel
{

    protected $orderDataFactory;

    protected $dataObjectHelper;

    protected $_eventPrefix = 'dragun_qorder_order';

    /**
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param OrderInterfaceFactory $orderDataFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param \Dragun\Qorder\Model\ResourceModel\Order $resource
     * @param \Dragun\Qorder\Model\ResourceModel\Order\Collection $resourceCollection
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        OrderInterfaceFactory $orderDataFactory,
        DataObjectHelper $dataObjectHelper,
        \Dragun\Qorder\Model\ResourceModel\Order $resource,
        \Dragun\Qorder\Model\ResourceModel\Order\Collection $resourceCollection,
        array $data = []
    ) {
        $this->orderDataFactory = $orderDataFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * Retrieve order model with order data
     * @return OrderInterface
     */
    public function getDataModel()
    {
        $orderData = $this->getData();
        
        $orderDataObject = $this->orderDataFactory->create();
        $this->dataObjectHelper->populateWithArray(
            $orderDataObject,
            $orderData,
            OrderInterface::class
        );
        
        return $orderDataObject;
    }
}

