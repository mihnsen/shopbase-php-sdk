<?php

namespace Shopbase\Storage;

interface PersistentStorageInterface
{
    public function get($key);

    public function set($key, $value);
}
