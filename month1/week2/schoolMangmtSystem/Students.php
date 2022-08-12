<?php

abstract class Students
{
    private $StudentId;
    private $StudentName;
    private $ClassId;
    private $Section;
    private $BusId;

    abstract public function studentsDetails();

    abstract public function payFees();

}