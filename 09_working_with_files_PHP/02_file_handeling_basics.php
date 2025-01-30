<?php 
/*
    - Opening a File

    - Reading from a File

    - Writing to a File

    - Closing a File
*/


/*

 01- Opening a File:

    Before you can read or write to a file, you need to open it using the fopen() function. This function takes two parameters:

    - The file path (relative or absolute).

    - The mode (e.g., read, write, append).

    Example:

    $file = fopen("example.txt", "r");
    Here, "r" is the mode, which stands for "read-only."    

    *****************************************************
    
 02- Reading from a File:

    - Once a file is opened, you can read its contents using fread(). This function takes two parameters:

    - The file handle (returned by fopen()).

    - The number of bytes to read.

    Example:

    $content = fread($file, filesize("example.txt"));
    echo $content;


    *****************************************************

 03- Writing to a File:

    To write to a file, open it in write ("w") or append ("a") mode, then use fwrite(). This function takes two parameters:

    - The file handle.

    - The string to write.

    Example:

    $file = fopen("example.txt", "w");
    fwrite($file, "Hello, World!");

    *****************************************************

 04- Closing a File
    Always close a file after you’re done with it using fclose(). This frees up resources.
    
    Example:
    fclose($file);
    
*/

