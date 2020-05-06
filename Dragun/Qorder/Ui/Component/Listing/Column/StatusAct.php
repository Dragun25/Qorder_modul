<?php


namespace Dragun\Qorder\Ui\Component\Listing\Column;

use \Magento\Framework\Data\OptionSourceInterface;
use Dragun\Qorder\Model\ResourceModel\Status\CollectionFactory;


class StatusAct implements OptionSourceInterface
{
    /**
     * @var CollectionFactory
     */
    protected $status;

    /**
     * StatusAct constructor.
     * @param CollectionFactory $status
     */
    public function __construct(CollectionFactory $status)
    {
        $this->status = $status;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        $collection = $this->status->create();
        $items = $collection->getItems();
        $data = [];
        foreach ($items as $item) {
            $statusCode = $item->getData('status_id');
//            $statusCode .= '1';
            $label = $item->getData('label');
            $default = $item->getData('is_default');
            if ($default == '1')
            {
                $data[] = ['value' => '999', 'label' => __($label)];
            }
            else $data[] = ['value' => $statusCode, 'label' => __($label)];

        }
        return $data;
    }

    /**
     * @return array
     */
    public function toOptionArray()
    {
        return $this->getOptions();
    }
}