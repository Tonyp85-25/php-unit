<?php
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    use CustomAssertionTrait;
    public function testValidUserName()
    {
        $user = new User('donald','Duck');
        $expected = 'Donald';
        $phpunit =$this;
        //testing private properties, complicated !!
        $closure = function() use($phpunit,$expected)
        {
            $phpunit->assertSame($expected,$this->name);
        };
        $binding = $closure->bindTo($user,get_class($user));
        $binding();

    }

    public function testValidUserName2()
    {
        $user = new class('donald','duck') extends User
        {

            public function getName(Type $var = null)
            {
                return $this->name;
            }
        };

        $this->assertSame('Donald',$user->getName());
    }

    public function testValidDataFormat()
    {
        $user = new User('donald', 'duck');
        // with no mocked Database we should have some risky test
        $mockedDb = new class  extends Database
        {
            public function getEmailAndLastName()
            {
                echo 'no real db touched';
            }
        };
        $setUserClosure = function () use ($mockedDb)
        {
            $this->db= $mockedDb;
        };
        
        $executeSetUserClosure = $setUserClosure->bindTo($user, get_class($user));
        $executeSetUserClosure();

        $this->assertSame('Donald Duck', $user->getFullName());
    }

    public function testPasswordHashed()
    {
        $user = new User('donald','duck');

        $expected = 'hashed password';

        $phpunit = $this;

        $assertClosure = function() use($phpunit,$expected)
        {
            $phpunit->assertSame($expected,$this->hashPassWord());
        };

        $executeAssertClosure = $assertClosure->bindTo($user,get_class($user));
        $executeAssertClosure();
    }

    // public function testPasswordHashed2()
    // {
    //     $user = new class ('donald','duck') extends testValidUserName
    //     {
    //         public function getHashedPassword()
    //         {
    //             return $this->hashPassword();
    //         }
    //     };
    // }
    public function testCustomDataStructure()
    {
        $data= [
            'nick'=>'Dollar',
            'email'=>'donald@duck.mxn',
            'age'=>70
        ];
        $this->assertArrayData($data);

    }
}
