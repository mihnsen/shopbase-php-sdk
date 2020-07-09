<?php

namespace Shopbase\Service;

use Shopbase\Object\Asset;
use Shopbase\Exception\ShopbaseSdkException;

class AssetService extends AbstractService
{
    /**
     * Receive a list of all assets
     *
     * @link   https://help.shopify.com/api/reference/asset#index
     * @param  integer $themeId
     * @param  array   $params
     * @throws ShopbaseSdkException
     */
    public function all($themeId, array $params = array())
    {
        throw new ShopbaseSdkException('AssetService::all() not implemented');
    }

    /**
     * Receive a single asset
     *
     * @link   https://help.shopify.com/api/reference/asset#show
     * @param  integer $themeId
     * @param  array   $params
     * @throws ShopbaseSdkException
     */
    public function get($themeId, array $params = array())
    {
        throw new ShopbaseSdkException('AssetService::get() not implemented');
    }

    /**
     * Creating or modifying an asset
     *
     * @link   https://help.shopify.com/api/reference/asset#update
     * @param  integer $themeId
     * @param  Asset   $asset
     * @throws ShopbaseSdkException
     */
    public function put($themeId, Asset $asset)
    {
        throw new ShopbaseSdkException('AssetService::put() not implemented');
    }

    /**
     * Remove an asset from the database
     *
     * @link   https://help.shopify.com/api/reference/asset#destroy
     * @param  integer $themeId
     * @param  Asset   $asset
     * @throws ShopbaseSdkException
     */
    public function delete($themeId, Asset $asset)
    {
        throw new ShopbaseSdkException('AssetService::delete() not implemented');
    }
}
