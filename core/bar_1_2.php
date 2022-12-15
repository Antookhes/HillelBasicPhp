<?php

namespace Core;
class bar_1_2 extends bar_1
{
    public $f = 20;

    public function getF(): int
    {
        return $this->f;
    }

    public function setF(int $f): void
    {
        $this->f = $f;
    }

    public function sumBb12()
    {
        return $this->f * $this->c;
    }
}