<?php

class AutoloaderTest extends \PHPUnit_Framework_TestCase
{
    public function testIfNamespaceIsRegistered()
    {
        $this->assertTrue(interface_exists('Oneup\Displace\Storage\StorageInterface', true));
    }

    public function testIfTestCaseLoadsCorrectly()
    {
        $this->assertTrue(true);
        $this->assertFalse(false);
    }
}
