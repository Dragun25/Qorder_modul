<?php


namespace Dragun\Qorder\Api\Data;

/**
 * Interface OrderSearchResultsInterface
 *
 * @package Dragun\Qorder\Api\Data
 */
interface OrderSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get order list.
     * @return \Dragun\Qorder\Api\Data\OrderInterface[]
     */
    public function getItems();

    /**
     * Set name list.
     * @param \Dragun\Qorder\Api\Data\OrderInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

