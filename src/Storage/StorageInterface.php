<?php

namespace Oneup\Displace\Storage;

use Oneup\Displace\File\FileInterface;

interface StorageInterface
{
    public function upload(FileInterface $file, $key);
}
