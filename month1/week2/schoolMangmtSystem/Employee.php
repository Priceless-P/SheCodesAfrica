<?php

abstract class Employee
{
    private $EmployeeId;
    private $EmployeeName;
    private $Salary;
    private $DepartmentId;

    abstract public function EmployeeDetails();
    abstract public function CheckIn();
    abstract public function ReceiveSalary();
}