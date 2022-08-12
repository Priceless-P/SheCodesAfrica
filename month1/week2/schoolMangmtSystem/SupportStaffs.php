<?php

Class SupportStaffs extends Employee
{
    public function EmployeeDetails()
    {
    /*
     * This method displays the details of employees along with their designations and salary details.
     */
    return "Support Staffs details are ....";
    }

public function CheckIn()
{
    /**
     * This shows whether the particular employee is checked in to the school or not.
     */
    return true;
}
public function ReceiveSalary()
{
    /**
     * This contains the salary details and shows whether they received the salary or not.
     */
    return "Support Staffs salaries is ....";
}
}