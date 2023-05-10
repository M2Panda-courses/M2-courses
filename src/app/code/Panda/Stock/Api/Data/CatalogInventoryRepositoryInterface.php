<?php declare(strict_types=1);

namespace Panda\Stock\Api\Data;

use Magento\Framework\Exception\NoSuchEntityException;
use Panda\Stock\Api\Data\CatalogInventoryInterface;
use Magento\Framework\Exception\LocalizedException;

/**
 * Stock inventory CRUD interface.
 * @api
 * @since 1.0.0
 */
interface CatalogInventoryRepositoryInterface
{
    /**
     * @param int $productId
     * @return CatalogInventoryInterface
     * @throws LocalizedException
     */
    public function getById(int $productId): CatalogInventoryInterface;

    /**
     * @param CatalogInventoryInterface $catalogInventory
     * @return CatalogInventoryInterface
     * @throws LocalizedException
     */
    public function save(CatalogInventoryInterface $catalogInventory): CatalogInventoryInterface;

    /**
     * @param int $productId
     * @return bool
     * @throws LocalizedException
     * @throws NoSuchEntityException
     */
    public function deleteById(int $productId): bool;
}
