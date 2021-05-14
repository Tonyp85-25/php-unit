<?php


use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function testProduct()
    {
        $product =new Product(new Session());
        $this->assertSame('product 1', $product->fetchProductById(1));
    }
    public function testAnother()
    {
        $this->markTestIncomplete(
            'This test has not been implemented yet'
        );
        if(!extension_loaded('xdebug'))
        {
            $this->markTestSkipped(
                'The Xdebug extension is not available'
            );
        }
    }
}
