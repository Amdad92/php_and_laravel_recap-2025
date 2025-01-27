<?php
$students = [
    "student1" => [
        "name" => "John",
        "age" => 20,
        "marks" => [
            "math" => 90,
            "english" => 85,
            "science" => 88
        ]
    ],
    "student2" => [
        "name" => "Jane",
        "age" => 22,
        "marks" => [
            "math" => 75,
            "english" => 80,
            "science" => 78
        ]
    ]
];

// Manual access of multidimensional array.
//access student name.
echo "Access elements manually:\n";
echo "Student1 name:". $students["student1"]["name"]."\n";
echo "Student2 name:". $students["student2"]["name"]."\n";

echo "-------------------\n";
//access student age.
echo "Student1 age:". $students["student1"]["age"]."\n";
echo "Student2 age:". $students["student2"]["age"]."\n";

echo "-------------------\n";

//access student mark.
echo "Student1 math mark:". $students["student1"]["marks"]["math"]."\n";
echo "Student1 english mark:". $students["student1"]["marks"]["english"]."\n";
echo "Student1 science mark:". $students["student1"]["marks"]["science"]."\n";

echo "-------------------\n";

echo "Student2 math mark:". $students["student2"]["marks"]["math"]."\n";
echo "Student2 english mark:". $students["student2"]["marks"]["english"]."\n";
echo "Student2 science mark:". $students["student2"]["marks"]["science"]."\n";

echo "-------------------\n";

echo "Access elements using foreach:\n";

// লুপ ব্যবহার করে অ্যাক্সেস করা:

foreach ($students as $student => $details) {
    echo "Details of $student:\n";
    echo "Name: " . $details["name"] . "\n";
    echo "Age: " . $details["age"] . "\n";
    
    // Marks অ্যারের মধ্যে লুপ ব্যবহার করা:
    foreach ($details["marks"] as $subject => $mark) {
        echo "$subject Marks: " . $mark . "\n";
    }
    echo "\n"; // কিছু ফাঁকা স্থান
}