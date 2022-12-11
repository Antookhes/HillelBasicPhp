<?php

class bar_2 extends foo
{
    public $d = 10;


    public function getD(): int
    {
        return $this->d;
    }

    public function setD(int $d): void
    {
        $this->d = $d;
    }
    public function sumfb2()
    {
        return $this->d / $this->a;
    }

}