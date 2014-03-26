<?php

namespace Oneup\Displace;

interface FileInterface
{
    public function getSize();
    public function getPathname();
    public function getPath();
    public function getBasename();
    public function getMimeType();

    public function move($path, $name);
}
