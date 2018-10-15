<?php

namespace FondOfSpryker\Client\ProductStorage\Dependency;

use Generated\Shared\Transfer\CategoryNodeStorageTransfer;

class ProductStorageToCategoryStorageClientBridge implements ProductStorageToCategoryStorageClientInterface
{
    /**
     * @var \Spryker\Client\CategoryStorage\CategoryStorageClientInterface
     */
    protected $categoryClient;

    /**
     * @param \Spryker\Client\CategoryStorage\CategoryStorageClientInterface $categoryClient
     */
    public function __construct($categoryClient)
    {
        $this->categoryClient = $categoryClient;
    }

    /**
     * @param int $idCategoryStorageNode
     * @param string $localeName
     *
     * @return \Generated\Shared\Transfer\CategoryNodeStorageTransfer
     */
    public function getCategoryNodeById($idCategoryStorageNode, $localeName): CategoryNodeStorageTransfer
    {
        return $this->categoryClient->getCategoryNodeById($idCategoryStorageNode, $localeName);
    }
}
