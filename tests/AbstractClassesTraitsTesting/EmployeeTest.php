<?php

use PHPUnit\Framework\TestCase;
use forTestingAbstractClassesAndTraits\{PersonAbstract,Employee};

class EmployeeTest extends TestCase
{
    public function testFullName()
    {
        $mock = $this->getMockBuilder(PersonAbstract::class)
        ->setConstructorArgs(['John','Doe'])
        ->getMockForAbstractClass();

        $mock->expects($this->any())
        ->method('getSalary')
        ->will($this->returnValue(6000));

        $this->assertSame('John Doe earns 6000 per month',$mock->showFullNameAndSalary());

    }
}