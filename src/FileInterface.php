<?php

namespace Oneup\Displace;

interface FileInterface
{
    /**
     * Return the size of this file in bytes.
     *
     * @return integer
     */
    public function getSize();

    /**
     * Return the absolute path including this
     * files name.
     *
     * @return string
     */
    public function getPathname();

    /**
     * Return the path part of this files location.
     *
     * @return string
     */
    public function getPath();

    /**
     * Return the name part of this files location.
     *
     * @return string
     */
    public function getBasename();

    /**
     * Return the mime type of this file.
     *
     * @return string
     */
    public function getMimeType();

    /**
     * Return the extension of the file.
     *
     * @return string
     */
    public function getExtension();
}
