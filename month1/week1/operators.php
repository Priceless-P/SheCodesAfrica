<?php

class Operators {

    #This function returns the absolute value of a given number
    public function absolute($num)
    {
        return abs($num);
    }

    #This function returns the square root of a number 
    public function square_root ($num)
    {
        return sqrt($num);
    }

    #This function print multiplication table of any number
    public function multiply_table ($num)
    {
        {
            for ($i=0; $i <= 10; $i++)
            {
                $result = $num * $i;
                echo "$num X $i = $result \n";
            }
        }
    }

    #This function adds a given number to itself, multiplies itself and return the result of (sum + prouduct)
    public function ($num)
    {
        $sum = $num + $num;
        $multiple = $num * $num;
        $result = $sum + $multiple;
        return $result;
    }
    
}