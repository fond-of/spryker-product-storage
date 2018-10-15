<?php

namespace FondOfSpryker\Client\ProductStorage\Plugin;

use Generated\Shared\Transfer\ProductViewTransfer;
use Spryker\Client\Kernel\AbstractPlugin;
use Spryker\Client\ProductStorageExtension\Dependency\Plugin\ProductViewExpanderPluginInterface;

/**
 * @method \FondOfSpryker\Client\ProductStorage\ProductStorageFactory getFactory()
 */
class ProductViewCategoryExpander extends AbstractPlugin implements ProductViewExpanderPluginInterface
{
    /**
     * Specification:
     * - Expands and returns the provided ProductView transfer objects.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductViewTransfer $productViewTransfer
     * @param array $productData
     * @param string $localeName
     *
     * @return \Generated\Shared\Transfer\ProductViewTransfer
     */
    public function expandProductViewTransfer(ProductViewTransfer $productViewTransfer, array $productData, $localeName)
    {
        if (!$productViewTransfer->getModelKey()) {
            return $productViewTransfer;
        }

        $categoryNodeId = $this->getFactory()
            ->createModelKeyToCategoryMapper()
            ->mapKeyToCategory($productViewTransfer->getModelKey());

        $productViewTransfer->setCategoryNodeId($categoryNodeId);

        /*$this->getFactory()
            ->getProductCategoryStorageClient()
            ->findProductAbstractCategory($productViewTransfer->getCategoryNodeId(), 'en_US');*/

        return $productViewTransfer;
    }
}
