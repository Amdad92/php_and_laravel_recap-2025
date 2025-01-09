<?php 
    /*
        PHP variables can have-
        .local:         Declared inside a function, accessible only there. 
        .global:        Declared outside functions; use global or $GLOBALS.
        .static:        Retains its value between function calls.
        .Superglobal:   Predefined variables always accessible

        Use case:

        Local Scope:  Use local variables when you only need the variable within a specific function or block of code.
        
            function calculateSum($a, $b) {
                $sum = $a + $b; // Local variable
                return $sum;
            }
            echo calculateSum(5, 10); // Output: 15

        Note: You use local variables here because $sum is only relevant to the calculateSum function.

            ***********************************

        Global Scope: When a variable needs to be accessed across multiple functions in the script.
        
        $totalUsers = 100; // Global variable

            function displayTotalUsers() {
                global $totalUsers; // Access global variable
                echo "Total Users: $totalUsers";
            }
            displayTotalUsers(); // Output: Total Users: 100
       
        Note: You use global scope when you need to share a variable like $totalUsers across multiple functions.

            ***********************************
        
        Static Scope: 
            . Use static variables to preserve their value across multiple function calls.
            . Ideal for counting or maintaining a state in a function.
      
                function visitCounter() {
                    static $counter = 0; // Static variable
                    $counter++;
                    echo "Visit Count: $counter<br>";
                }

                visitCounter(); // Output: Visit Count: 1
                visitCounter(); // Output: Visit Count: 2
                visitCounter(); // Output: Visit Count: 3

        Note: Use static scope for scenarios like counting visits, where you need to maintain the value between calls

            ***********************************

        Superglobal Scope:

            .   Superglobals are used for handling form data ($_POST, $_GET), session data ($_SESSION), 
                server information ($_SERVER), etc.

            .   Use them when working with user input, server environment details, or session management.

                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $name = $_POST['name']; // Superglobal variable
                echo "Hello, $name!";

                <!-- HTML Form -->
                <form method="POST">
                    <input type="text" name="name" placeholder="Enter your name">
                    <button type="submit">Submit</button>
                </form>

        Note: Use superglobals like $_POST to handle user-submitted form data.

            ***********************************
           
        Pro Tip:

            .   Avoid excessive use of global variables as they can lead to conflicts and debugging challenges.
            .   Use static and local variables to improve code modularity and readability.

    */
        
?>