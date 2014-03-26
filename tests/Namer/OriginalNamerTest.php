<?php

use Oneup\Displace\Namer\OriginalNamer;

class OriginalNamerTest extends \PHPUnit_Framework_TestCase
{
    public function testNamer()
    {
        $file = '/dir/file.ext';

        $namer = new OriginalNamer();
        $stub = $this->getMock('Oneup\Displace\FileInterface');

        $stub
            ->expects($this->any())
            ->method('getPath')
            ->will($this->returnValue($file))
        ;

        $name = $namer->name($stub);

        $this->assertEquals($file, $name);

    }
}