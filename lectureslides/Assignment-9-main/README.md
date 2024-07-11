# Assignment-9
To get started on start assignment 9, save the starter code for each part from the material folder in this repository to your local PC. Create folder named assignment on server and start working on the assignments in each subfolder named: part 1, part 2, part 3 and part 4. These are the 4 parts to the assignment:
- [Part 1](#part-1-test-and-modify-the-miles-per-gallon-application): Test and modify the Miles Per Gallon application
- [Part 2](#part-2-create-a-simple-application): Create a simple application
- [Part 3](#part-3-enhance-the-future-value-application): Enhance the Future Value application 
- [Part 4](#part-4-enhance-the-test-scores-application): Enhance the Test Scores application 

## Part 1: Test and modify the Miles Per Gallon application
In this exercise, you’ll test the Miles Per Gallon application and then modify the JavaScript so it accepts and displays decimal values. 
When you’re done, the browser window should look similar to the given HTML, but it should work with decimal values:

### Test the application 

- Save the materials and open part1/index.html file from your server. Then, enter decimal values for the miles and gallons, and note that these values are converted to integers.
- Run the application again by reloading the file in the browser. Then, enter invalid values like zeros or spaces, and note the result.

### Modify the application 
- Modify the JavaScript so it accepts and displays decimal values for the miles and gallons. Then, reload the file in the browser to run the application again, enter decimal values with two or more decimal places, and note the result.
- Modify the JavaScript so all of the values are rounded to two decimal places. Then, run the application one more time and note the result.
- If you have any problems when you test your exercises, please use Chrome’s developer tools to check.

Save all necessary files in part1 folder. Don’t forget that you need index.html in this folder too. 

## Part 2: Create a simple application

Copying and modifying an existing application is often a good way to start a new application. So in this exercise, you’ll modify the Miles Per Gallon application (previous assignment) so it gets the length and width of a rectangle from the user, calculates the area and the perimeter of the rectangle, and displays the results in the browser like Figure 1.

<p align="center">
<img width="431" alt="Screenshot 2024-07-08 at 13 21 46" src="https://github.com/Shibaura-WebDesign-2024/Assignment-9/assets/82876331/41034dc3-052c-4863-8dab-499674dc2bc9">
</p>

Note: Make sure to attach some style to the webpage too. You can design the style freely.
Save all necessary files in part2 folder. Don’t forget that you need index.html in this folder too.

## Part 3: Enhance the Future Value application 
This part needs you to first study and understand the files in part3 folder.

- Figure 2 presents a Future Value application that shows how a for loop can be used to calculate the future value of an investment amount.
- This application starts by using prompt statements to get the **investment amount**, interest rate, and number of years from the user. Note, however, that these prompt statements are coded within do-while loops that are executed until the user enters a numeric value. 

<p align="center">
<img width="635" alt="Screenshot 2024-07-08 at 13 24 05" src="https://github.com/Shibaura-WebDesign-2024/Assignment-9/assets/82876331/73cc8670-db7e-4395-aa8b-96021cff060b">
</p>

- Next, a for loop uses these entries to calculate the future value of the investment. To do that, it uses **i** as the name of the counter and increments it by 1 each time through the loop. It does that as long as the counter is less than or equal to the number of years entered by the user. This means that the loop will be run once for each year. If, for example, the user enters 10 for the number of years, the loop will be run 10 times. Within the loop, the future value is calculated. To do that, the expression in the parentheses calculates the interest for the year. 
- Then, the interest is added to the current value of the **futureValue** variable, and the result is stored in the **futureValue** variable. As figure 3-5 shows, this calculation could also be coded in other ways.
- After the for loop finishes, this application uses four **write()** methods with template literals to display the values the user entered, as well as the calculated future value, in the browser. Here, the **toFixed()** method is called on the **futureValue** variable to round it to two decimal places.
- As you can see, this application uses both do-while loops and for loops. It uses do-while loops to get data from the user because it doesn’t know in advance how many times it will take for a user to enter valid data. Once it gets a valid number of years from the user, however, the application knows how many times the loop that calculates the future value needs to execute. Because of that, it uses a for loop to do the calculation.

### Your task
This exercise will give you a chance to use if statements, do loops, and for loops as you enhance the Future Value application. The eventual output of this application will be displayed in the browser and should look something like Figure 3, 4.

<p align="center">
<img width="579" alt="Screenshot 2024-07-08 at 13 46 45" src="https://github.com/Shibaura-WebDesign-2024/Assignment-9/assets/82876331/b76200dd-2ddb-4756-86ce-24ee71e3732d">
</p>

### Test the Future Value application 
- Opening the index.html file in a browser, and test it with valid entries. Then, test it with invalid entries.

### Add a do-while statement for continuing the entries 
- Open the future_value.js file. Then, add a do-while statement to the application so the user can repeat the calculation for another series of entries.

### Improve the validation for the investment, rate, and year entries 
- Update the condition for the do-while statement for each user entry so the entry must also be a positive number.
- For the interest rate entry, add code that makes sure the user enters a value that’s greater than zero and less than 15.

### Enhance the display of the results as shown above 
- Modify the for loop that calculates the future value so it displays the interest and future value for each year, as shown above. Use h4 elements for the user entries and <> p  elements for the results. 
- Note that you’ll have to change the location of the existing write() methods to get the display the way it is above.

Save all necessary files in part3 folder. Don’t forget that you need index.html in this folder too. 

## Part 4: Enhance the Test Scores application 

This part needs you to study the files in part4 folder.

<p align="center">
<img width="487" alt="Screenshot 2024-07-08 at 13 49 36" src="https://github.com/Shibaura-WebDesign-2024/Assignment-9/assets/82876331/064bc760-8de8-498b-a322-8d252a2d5e76">
</p>

- The enhanced Test Scores application in Figure 5 uses a do-while loop to let the users enter as many scores as they want. Then, when a user enters -1 to end the entries, the application displays the average test score. The application also tests that each entry is a valid number from 0 through 100 before it is added to the test score total. If an entry isn’t valid, the application displays an error message and issues another prompt statement so the user can either enter another score or -1 to end the entries. 
- If you look at the JavaScript for this application, you can see that it starts by declaring three variables that it needs to do its work. The total variable will be used to sum the valid test scores. The count variable will be used to count the number of valid test scores. And the score variable will be used to receive the user entries. Each of these variables is initialized to zero. Next, a do-while loop is used to get the user entries and parse them to an integer. Because this application has to get at least one user entry, it makes sense to use a do-while loop instead of a while loop. Within the do-while loop, the prompt method is used to get each user entry. Note that the second parameter is set to -1 so the user can just press the Enter key to end the entries. 
- After a user makes an entry, an if clause checks that the entry is between 0 and 100. If it is, the entry is valid so the entry value is added to the total variable and 1 is added to the count variable. 
- Then, the score entered by the user is displayed in the browser. If the entry isn’t between 0 and 100, the else if clause that follows checks to see whether the entry is not equal to -1. If it isn’t, an alert method displays an error message and the entry isn’t processed. If the entry is -1, nothing is done. 
- When the statements in the loop are finished, the condition for the loop is tested. Then, if the entry value is -1, the loop ends. Otherwise, the loop is repeated for the next entry. When the loop ends, the average test score is calculated by dividing the total
variable by the count variable. Then, the **parseInt** method is used to convert the decimal value to an integer, and the average score is displayed in the browser.

### Your task
In this exercise, you’ll make an enhancement to the Test Scores application. What you’ll do is add a for loop that gets the highest score in the array and displays it below the average score in the browser:
Hint: you will need the new variable to store the highest score, and it should be initialized to zero. 

Save all necessary files in part4 folder. Don’t forget that you need index.html in this folder too. 



