<?php
namespace App\Tests\Entity;
use App\Entity\Personne;
use PHPUnit\Framework\TestCase;
class PersonneTest extends TestCase
{
    public function testMajeur()
    {
        $personne = new Personne("Dupont", "Jean", 25);
        $categorie = $personne->categorie();
        $this->assertSame("majeur", $categorie);
    }
    public function testMineur()
    {
        $personne = new Personne("Durand", "Marie", 15);
        $categorie = $personne->categorie();
        $this->assertSame("mineur", $categorie);
    }
    public function testInvalidAge()
    {
        $personne = new Personne("Martin", "Pierre", -5);
        $this->expectException("Exception");
        $personne->categorie();
    }

}