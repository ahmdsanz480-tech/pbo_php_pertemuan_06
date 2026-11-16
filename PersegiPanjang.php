<?php

declare(strict_types=1);

require_once 'BangunDatar.php';

class PersegiPanjang extends BangunDatar
{
    public function __construct(
        private float $panjang,
        private float $lebar
    ) {
    }

    public function luas(): float
    {
        return $this->panjang * $this->lebar;
    }

    public function keliling(): float
    {
        return 2 * ($this->panjang + $this->lebar);
    }

    public function nama(): string
    {
        return 'Persegi Panjang';
    }
}