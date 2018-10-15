<?php

namespace FondOfSpryker\Client\ProductStorage\Dependency;

use Generated\Shared\Transfer\CategoryNodeStorageTransfer;

interface ProductStorageToCategoryStorageClientInterface
{
    /**
     * @param int $idCategoryNode
     * @param string $localeName
     *
     * @return \Generated\Shared\Transfer\CategoryNodeStorageTransfer
     */
    public function getCategoryNodeById($idCategoryNode, $localeName): CategoryNodeStorageTransfer;
}
