<?php

class SchoolManagement {
    /**
     * Attributes/ Properties
     */
    private $SchoolName;
    private $Address;
    private $ContactNumber;
    private $MediumOfStudy;

    /**
     * Methods/Functions
     */

     public function isOpen($value)
     {
        if ($value != false)
            return "School's open.";
        return "Sorry, School is currently closed.";
     }

     public function schoolDetails()
     {
        echo "Name of School is ..... and it is located in ...";
     }
}