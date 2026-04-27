<?php

namespace App\Tests\Entity;

use App\Entity\CompteBancaire;
use PHPUnit\Framework\TestCase;

class CompteBancaireTest extends TestCase
{
    /**
     * @dataProvider retraitsValides
     */
    public function testRetraitValide(float $solde, float $montant, float $reste)
    {
        $compte = new CompteBancaire("ameni", $solde);

        $resultat = $compte->retirer($montant);

        $this->assertSame($reste, $resultat);
    }

    public static function retraitsValides(): array
    {
        return [
            [1000.0, 300.0,  700.0],
            [500.0,  200.0,  300.0],
            [1500.0, 500.0, 1000.0],
            [2000.0, 100.0, 1900.0],
        ];
    }

    public function testRetraitImpossible()
    {
        $compte = new CompteBancaire("kochbati", 300);

        $this->expectException("Exception");

        $compte->retirer(500);
    }
}