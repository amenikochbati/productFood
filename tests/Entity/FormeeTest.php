<?php
namespace App\Tests\Entity;
use App\Entity\Formee;
use PHPUnit\Framework\TestCase;

class FormeeTest extends TestCase  
{
    public function testsurface()
    {
        $forme = new Formee(8, 8, "carré");  
        $this->assertSame(64, $forme->surface());
    }

    public function testPerimetre()
    {
        $forme = new Formee(8, 8, "carré"); 
        $this->assertSame(32, $forme->perimetre());
    }

    public function testInvalidDimensions()
    {
        $forme = new Formee(-8, 8, "carré");
        $this->expectException(\Exception::class); 
        $forme->surface();
    }
}