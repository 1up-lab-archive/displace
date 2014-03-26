<?php

namespace Oneup\Displace\Namer;

use Oneup\Displace\FileInterface;
use Oneup\Displace\NamerInterface;

class OriginalNamer implements NamerInterface
{
    public function name(FileInterface $file)
    {
        return $file->getPath();
    }
}