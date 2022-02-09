<?php

namespace Tilemountain\Practics\Api;

use \Tilemountain\Practics\Api\Data\InventoryInterface;
use \Magento\Framework\Api\SearchCriteriaInterface;

interface InventoryRepositoryInterface
{
    /**
     * @api
     * @param \Tilemountain\Practics\Api\Data\InventoryInterface $model
     * @return \Tilemountain\Practics\Api\Data\InventoryInterface
     */
    public function save(InventoryInterface $model);

    /**
     * @api
     * @param \Tilemountain\Practics\Api\Data\InventoryInterface $model
     * @return \Tilemountain\Practics\Api\Data\InventoryInterface
     */
    public function delete(InventoryInterface $model);

    /**
     * @api
     * @param \Tilemountain\Practics\Api\Data\InventoryInterface $id
     * @return void
     */
    public function deleteById($id);

    /**
     * @api
     * @param int $id
     * @return \Tilemountain\Practics\Api\Data\InventoryInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getById($id);

    /**
     * @api
     * @param \Magento\Framework\Api\SearchCriteriaInterface $criteria
     * @return \Tilemountain\Practics\Api\Data\InventorySearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $criteria);
}
