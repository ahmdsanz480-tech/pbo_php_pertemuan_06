<?php

declare(strict_types=1);

abstract class BangunDatar
{
    abstract public function luas(): float;

    abstract public function keliling(): float;

    abstract public function nama(): string;

    public function deskripsi(): string
    {
        return sprintf(
            '%s, luas %.2f, keliling %.2f',
            $this->nama(),
            $this->luas(),
            $this->keliling()
        );
    }
}
