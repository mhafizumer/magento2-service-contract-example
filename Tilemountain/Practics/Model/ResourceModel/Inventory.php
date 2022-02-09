<?php

namespace Tilemountain\Practics\Model\ResourceModel;

class Inventory extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected $_idFieldName = 'entity_id';

    protected function _construct()
    {
        $this->_init('practics_new','entity_id');
    }
}
