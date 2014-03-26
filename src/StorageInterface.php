<?php

namespace Oneup\Displace;

interface StorageInterface
{
    /**
     * Move the given file to a new location and return
     * the moved file afterwards. The path parameter not only
     * includes the location but also the filename of the
     * file to get moved.
     *
     * @param FileInterface $file
     * @param string $path
     * @return FileInterface
     */
    public function move(FileInterface $file, $path);
}
