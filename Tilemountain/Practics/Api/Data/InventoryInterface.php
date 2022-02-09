<?php

namespace Tilemountain\Practics\Api\Data;

use Magento\Tests\NamingConvention\true\string;

interface InventoryInterface
{
    /**
     * Return the Product ID
     * @return int
     */
    public function getProductId();

    /**
     * Set Product ID
     * @param int $id
     * @return $this
     */
    public function setProductId($id);
    /**
     * Return the Category ID
     * @return int
     */
    public function getCategoryId();

    /**
     * Set Product ID
     * @param int $id
     * @return $this
     */
    public function setCategoryId($id);

    /**
     * Return the Store ID
     * @return int
     */
    public function getStoreId();

    /**
     * Set Store ID
     * @param int $id
     * @return $this
     */
    public function setStoreId($id);

    /**
     * Return the ProductName
     * @return string
     */
    public function getProductName();

    /**
     * Set Product Name
     * @param string $productName
     * @return $this
     */
    public function setProductName($productName);

    /**
     * Return the Category Name
     * @return string
     */
    public function getCategoryName();

    /**
     * Set Category Name
     * @param string $productName
     * @return $this
     */
    public function setCategoryName($productName);
}
