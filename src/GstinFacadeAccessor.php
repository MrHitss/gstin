<?php

namespace Mrhitss\Gstin;

use Exception;
use Mrhitss\Gstin\Services\Gstin as GstinClient;

class GstinFacadeAccessor
{
    /**
     * Gstin API provider object.
     *
     * @var GstinClient
     */
    public static GstinClient $provider;

    /**
     * Get specific Gstin API provider object to use.
     *
     * @throws Exception
     *
     * @return GstinClient
     */
    public static function getProvider(): GstinClient
    {
        return self::$provider;
    }

    /**
     * Set Gstin API Client to use.
     *
     * @throws \Exception
     *
     * @return GstinClient
     */
    public static function setProvider(): GstinClient
    {
        // Set default provider. Defaults to ExpressCheckout
        self::$provider = new GstinClient();

        return self::getProvider();
    }
}