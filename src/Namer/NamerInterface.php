<?php

namespace Oneup\Displace\Namer;

use Oneup\Displace\File\FileInterface;

interface NamerInterface
{
    public function name(FileInterface $file);
}
