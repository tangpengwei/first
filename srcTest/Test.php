<?php
namespace srcTest;
use PHPUnit\Framework\TestCase;
use Tang\App\Hello;

class Test extends TestCase
{
    public function testXxx()
    {
        $hello = new Hello();
        var_dump($hello->test());
        $this->assertEquals(0,0);
    }
}