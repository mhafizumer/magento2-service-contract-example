<?php

namespace Tilemountain\Practics\Model\ResourceModel\Inventory;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Initialize resource collection
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('Tilemountain\Practics\Model\Inventory', 'Tilemountain\Practics\Model\ResourceModel\Inventory');
    }
}
