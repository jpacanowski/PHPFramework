<?php

class Number
{
    public function random()
    {
        echo mt_rand(1, 80);
    }

    public function show($arg)
    {
        echo $arg;
    }

    public function add($arg1, $arg2)
    {
        echo $arg1 + $arg2;
    }
}