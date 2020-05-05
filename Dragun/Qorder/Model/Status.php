<?php


namespace Dragun\Qorder\Model;

use Magento\Framework\Api\DataObjectHelper;
use Dragun\Qorder\Api\Data\StatusInterface;
use Dragun\Qorder\Api\Data\StatusInterfaceFactory;

/**
 * Class Status
 *
 * @package Dragun\Qorder\Model
 */
class Status extends \Magento\Framework\Model\AbstractModel
{

    protected $dataObjectHelper;

    protected $statusDataFactory;

    protected $_eventPrefix = 'dragun_qorder_status';

    /**
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param StatusInterfaceFactory $statusDataFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param \Dragun\Qorder\Model\ResourceModel\Status $resource
     * @param \Dragun\Qorder\Model\ResourceModel\Status\Collection $resourceCollection
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        StatusInterfaceFactory $statusDataFactory,
        DataObjectHelper $dataObjectHelper,
        \Dragun\Qorder\Model\ResourceModel\Status $resource,
        \Dragun\Qorder\Model\ResourceModel\Status\Collection $resourceCollection,
        array $data = []
    ) {
        $this->statusDataFactory = $statusDataFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * Retrieve status model with status data
     * @return StatusInterface
     */
    public function getDataModel()
    {
        $statusData = $this->getData();
        
        $statusDataObject = $this->statusDataFactory->create();
        $this->dataObjectHelper->populateWithArray(
            $statusDataObject,
            $statusData,
            StatusInterface::class
        );
        
        return $statusDataObject;
    }
}

