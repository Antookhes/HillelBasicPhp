<?php

namespace Core;
class foo
{
    public int $a = 1;
    public int $b = 2;

    public function getTest():int
    {
        return $this->a;
    }
    public function setTest($a):void
    {
        $this->a = $a;
    }
    public function getTest_2():int
    {
        return $this->b;
    }
    public function setTest_2($b):void
    {
        $this->test_2 = $b;
    }
}