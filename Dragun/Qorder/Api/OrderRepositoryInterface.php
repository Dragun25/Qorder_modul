<?php


namespace Dragun\Qorder\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * Interface OrderRepositoryInterface
 *
 * @package Dragun\Qorder\Api
 */
interface OrderRepositoryInterface
{

    /**
     * Save order
     * @param \Dragun\Qorder\Api\Data\OrderInterface $order
     * @return \Dragun\Qorder\Api\Data\OrderInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \Dragun\Qorder\Api\Data\OrderInterface $order
    );

    /**
     * Retrieve order
     * @param string $orderId
     * @return \Dragun\Qorder\Api\Data\OrderInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($orderId);

    /**
     * Retrieve order matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Dragun\Qorder\Api\Data\OrderSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete order
     * @param \Dragun\Qorder\Api\Data\OrderInterface $order
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \Dragun\Qorder\Api\Data\OrderInterface $order
    );

    /**
     * Delete order by ID
     * @param string $orderId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($orderId);
}

