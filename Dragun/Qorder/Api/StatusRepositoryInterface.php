<?php


namespace Dragun\Qorder\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * Interface StatusRepositoryInterface
 *
 * @package Dragun\Qorder\Api
 */
interface StatusRepositoryInterface
{

    /**
     * Save status
     * @param \Dragun\Qorder\Api\Data\StatusInterface $status
     * @return \Dragun\Qorder\Api\Data\StatusInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \Dragun\Qorder\Api\Data\StatusInterface $status
    );

    /**
     * Retrieve status
     * @param string $statusId
     * @return \Dragun\Qorder\Api\Data\StatusInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($statusId);

    /**
     * Retrieve status matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Dragun\Qorder\Api\Data\StatusSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete status
     * @param \Dragun\Qorder\Api\Data\StatusInterface $status
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \Dragun\Qorder\Api\Data\StatusInterface $status
    );

    /**
     * Delete status by ID
     * @param string $statusId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($statusId);
}

