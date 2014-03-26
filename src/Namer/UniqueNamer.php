<?php

namespace Oneup\Displace\Namer;

use Oneup\Displace\FileInterface;
use Oneup\Displace\NamerInterface;

class UniqueNamer implements NamerInterface
{
    public function name(FileInterface $file)
    {
        return sprintf('%s.%s', uniqid(), $file->getExtension());
    }
}