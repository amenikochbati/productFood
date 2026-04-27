<?php

namespace App\Tests\Entity;

use App\Entity\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function testfood(): void
    {
        $product = new Product();

        $this->assertInstanceOf(Product::class, $product);
    }
}