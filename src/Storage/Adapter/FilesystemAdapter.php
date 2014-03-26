<?php

namespace Oneup\Displace\Storage\Adapter;

use Oneup\Displace\Storage\AdapterInterface;

class FilesystemAdapter implements AdapterInterface
{
    protected $directory;

    public function __construct($directory)
    {
        if (!is_dir($directory)) {
            throw new \InvalidArgumentException(sprintf('The given string "%s" is not a directory', $directory));
        }

        if (!is_writeable($directory)) {
            throw new \InvalidArgumentException(sprintf('The directory "%s" is not writeable.', $directory));
        }

        $this->directory = $directory;
    }

    public function getDirectory()
    {
        return $this->directory;
    }
}
