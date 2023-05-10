<?php declare(strict_types=1);

namespace Panda\Stock\Model;

use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use Panda\Stock\Api\Data\CatalogInventoryInterface;
use Panda\Stock\Api\Data\CatalogInventoryRepositoryInterface;
use Panda\Stock\Model\ResourceModel\CatalogInventory as CatalogInventoryResourceModule;

class CatalogInventoryRepository implements CatalogInventoryRepositoryInterface
{
    public function __construct(
        private CatalogInventoryFactory $catalogInventoryFactory,
        private CatalogInventoryResourceModule $catalogInventoryResourceModule,
    ){}

    public function getById(int $productId): CatalogInventoryInterface
    {
        $catalogInventory = $this->catalogInventoryFactory->create();
        $this->catalogInventoryResourceModule->load($catalogInventory, $productId);

        if (!$catalogInventory->getId()){
            throw new NoSuchEntityException(__('The product with "%1" id does not exist', $productId));
        }

        return $catalogInventory;
    }

    public function save(CatalogInventoryInterface $catalogInventory): CatalogInventoryInterface
    {
        try{
            $this->catalogInventoryResourceModule->save($catalogInventory);
        } catch (\Exception $exception){
            throw new CouldNotSaveException(__($exception->getMessage()));
        }

        return $catalogInventory;
    }

    public function deleteById(int $productId): bool
    {
        try{
            $this->catalogInventoryResourceModule->delete($this->getById($productId));
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__($exception->getMessage()));
        }

        return true;
    }
}
