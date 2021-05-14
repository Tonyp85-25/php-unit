<?php

trait CustomAssertionTrait
{
    public function assertArrayData(array $array)
    {
        foreach(['nick','email','age'] as $key)
        {
            $this->assertArrayHasKey($key, $array,"Array does not contain the $key key.");
        }
        $this->assertIsString($array['nick'], 'Nick field must be string');
        $this->assertIsInt($array['age'], 'Age field must be an integer');
    }
}