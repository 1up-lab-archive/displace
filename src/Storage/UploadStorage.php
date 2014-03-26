<?php

namespace Oneup\Displace\Storage;

use Oneup\Displace\FileInterface;
use Oneup\Displace\Storage\StorageInterface;

class UploadStorage implements StorageInterface
{
    protected $adapter;

    public function __construct(AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    public function upload(FileInterface $file, $key)
    {

    }
}
