<?php

final class bar_3 extends foo
{
    public $e = 100;


    public function getE(): int
    {
        return $this->e;
    }

    public function setE(int $e): void
    {
        $this->e = $e;
    }
    public function sumfb3()
    {
        return $this->e - $this->a;
    }

}