<?php declare(strict_types=1);

namespace Panda\Stock\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class CatalogInventory extends AbstractDb
{
    const MAIN_TABLE = 'cataloginventory_stock_status';
    const ID_FIELD_NAME = 'product_id';
    protected function _construct()
    {
        $this->_init(self::MAIN_TABLE, self::ID_FIELD_NAME);
    }
}
