<?php


use PHPUnit\Framework\TestCase;

class DependenciesTest extends TestCase
{
    private $value;

    public function testFirst()
    {
        $this->value=1;
        $this->assertEquals(1,$this->value);
        return $this->value;
    }

    /**
     * @depends testFirst
     */
    public function testDependencies1($value)
    {
        $value ++;
        $expected =2;
        $this->assertEquals($expected,$value);
    }
}
