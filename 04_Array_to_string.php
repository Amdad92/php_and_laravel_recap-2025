<?php 

$employees = [
    "emp001" => [
        "name"     => "Ravi",
        "position" => "Manager",
        "salary"   => 80000,
        "contact"  => [
            "phone" => "123-456-7890",
            "email" => "ravi@example.com",
        ],
    ],
    "emp002" => [
        "name"     => "Sita",
        "position" => "Developer",
        "salary"   => 60000,
        "contact"  => [
            "phone" => "987-654-3210",
            "email" => "sita@example.com",
        ],
    ],
    "emp003" => [
        "name"     => "Amit",
        "position" => "Designer",
        "salary"   => 50000,
        "contact"  => [
            "phone" => "456-789-1234",
            "email" => "amit@example.com",
        ],
    ],
];

$employee=json_encode($employees);
print_r($employee);

$employee2=json_decode($employee, true);
print_r($employee2);