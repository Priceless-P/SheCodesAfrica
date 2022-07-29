<?php

/*class which displays an introductory message like "Hello All, I am Scott", 
* where "Scott" is an argument value of the method within the class 
*/

class IntroName {
    public $greeting = "Hello All, I am ";

    public function sayName($name)
    {
        return $this->greeting.$name;
    }
}