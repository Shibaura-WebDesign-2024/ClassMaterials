# Assignment 5
# Advanced PHP
# Part 1
# PCRE in PHP

Practice using PCRE (Perl-Compatible Regular Expressions) in PHP to extract specific patterns
from a string.
Instructions:
1. Open the provided index.php file in a web browser (through server like your localhost or
university server).
2. Study the existing code and understand its structure and purpose.
3. Notice that there is an incomplete PHP code segment that needs to be filled in to
complete the functionality.
4. Your task is to complete the missing code segments to achieve the following:
a. When the form is submitted, the PHP code should extract all the words starting
with "PHP" from the input string.
b. If any words starting with "PHP" are found, display them as an unordered list
(each word as a list item) below the form.
c. If no words starting with "PHP" are found, display an informational message
indicating so.

5. To complete the code, locate the comments `//` Extract all words starting with 'PHP'
and `//` Your code here in the PHP section.
6. Inside the `//` Your code here section, write the necessary PHP code using PCRE to
extract the words starting with "PHP" from the input string and store them in an array.
7. If any words are found, iterate over the array and display each word as a list item.
8. If no words are found, display the appropriate informational message.
Test your code by entering different strings into the form and check if the expected output is
displayed.
9. Upload your PHP files in your respective folder :Assignment5_Part1

# Hints:
• The PHP function `preg_match_all()` can be used to perform a global regular
expression match and extract all occurrences into an array.
• Use the regular expression pattern `/\b(PHP\w+)\b/i `to match words starting with
"PHP" (case-insensitive).
• Use the PHP variable $matches to store the matches found by preg_match_all().
• Remember to properly escape and sanitize the user input before displaying it to prevent
any potential security vulnerabilities.
Test your code by executing it and ensure that the expected output is displayed.
You can check how the correct webpage with the solution should look like from
http://172.21.82.208/gift/class7/solution/part1/index.php

# Part 2
# String manipulation

Apply string manipulation operations on user input using PHP.
Display the results of string manipulation on the web page.
Instructions:
1. Open the provided index.php file in a web browser (through server like your localhost or
university server).
2. Study the existing code and understand its structure and purpose.
3. Notice that there is an incomplete PHP code segment that needs to be filled in to
complete the functionality.
4. Your task is to complete the missing code segments to achieve the following:
a. Calculate the length of the string.
b. Convert the string to uppercase.
c. Convert the string to lowercase.
d. Finally, display the results of the string manipulation operations below the form.
5. Upload your PHP files in your respective folder :Assignment5_Part2

Test your code by executing it and ensure that the expected output is displayed.
You can check how the correct webpage with the solution should look like from
http://172.21.82.208/gift/class7/solution/part2/index.php

# Part 3
# OOP Form Assignment

Create a PHP form that accepts user input for name and age.
Implement an Object-Oriented Programming (OOP) approach to store and display user details.

Instructions:
1. Open the provided index.php file in a web browser (through server like your localhost or
university server).
2. Study the existing code and understand its structure and purpose.
3. Notice that there is an incomplete PHP code segment that needs to be filled in to
complete the functionality.

4. Your task is to complete the missing code segments to create an object of the User class
to store the user details. The User class should have the following properties and
methods:
5. The `User` class should have the following properties and methods:
• Properties: `name (string)`, `age (integer)`
• Constructor: Accepts name and age as parameters and sets the values of the
properties.
• Methods: `getName()` and `getAge()` to retrieve the values of the properties.
6. After the form is submitted, create an instance of the User class with the provided name
and age.
7. Display the user details below the form using the `getName()` and `getAge()`
methods.
8. Upload your PHP files in your respective folder :Assignment5_Part3

Test your code by executing it and ensure that the expected output is displayed.
You can check how the correct webpage with the solution should look like from
http://172.21.82.208/gift/class7/solution/part3/index.php

# Part 4
# Error & Exception Handling Assignment
Create a PHP form that accepts user input for custom error message and custom exception
message.

Instructions:
1. Open the provided index.php file in a web browser (through server like your localhost or
university server).
2. Study the existing code and understand its structure and purpose.
3. Notice that there is an incomplete PHP code segment that needs to be filled in to
complete the functionality.
4. Your task is to complete the missing code segments to implement a custom error handler
function and a custom exception class.
a. The custom error handler function should output the user provided error message.
b. The custom exception class should extend the base `Exception` class and
override the `__toString()` method to provide a formatted exception message.
c. After the form is submitted, trigger a custom error using the provided custom
error message.
d. Throw a custom exception using the provided custom exception message and
catch it using the appropriate exception handling.
e. Display the custom error message and custom exception message below the form.
5. Upload your PHP files in your respective folder :Assignment5_Part4

Test your code by executing it and ensure that the expected output is displayed.
You can check how the correct webpage with the solution should look like from
http://172.21.82.208/gift/class7/solution/part4/index.php

# Part 5
# Advanced PHP array
Explore arrays and array methods within the Task List Manager application.
Practice manipulating and working with arrays to manage tasks.

Test the application
1. Open and test the application program (index.php) provided in part4 folder.
2. Test this application by using the Add Task button to enter three tasks and the Delete
Task button to delete one of the tasks. The other buttons shouldn’t do anything.
3. In the tasklist.php file, just inside the `<main>`tag, add the following code:
   `<p><?php print_r($task_list); ?></p>`
5. Save your changes and run the application. You should see the indexes and values for the
`$task_list` array in the browser.

Modify and enhance the application

7. Modify the code for adding a task so it uses the `array_push()` function to add a new
task to the end of the `$task_list` array. Then, test this change.
8. Add code that lets the user modify an existing task. If the user clicks on the Modify Task
button, this code should hide the form that contains the Modify Task button, and it should
display the form that’s included in the tasklist.php file. This form displays the current
task in a text box and includes buttons that lets users save or cancel their changes.
9. Add code that allows the user to promote a task. This code should move the selected task
up one index in the array of tasks. If the user selects the first task, this code should
display an error that indicates that you can’t promote the first task.
10. Add code that lets the user sort all tasks alphabetically. In addition, modify the code so
the Sort button is displayed only if the task list contains two or more tasks.
11. Don’t forget to test your changes to make sure that they work correctly!
Test your code by executing it and ensure that the expected output is displayed.
10.Upload your PHP files in your respective folder :Assignment5_Part5

You can check how the correct webpage with the solution should look like from
http://172.21.82.208/gift/class7/solution/part5/index.php
