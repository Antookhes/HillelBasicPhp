<?php

class bar_2_2 extends bar_2
{
    public $t = 20;

    public function getT(): int
    {
        return $this->t;
    }

    public function setT(int $t): void
    {
        $this->t = $t;
    }

    public function sumBb21()
    {
        return $this->t + $this->d . ' ' . $this->T / $this->a;
    }
}