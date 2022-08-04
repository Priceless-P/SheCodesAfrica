<?php

class Conditionals {

    /* This functions checks whether a person is eligible to vote or not. 
    Minimum voting age is 18 */
    public function voteOrNot($name, $age)
    {
        if($age < 18)
            return "$name, You're not yet of age to vote";
        return "Yee! $name, You are eligible to vote";
    }

    /* This function checks whether a number is positive, negative or zero. */

    public function checkNum($num)
    {
        if($num < 0)
            return "$num is negative";
        elseif($num == 0)
            return "$num is 0";
        elseif($num > 0)
            return "$num is positive";
        elseif(! is_numeric($num))
            return "Plesee enter a numeric value";
    }

    /**
     * This function calculate electricity bill using if-else conditions.
     * Conditions:
     * For 50 units and below – $10/unit
     * For 51 - 300 units – $8/unit
     * For 301 - 500 units – $5/unit
     * For units above 500 – $3/unit
     */

     public function electBills($units)
     {
        $first_unit = 10;
        $second_unit = 8;
        $third_unit = 5;
        $last_unit = 3;

        if ($units <= 50)
        {
            $bill = $units * $first_unit;
            echo "Your bill is $".$bill;
        }
        elseif ($units > 50 && $units <= 300)
        {
            $bill = $units * $second_unit;
            echo "Your bill is $".$bill;
        }
        else if ($units > 300 && $units <= 500)
        {
            $bill = $units * $third_unit;
            echo "Your bill is $".$bill;
        }
        else
        {
            $bill = $units * $last_unit;
            echo "Your bill is $".$bill;
        }
     }

     /**
      * This function is a simple calculator program using switch case.
      * Operations:
      * Addition
      * Subtraction
      * Multiplication
      * Division
      */
     public function calculator($operator, $first_num, $secon_num)
     {
        $result = '';
        if (is_numeric($first_num) && is_numeric($secon_num))
        {
        switch ($operator)
        {
            case "Add":
                $result = $first_num + $secon_num;
                break;
            case "Subtract":
                $result = $first_num - $secon_num;
                break;
            case "Multiply":
                $result = $first_num * $secon_num;
                break;
            case "Divide":
                $result = $first_num / $secon_num;
                break;
        }
    }
    }    
}