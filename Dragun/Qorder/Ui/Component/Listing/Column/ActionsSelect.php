<?php

namespace Dragun\Qorder\UI\Component\Listing\Column;

use Magento\Framework\Option\ArrayInterface;
use Dragun\Qorder\Model\ResourceModel\Status\CollectionFactory;

class ActionsSelect implements ArrayInterface
{
    protected $status;

    public function __construct(CollectionFactory $status)
    {
        $this->status = $status;
    }

    public function getOptions()
    {
        $collection = $this->status->create();
        $items = $collection->getItems();
        $data = [];
        foreach ($items as $item) {
            $statusCode = $item->getData('status_code');
            $label = $item->getData('label');
            $data[] = ['value' => $statusCode, 'label' => __($label)];

        }
        return $data;
    }

    public function toOptionArray()
    {
        return $this->getOptions();


    }
}
