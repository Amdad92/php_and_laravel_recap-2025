<?php
/*
প্রশ্ন:
    তুমি একটি মাল্টিডাইমেনশনাল অ্যাসোসিয়েটিভ অ্যারে তৈরি করবে যেখানে কোম্পানির কর্মীদের তথ্য থাকবে। 
    প্রতি কর্মীর নাম, পদবি, বেতন এবং যোগাযোগের তথ্য (ফোন এবং ইমেইল) থাকবে। তারপর নিচের কাজগুলো করবে:

অ্যারে তৈরি:

    - প্রতিটি কর্মীর তথ্য সহ একটি মাল্টিডাইমেনশনাল অ্যারে তৈরি করো।
    - প্রতিটি কর্মীর যোগাযোগের জন্য একটি আলাদা অ্যারে রাখো।

তথ্য প্রিন্ট:

    - লুপ ব্যবহার করে প্রতিটি কর্মীর নাম, পদবি, বেতন এবং যোগাযোগের তথ্য প্রিন্ট করো।

বেতন হিসাব:

    - সমস্ত কর্মীদের বেতন যোগ করে মোট বেতন বের করো।
    - কর্মীদের বেতনের গড় (average salary) বের করো।

Question (English):
    Create a multidimensional associative array to store information about company employees. 
    Each employee's information should include their name, position, salary, and contact details (phone and email).
    Then, perform the following tasks:

Create the array:

    - Create a multidimensional array containing each employee's information.
    - Use a separate array to store each employee's contact details.

Print the information:
    - Use a loop to print the name, position, salary, and contact details of each employee.

Calculate salaries:

    - Calculate the total salary of all employees.
    - Calculate the average salary of the employees.

Sample Output:

    Employee ID: emp001  
    Name: Ravi  
    Position: Manager  
    Salary: 80000  
    Phone: 123-456-7890  
    Email: ravi@example.com  
    ---------------------  
    Employee ID: emp002  
    Name: Sita  
    Position: Developer  
    Salary: 60000  
    Phone: 987-654-3210  
    Email: sita@example.com  
    ---------------------  
    Total salary of Employees: 190000 Tk  
    Average salary of Employees: 63333.33 Tk  

 */

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
// print_r($employees);
$totalSalary = 0;
$totalEmployee = count( $employees );

foreach ( $employees as $employeeID => $details ) {
    echo "Employee ID: $employeeID\n";
    echo "Name:" . $details["name"] . "\n";
    echo "Position:" . $details["position"] . "\n";
    echo "Salary:" . $details["salary"] . "\n";
    echo "Phone:" . $details["contact"]["phone"] . "\n";
    echo "Email:" . $details["contact"]["email"] . "\n";
    echo "---------------------\n";

    $totalSalary += $details["salary"];
}

$averageSalary = $totalSalary / $totalEmployee;

echo "Total salary of Employess: " . $totalSalary . "TK" . "\n";
echo "Average salary of Employess: " . $averageSalary . "Tk" . "\n";