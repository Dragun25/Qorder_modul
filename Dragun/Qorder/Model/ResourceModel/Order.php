<?php


namespace Dragun\Qorder\Model\ResourceModel;

/**
 * Class Order
 *
 * @package Dragun\Qorder\Model\ResourceModel
 */
class Order extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('dragun_qorder_order', 'order_id');
    }
}

