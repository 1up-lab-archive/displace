<?php

namespace Oneup\Displace;

use Oneup\Displace\FileInterface;

interface NamerInterface
{
    public function name(FileInterface $file);
}
