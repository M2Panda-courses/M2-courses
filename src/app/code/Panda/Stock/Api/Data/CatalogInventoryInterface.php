<?php declare(strict_types=1);

namespace Panda\Stock\Api\Data;

/**
 * Stock inventory interface.
 * @api
 * @since 1.0.0
 */
interface CatalogInventoryInterface
{
    const PRODUCT_ID = 'product_id';
    const WEBSITE_ID = 'website_id';
    const STOCK_ID = 'stock_id';
    const STOCK_STATUS = 'stock_status';
    const QTY = 'qty';

    /**
     * @return int
     */
    public function getProductId();

    /**
     * @param int $productId
     * @return $this
     */
    public function setProductId($productId);

    /**
     * @return int
     */
    public function getWebsiteId();

    /**
     * @param int $websiteId
     * @return $this
     */
    public function setWebsiteId($websiteId);

    /**
     * @return int
     */
    public function getStockId();

    /**
     * @param int $stockId
     * @return $this
     */
    public function setStockId($stockId);

    /**
     * @return int
     */
    public function getStockStatus();

    /**
     * @param int $stockStatus
     * @return $this
     */
    public function setStockStatus($stockStatus);

    /**
     * @return int
     */
    public function getQty();

    /**
     * @param int $stockStatus
     * @return $this
     */
    public function setQty($qty);
}

