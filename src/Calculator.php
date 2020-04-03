<?php


class Calculator
{
    public function sum($numberOne, $numberTwo)
    {
        if ($numberOne / 2 + $numberTwo / 2 >= PHP_INT_MAX / 2) {
            throw new Exception("so nhap vao qua lon");
        }

        return $numberOne + $numberTwo;
    }

    public function sub($numberOne, $numberTwo)
    {
        if ($numberOne / 2 - $numberTwo / 2 < PHP_INT_MAX / 2) {
            throw new Exception("so nhap vao qua nho");
        }

        return $numberOne - $numberTwo;
    }

    public function division($numberOne, $numberTwo)
    {
        if ($numberTwo == 0) {
            throw new Exception("so chia phai khac 0");
        }

        return $numberOne / $numberTwo;
    }
}