<?php


namespace Dragun\Qorder\Model\ResourceModel;

/**
 * Class Status
 *
 * @package Dragun\Qorder\Model\ResourceModel
 */
class Status extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('dragun_qorder_status', 'status_id');
    }
}

