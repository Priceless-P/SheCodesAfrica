<?php
class Functions {

    /**
     * This function that whether a string is all lowercase
     */
    public function isLower($string)
    {
        $new_str = str_replace(' ', '', $string);
    
        if (ctype_lower($new_str))
        {
            echo "All lowercase\n";    
        }
        else{
            echo "Some upperCase\n";
        }
    }

    /**
     * This function reverses a string
     */

    public function reverseString ($string)
    {
       return strrev($string);
    }

    /**
     * This function checks whether a number is prime or not
     */

    public function isPrime($num)
    {
      if ($num > 0)
      {
       for ($x = 2; $x < $num; $x++)
       {
           if ($num % $x == 0)
           {
               return "$num is not a Prime Number";
           }
       }
               return "$num is a Prime number";
    }
    return "0 is not a Prme Number";
    }
}