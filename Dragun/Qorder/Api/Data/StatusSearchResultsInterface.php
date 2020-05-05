<?php


namespace Dragun\Qorder\Api\Data;

/**
 * Interface StatusSearchResultsInterface
 *
 * @package Dragun\Qorder\Api\Data
 */
interface StatusSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get status list.
     * @return \Dragun\Qorder\Api\Data\StatusInterface[]
     */
    public function getItems();

    /**
     * Set status_code list.
     * @param \Dragun\Qorder\Api\Data\StatusInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

