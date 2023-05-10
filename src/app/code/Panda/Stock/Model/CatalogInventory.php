<?php declare(strict_types=1);

namespace Panda\Stock\Model;

use Magento\Framework\Model\AbstractModel;
use Panda\Stock\Api\Data\CatalogInventoryInterface;

class CatalogInventory extends AbstractModel implements CatalogInventoryInterface
{
    protected function _construct()
    {
        $this->_init(ResourceModel\CatalogInventory::class);
    }

    public function getProductId()
    {
        return $this->getData(self::PRODUCT_ID);
    }

    public function setProductId($productId)
    {
        $this->setData(self::PRODUCT_ID, $productId);
    }

    public function getWebsiteId()
    {
        return $this->getData(self::WEBSITE_ID);
    }

    public function setWebsiteId($websiteId)
    {
        $this->setData(self::WEBSITE_ID, $websiteId);
    }

    public function getStockId()
    {
        return $this->getData(self::STOCK_ID);
    }

    public function setStockId($stockId)
    {
        $this->setData(self::STOCK_ID, $stockId);
    }

    public function getStockStatus()
    {
        return $this->getData(self::STOCK_STATUS);
    }

    public function setStockStatus($stockStatus)
    {
        $this->setData(self::STOCK_STATUS, $stockStatus);
    }

    public function getQty()
    {
        return $this->getData(self::QTY);
    }

    public function setQty($qty)
    {
        $this->setData(self::QTY, $qty);
    }
}
