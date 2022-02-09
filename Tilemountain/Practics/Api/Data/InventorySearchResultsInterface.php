<?php

namespace Tilemountain\Practics\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface InventorySearchResultsInterface extends SearchResultsInterface
{
    /**
     * @return \Tilemountain\Practics\Api\Data\InventoryInterface[]
     */
    public function getItems();

    /**
     * @param \Tilemountain\Practics\Api\Data\InventoryInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
