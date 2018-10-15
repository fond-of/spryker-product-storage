<?php

namespace FondOfSpryker\Client\ProductStorage;

use FondOfSpryker\Client\ProductStorage\Dependency\ProductStorageToCategoryStorageClientBridge;
use FondOfSpryker\Client\ProductStorage\Mapper\ModelKeyToCategoryMapper;
use Spryker\Client\ProductStorage\ProductStorageFactory as SprykerProductStorageFactory;

class ProductStorageFactory extends SprykerProductStorageFactory
{
    public function getProductCategoryStorageClient(): ProductStorageToCategoryStorageClientBridge
    {
        return $this->getProvidedDependency(ProductStorageDependencyProvider::CATEGORY_STORAGE_CLIENT);
    }

    public function createModelKeyToCategoryMapper(): ModelKeyToCategoryMapper
    {
        return new ModelKeyToCategoryMapper();
    }
}
