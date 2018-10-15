<?php

namespace FondOfSpryker\Client\ProductStorage\Plugin;

use Generated\Shared\Transfer\ProductViewTransfer;
use Spryker\Client\Kernel\AbstractPlugin;
use Spryker\Client\ProductStorageExtension\Dependency\Plugin\ProductViewExpanderPluginInterface;

/**
 * @method \FondOfSpryker\Client\ProductStorage\ProductStorageFactory getFactory()
 */
class ProductViewKeyExpander extends AbstractPlugin implements ProductViewExpanderPluginInterface
{
    public const DEFAULT_LOCALE = 'en_US';

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
        $nonLocalizedProductViewTransfer = $this->getFactory()
            ->createProductAbstractStorageReader()
            ->findProductAbstractStorageData($productViewTransfer->getIdProductAbstract(), self::DEFAULT_LOCALE);

        $model = $this->stringToKeyTransformer($nonLocalizedProductViewTransfer['attributes']['model']);
        $style = $this->stringToKeyTransformer($nonLocalizedProductViewTransfer['attributes']['style']);

        $productViewTransfer
            ->setModelKey($model)
            ->setStyleKey($style);

        return $productViewTransfer;
    }

    protected function stringToKeyTransformer(string $string): string
    {
        $search = [" "];
        $replace = ["-"];

        return str_replace($search, $replace, strtolower($string));
    }
}
