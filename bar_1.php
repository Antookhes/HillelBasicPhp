<?php

//Каждый наследник должен содержать одно свойство
//
//Каждое свойство должно иметь геттер и сеттер
//
//Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными
//
//Один наследник не должен быть наслед
class bar_1 extends foo
{
public $c = 10;

       public function getC(): int
    {
        return $this->c;
    }

    public function setC(int $c): void
    {
        $this->c = $c;
    }

    public function sumfb1()
    {
       return $this->c + $this->a;
    }
}













