<?php

use forStubMockTesting\User;
use PHPUnit\Framework\TestCase;

class UserStubTest extends TestCase
{
    public function testCreateUser()
    {
       // $user= new User;
    //    $stub = $this->getMockBuilder(User::class)->getMock(); all methods return null by default unless they are mocked
    //     $stub = $this->createStub(User::class);
    //    $stub->method('save')->willReturn('fake');
    //works like a real object
    // $stub = $this->getMockBuilder(User::class)->setMethods(null)->getMock();
    $stub = $this->getMockBuilder(User::class)
        ->disableOriginalConstructor()
        ->setMethods(['save']) //only saves method will have its behaviour changed
        ->getMock();
    $stub->method('save')->willReturn(true);


        $this->assertTrue($stub->createUser('Adam','email@com.pl'));
        $this->assertFalse($stub->createUser('Adam','email'));
    }
}