<?php declare(strict_types=1);

namespace Panda\Stock\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Panda\Stock\Api\Data\CatalogInventoryInterface;
use Panda\Stock\Api\Data\CatalogInventoryRepositoryInterface;
use Panda\Stock\Model\ResourceModel\CatalogInventory\Collection;
use \Magento\Framework\Exception\LocalizedException;

class CatalogInventory implements ArgumentInterface
{
    public function __construct(
        private Collection $collection,
        private CatalogInventoryRepositoryInterface $catalogInventoryRepository,
    ) {}

    /**
     * @return array
     */
    public function getList(): array
    {
        return $this->collection->getItems();
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->collection->count();
    }

    public function getDetail($id): CatalogInventoryInterface
    {
        return $this->catalogInventoryRepository->getById($id);
    }
}
