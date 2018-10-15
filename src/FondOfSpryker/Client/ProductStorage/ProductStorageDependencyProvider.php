<?php

namespace FondOfSpryker\Client\ProductStorage;

use FondOfSpryker\Client\ProductStorage\Dependency\ProductStorageToCategoryStorageClientBridge;
use Spryker\Client\Kernel\Container;
use Spryker\Client\ProductStorage\ProductStorageDependencyProvider as SprykerProductStorageDependencyProvider;

class ProductStorageDependencyProvider extends SprykerProductStorageDependencyProvider
{
    const CATEGORY_STORAGE_CLIENT = 'CATEGORY_STORAGE_CLIENT';

    protected function addCategoryStorageClient(Container $container)
    {
        $container[self::CATEGORY_STORAGE_CLIENT] = function (Container $container) {
            return new ProductStorageToCategoryStorageClientBridge(
                $container->getLocator()->categoryStorage()->client()
            );
        };

        return $container;
    }
}
