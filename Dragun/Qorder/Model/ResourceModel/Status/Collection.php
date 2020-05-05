<?php


namespace Dragun\Qorder\Model\ResourceModel\Status;

/**
 * Class Collection
 *
 * @package Dragun\Qorder\Model\ResourceModel\Status
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * @var string
     */
    protected $_idFieldName = 'status_id';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            \Dragun\Qorder\Model\Status::class,
            \Dragun\Qorder\Model\ResourceModel\Status::class
        );
    }
}

