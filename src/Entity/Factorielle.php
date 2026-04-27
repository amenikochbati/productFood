<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Factorielle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private int $nbr;

    public function __construct(int $nbr)
    {
        $this->nbr = $nbr;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbr(): int
    {
        return $this->nbr;
    }

    public function setNbr(int $nbr): static
    {
        $this->nbr = $nbr;

        return $this;
    }

    public function calculFactoriel(): int
    {
        if ($this->nbr < 0) {
            throw new \InvalidArgumentException('Le nombre doit être positif ou nul.');
        }

        if ($this->nbr === 0) {
            return 1;
        }

        $result = 1;
        for ($i = 2; $i <= $this->nbr; $i++) {
            $result *= $i;
        }

        return $result;
    }
}
