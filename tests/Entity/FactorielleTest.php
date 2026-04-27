<?php

namespace App\Tests\Entity;

use App\Entity\Factorielle;
use PHPUnit\Framework\TestCase;

class FactorielleTest extends TestCase
{
    public function testCalculFactorielZero(): void
    {
        $factorielle = new Factorielle(0);

        $this->assertSame(1, $factorielle->calculFactoriel());
    }

    /**
     * @dataProvider positiveNumbersProvider
     */
    public function testCalculFactorielPositive(int $nbr, int $expected): void
    {
        $factorielle = new Factorielle($nbr);

        $this->assertSame($expected, $factorielle->calculFactoriel());
    }

    public function testCalculFactorielNegative(): void
    {
        $factorielle = new Factorielle(-1);

        $this->expectException(\InvalidArgumentException::class);

        $factorielle->calculFactoriel();
    }

    public static function positiveNumbersProvider(): array
    {
        return [
            [3, 6],
            [5, 120],
            [7, 5040],
            [8, 40320],
        ];
    }
}
