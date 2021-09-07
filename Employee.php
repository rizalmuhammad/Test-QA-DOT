<?php

class Company{
    private $name;

    public function setCompanyName($name){
        $this->name = $name;
    }

    public function getCompanyName(){
        return $this->name;
    }
}

class Department extends Company{
    private $name;

    public function setDepartmentName($name){
        $this->name = $name;
    }

    public function getDepartmentName(){
        return $this->name;
    }
}

class Employee extends Department{
    public $name;
    public $title;
    public $salary;

    public function __construct($title, $salary){
        $this->title = $title;
        $this->salary = $salary;
    } 

    public function setEmployeeName($name){
    	$this->name = $name;
    }

    public function getEmployeeTitle(){
        return $this->title;
    }

    public function getEmployeeProfile(){
        return $this->name;
    }

    public function getEmployeeMonthlySalary($day){
        return $this->salary;
    }
}

$newEmployee = new Employee("Quality Assurance", 300000);
$newEmployee->setEmployeeName("Johny");
$newEmployee->setDepartmentName("IT");
$newEmployee->setCompanyName("DOT ID");
echo "Name : " . $newEmployee->getEmployeeProfile();
echo "<br>";
echo "Title : " . $newEmployee->getEmployeeTitle();
echo "<br>";
echo "Salary : " . $newEmployee->getEmployeeMonthlySalary(1);
echo "<br>";
echo "Department : " . $newEmployee->getDepartmentName();
echo "<br>";
echo "Company : " . $newEmployee->getCompanyName();
?>