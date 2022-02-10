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
    /**
     * @return int
     */
    public function getProductId()
    {
      return $this->getData('product_id');
    }

    /**
     * @param $id
     * @return Inventory|void
     */
    public function setProductId($id)
    {
        $this->setData('product_id',$id);
    }

    /**
     * @return array|int|mixed|null
     */
    public function getCategoryId()
    {
        return $this->getData('category_id');
    }

    /**
     * @param $id
     * @return Inventory|void
     */
    public function setCategoryId($id)
    {
        $this->setData('category_id',$id);
    }

    /**
     * @return array|int|mixed|null
     */
    public function getStoreId()
    {
        return $this->getData('store_id');
    }

    /**
     * @param $id
     * @return Inventory|void
     */
    public function setStoreId($id)
    {
        $this->setData('store_id',$id);
    }

    /**
     * @return array|mixed|string|null
     */
    public function getProductName()
    {
        return $this->getData('product_name');
    }

    /**
     * @param $productName
     * @return Inventory|void
     */
    public function setProductName($productName)
    {
        $this->setData('product_name',$productName);
    }

    /**
     * @return array|mixed|string|null
     */
    public function getCategoryName()
    {
        return $this->getData('category_name');
    }

    /**
     * @param $productName
     * @return Inventory|void
     */
    public function setCategoryName($productName)
    {
        $this->setData('category_name',$productName);
    }
}
