<?php

namespace Oneup\Displace;

use Oneup\Displace\FileInterface;

interface NamerInterface
{
    /**
     * Create and return a name for the given file.
     *
     * @param FileInterface $file
     * @return string
     */
    public function name(FileInterface $file);
}
