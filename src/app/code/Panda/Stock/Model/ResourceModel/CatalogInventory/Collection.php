<?php declare(strict_types=1);

namespace Panda\Stock\Model\ResourceModel\CatalogInventory;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Panda\Stock\Model\CatalogInventory;
use Panda\Stock\Model\ResourceModel\CatalogInventory as CatalogInventoryResourceModule;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(CatalogInventory::class, CatalogInventoryResourceModule::class);
    }
}
