<?php

namespace Dragun\Qorder\Ui\Component\Listing\Column;

use \Magento\Framework\Data\OptionSourceInterface;

class StatusSelect implements OptionSourceInterface
{
     /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 1, 'label' => __('True')],
            ['value' => 0, 'label' => __('False')]
        ];
    }
}