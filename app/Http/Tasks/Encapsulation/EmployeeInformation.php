<?php

namespace App\Http\Tasks\Encapsulation;

class EmployeeInformation
{
    private string $name;
    private int $age;
    private string $address;
    private float $salary;

    public function __construct(string $name, int $age, string $address, float $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        $this->salary = $salary;
    }

    // With Setters and Getters to access Employee Salary
    public function getSalary(): float
    {
        return $this->salary;
    }

    public function setSalary(float $salary): void
    {
        $this->salary = $salary;
    }
}

// Get the data in other way Without Setters and getters
// With php Reflection Api

$employee = new EmployeeInformation('Jibon', 27, 'Dhaka', 20000);
$reflectionProperty = new \ReflectionProperty(EmployeeInformation::class, 'salary');
$reflectionProperty->setAccessible(true);

$reflectionProperty->getValue($employee);
$reflectionProperty->setValue($employee, 25000);
