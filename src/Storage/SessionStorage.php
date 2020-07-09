<?php

namespace Shopbase\Storage;

use Shopbase\Exception\ShopbaseSdkException;

class SessionStorage implements PersistentStorageInterface
{
    protected $prefix = 'SHPFY_';

    /**
     * @param $key
     * @return bool
     * @throws ShopbaseSdkException
     */
    public function get($key)
    {
        $this->assertSession();
        if (isset($_SESSION[$this->prefix . $key])) {
            return $_SESSION[$this->prefix . $key];
        }
        return false;
    }

    /**
     * @param $key
     * @param $value
     * @throws ShopbaseSdkException
     */
    public function set($key, $value)
    {
        $this->assertSession();
        $_SESSION[$this->prefix . $key] = $value;
    }

    /**
     * @throws ShopbaseSdkException
     */
    public function assertSession()
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            throw new ShopbaseSdkException(
                "Sessions are not active. Please start one using session_start()"
            );
        }
    }
}
