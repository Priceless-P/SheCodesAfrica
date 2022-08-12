<?php

/**
 * This Class calculates the factorial of an integer
 */

 class Factorial {
    public function __construct()
    {
    }
    public function factorial($int)
    {
        if (is_numeric($int))
        {
            if ($int == 0)
                return 1;
            factorial($int * ($int - 1));
        }
    }
}
 