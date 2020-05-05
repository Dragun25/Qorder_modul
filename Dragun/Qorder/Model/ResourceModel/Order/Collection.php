<?php


namespace Dragun\Qorder\Model\ResourceModel\Order;

/**
 * Class Collection
 *
 * @package Dragun\Qorder\Model\ResourceModel\Order
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * @var string
     */
    protected $_idFieldName = 'order_id';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            \Dragun\Qorder\Model\Order::class,
            \Dragun\Qorder\Model\ResourceModel\Order::class
        );
    }
}

