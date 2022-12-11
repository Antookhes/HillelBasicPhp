<?php

class bar_1_1 extends bar_1

{
    public $n = 20;

    public function getN(): int
    {
        return $this->n;
    }

    public function setN(int $n): void
    {
        $this->n = $n;
    }

    public function sumBb11()
    {
        return $this->n + $this->c;
    }
}