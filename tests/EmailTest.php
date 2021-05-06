<?php


use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    /**
    *@dataProvider emailsProvider
     *
     */
    public function testValidEmail($email)
    {
    $this->assertRegExp('/^.+\@\S+\.\S+$/', $email);
    }

    public function emailsProvider(): array
    {
        return [
            ['dsds@sdf.dd'],
            ['dsdsdqss@sdf.ddffd'],
            ['dssdfds@sdddf'],
        ];
    }


}
