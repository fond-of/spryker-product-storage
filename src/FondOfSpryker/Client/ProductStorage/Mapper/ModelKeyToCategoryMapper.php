<?php

namespace FondOfSpryker\Client\ProductStorage\Mapper;

/**
 * Class ModelKeyToCategoryMapper
 * @deprecated mapping will be done in frontend
 * @package FondOfSpryker\Client\ProductStorage\Mapper
 */
class ModelKeyToCategoryMapper
{
    public const SMALL_FRIENDS = 'small-friend';
    public const SMALL_FRIENDS_ID = 3;

    public const LARGE_FRIENDS = 'large-friend';
    public const LARGE_FRIENDS_ID = 4;

    public const COTTON_FRIENDS = 'cotton-friend';
    public const COTTON_FRIENDS_ID = 5;

    public const PARENTS_BAG = 'parents-bag';
    public const PARENTS_BAG_ID = 5;

    public const MINI_FRIENDS = 'mini-friend';
    public const MINI_FRIENDS_ID = 6;

    public const LARGE_MONSTER_FRIENDS = 'large-monster-friend';
    public const LARGE_MONSTER_FRIENDS_ID = 5;

    public const MONSTER_FRIEND = 'monster-friend';
    public const MONSTER_FRIEND_ID = 5;

    public const DRINKING_BOTTELS = 'drinking-bottle';
    public const DRINKING_BOTTELS_ID = 8;

    public const MEMORY = 'remembory';
    public const MEMORY_ID = 10;

    public const LUNCHBOX_STAINLESS_STEEL = 'lunchbox-stainless-steel';
    public const LUNCHBOX_STAINLESS_STEEL_ID = 9;

    public const DRINKING_BOTTLE_STAINLESS_STEEL = 'stainless-steel-drinking-bottle';
    public const DRINKING_BOTTLE_STAINLESS_STEEL_ID = 8;

    private $categoriesMapping = [
        self::SMALL_FRIENDS => self::SMALL_FRIENDS_ID,
        self::LARGE_FRIENDS => self::LARGE_FRIENDS_ID,
        self::COTTON_FRIENDS => self::COTTON_FRIENDS_ID,
        self::PARENTS_BAG => self::PARENTS_BAG_ID,
        self::MINI_FRIENDS => self::MINI_FRIENDS_ID,
        self::LARGE_MONSTER_FRIENDS => self::LARGE_MONSTER_FRIENDS_ID,
        self::MONSTER_FRIEND => self::MONSTER_FRIEND_ID,
        self::DRINKING_BOTTELS => self::DRINKING_BOTTELS_ID,
        self::MEMORY => self::MEMORY_ID,
        self::LUNCHBOX_STAINLESS_STEEL => self::LUNCHBOX_STAINLESS_STEEL_ID,
        self::DRINKING_BOTTLE_STAINLESS_STEEL => self::DRINKING_BOTTLE_STAINLESS_STEEL_ID,
    ];

    /**
     * @deprecated mapping will be done in frontend
     * @param string $categoryKey
     * @return int|null
     */
    public function mapKeyToCategory(string $categoryKey): ?int
    {
        if (!isset($this->categoriesMapping[$categoryKey])) {
            return null;
        }

        return $this->categoriesMapping[$categoryKey];
    }
}
