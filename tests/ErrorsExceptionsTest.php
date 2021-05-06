<?php


use PHPUnit\Framework\TestCase;

class ErrorsExceptionsTest extends TestCase
{
    public function testErrorCanBeExpected()
    {
        $this->expectError();
        $this->expectErrorMessage('foo');

        // \trigger_error('foo', \E_USER_ERROR);
        $file = fopen("test.txt", "r");
    }
}
