<?php

namespace Oneup\Displace\File;

interface FileInterface
{
    public function getSize();
    public function getPathname();
    public function getPath();
    public function getBasename();
    public function getMimeType();
}
