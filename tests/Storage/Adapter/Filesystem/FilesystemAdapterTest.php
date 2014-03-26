<?php

use Oneup\Displace\Storage\Adapter\Filesystem\FilesystemAdapter;

class FilesystemAdapterTest extends \PHPUnit_Framework_TestCase
{
    protected $nonWriteablePath;

    public function setUp()
    {
        // create a non writeable directory
        $path = sys_get_temp_dir() . '/not-writeable';

        if (!is_dir($path)) {
            mkdir($path);
            chmod($path, 0444);
        }

        $this->nonWriteablePath = $path;
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testCreationWithNonExistentDirectory()
    {
        $adapter = new FilesystemAdapter(null);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testCreationWithNonWriteableDirectory()
    {
        $adapter = new FilesystemAdapter($this->nonWriteablePath);
    }

    public function tearDown()
    {
        rmdir($this->nonWriteablePath);
    }
}
