<?php
/*
Problem Statement:

You are required to create a Student class in PHP that demonstrates the concept of encapsulation. 
The class should have the following features:

Private Properties:

- $name to store the student's name.

- $age to store the student's age.

- $grade to store the student's grade (e.g., A, B, C, etc.).

Public Methods:

- A constructor to initialize the student's name, age, and grade.

- A method called getName() to return the student's name.

- A method called setAge($age) to update the student's age. This method should:

    - Validate that the age is a positive integer between 5 and 25 (inclusive).

    - Update the age if it is valid.

    - Display an error message if the age is invalid.

A method called setGrade($grade) to update the student's grade. This method should:

    - Validate that the grade is one of the following: A, B, C, D, or F.

    - Update the grade if it is valid.

    - Display an error message if the grade is invalid.

A method called getStudentInfo() to display all the student's information (name, age, and grade).

Task:

Write the complete PHP code for the Student class as described above. Then, create an object of the class with the following initial data:

Name: John Doe

Age: 15

Grade: A

Perform the following operations:

Display the student's information using getStudentInfo().

Update the student's age to 16 using setAge().

Update the student's grade to B using setGrade().

Attempt to update the student's age to 30 (this should fail due to invalid age).

Attempt to update the student's grade to Z (this should fail due to invalid grade).

Display the updated student's information using getStudentInfo().

Expected Output:

Copy
Student Information:
Name: John Doe
Age: 15
Grade: A

Age updated successfully!
Grade updated successfully!
Invalid age! Age must be between 5 and 25.
Invalid grade! Grade must be one of A, B, C, D, or F.

Updated Student Information:
Name: John Doe
Age: 16
Grade: B

*/
class Student {
    // Private properties
    private $name;
    private $age;
    private $grade;

    // Constructor
    public function __construct($name, $age, $grade) {
        $this->name = $name;
        $this->setAge($age); // Use setter to validate age
        $this->setGrade($grade); // Use setter to validate grade
    }

    // Getter for name
    public function getName() {
        return $this->name;
    }

    // Setter for age
    public function setAge($age) {
        if ($age >= 5 && $age <= 25) {
            $this->age = $age;
            echo "Age updated successfully!<br>";
        } else {
            echo "Invalid age! Age must be between 5 and 25.<br>";
        }
    }

    // Setter for grade
    public function setGrade($grade) {
        $validGrades = ['A', 'B', 'C', 'D', 'F'];
        if (in_array($grade, $validGrades)) {
            $this->grade = $grade;
            echo "Grade updated successfully!<br>";
        } else {
            echo "Invalid grade! Grade must be one of A, B, C, D, or F.<br>";
        }
    }

    // Method to display student information
    public function getStudentInfo() {
        echo "Student Information:<br>";
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Grade: " . $this->grade . "<br>";
    }
}

// Create a Student object
$student = new Student("John Doe", 15, "A");

// Display initial student information
$student->getStudentInfo();

// Update age and grade
$student->setAge(16);
$student->setGrade("B");

// Attempt invalid updates
$student->setAge(30);
$student->setGrade("Z");

// Display updated student information
$student->getStudentInfo();