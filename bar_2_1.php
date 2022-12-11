<?php

class bar_2_1 extends bar_2
{
    public $g = 20;

    public function getG(): int
    {
        return $this->g;
    }

    public function setG(int $g): void
    {
        $this->g = $g;
    }

    public function sumBb21()
    {
        return pow($this->g,  $this->d) . ' ' . $this->g + $this->a;
    }

}