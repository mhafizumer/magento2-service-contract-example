<?php

namespace Tilemountain\Practics\Model;

use Tilemountain\Practics\Api\Data\InventoryInterface;

class Inventory extends \Magento\Framework\Model\AbstractModel implements
    \Tilemountain\Practics\Api\Data\InventoryInterface
{
    protected function _construct()
    {
        $this->_init('Tilemountain\Practics\Model\ResourceModel\Inventory');
    }

    public function getProductId()
    {
        // TODO: Implement getProductId() method.
    }

    public function setProductId($id)
    {
        // TODO: Implement setProductId() method.
    }

    public function getCategoryId()
    {
        // TODO: Implement getCategoryId() method.
    }

    public function setCategoryId($id)
    {
        // TODO: Implement setCategoryId() method.
    }

    public function getStoreId()
    {
        // TODO: Implement getStoreId() method.
    }

    public function setStoreId($id)
    {
        // TODO: Implement setStoreId() method.
    }

    public function getProductName()
    {
        // TODO: Implement getProductName() method.
    }

    public function setProductName($productName)
    {
        // TODO: Implement setProductName() method.
    }

    public function getCategoryName()
    {
        // TODO: Implement getCategoryName() method.
    }

    public function setCategoryName($productName)
    {
        // TODO: Implement setCategoryName() method.
    }
}
