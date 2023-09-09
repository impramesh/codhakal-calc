<?php

namespace Codhakal\Calc\Controllers;

class CalcController
{
    public function __invoke($num)
    {
        $result =  $num;
        return view('calc::calc.index', compact('result'));
    }
}
