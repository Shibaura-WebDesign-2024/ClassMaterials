# Assignment 7 MySQL Fundamentals
# Installation of the database in your university server
Because we are using the same PHPMyadmin for all users in the university server, there are some
changes to the SQL script. Please make sure that you follow this part before doing the exercise
below.
  1. Open file **create_db_template.sql** in Visual Studio Code
  2. Replace xxxx with your student ID (Your username for login to the PhPMyAdmin)
     
      To prevent mistake, please use the function Replace in your editor
      *in Visual Studio Code (Edit → Replace, or CTRL+h)
     
      ![image](https://github.com/Shibaura-WebDesign-2024/Assignment-6/assets/167336534/fec09381-ab08-4959-88ce-ad66204f7be7)
     
      Figure 1 Replacing the word in VS Code using Replace function

  3.	Save the mysql code as **“create_db.sql”** in your computer. Please do not delete this file as you can always return to restore this 
  database when something goes wrong.
  4.	Import the code in PHPMyadmin in the server. 
  5.	Please refer to the demo in the class <ins>how to access PHPMyadmin in the server</ins> and how to import the SQL file to generate the database.
  The link to access PHPMyadmin: (require VPN connection to SIT)

        http://172.21.82.208/shared/phpMyAdmin/

        ![image](https://github.com/Shibaura-WebDesign-2024/Assignment-6/assets/167336534/33e77d1b-63ef-43aa-a0a8-ac49ea2e2fef)

        Figure 2 Login to phpMyAdmin in the university server

# Part 1: Enhance the Guitar Shop application
**Change the name of your database**
1.	Open **part1/model/database.php** in VS Code
2.	Replace the database name with your database name (```xxxxxx```). 
3.	Change the value of ```$username``` and ```$password``` to your username and password for SSH
4.	Save the file

**Test the Guitar Shop application** 

1.	Start the Chrome browser and run the application in **part1** directory. This should display a menu that lets you navigate to the Product Manager application or the Product Catalog application.
2.	Use the Product Manager application to add a new product to the database with **Guitars** as the category, **test1** as the code, **Test Product 2211** as the **name**, and **550.00** as the list price.
3.	Go to the Product Catalog application. To do that, you can use the Back button or run the application again. Then, view the product that you just added. Note that it doesn’t display an image for the product. To fix that, go to the images directory and change the name of the **test.png** file to **test1.png**.
4.	Go to the Product Manager application again. Then, click on the List Categories link at the bottom of the page. Note that this link doesn’t display a page, even though it is coded correctly. You’ll fix this later when you enhance the **index.php** page for this application. Now, click the Back button. 

**Enhance the Product Manager application**

5.	Now, you’ll add a page to the Product Manager application that lets you add or delete categories. Using the MVC pattern. The new page should look like figure 3.

       ![image](https://github.com/Shibaura-WebDesign-2024/Assignment-6/assets/167336534/da0bca71-4888-4492-a2f1-28689dc58ac4)

       Figure 3: My Guitar Shop, product manager application

6.	Open the **category_list.php** file in the **product_manager** directory. It contains some of the headings that you’ll need for this page, and a link back to the Product List page. 
7.	Open the **index.php** file in the product_manager directory and add an action that displays the Category List page. Then, test this to make sure it works correctly. At this point, the page should only display some of the headings.
8.	In the **category_list.php** file, write the code that creates the category table shown above with all of the category names in the first column and Delete buttons in the second column. Then, test this to make sure the page displays the table correctly.
9.	In the **category_list.php** file, write the code that lets the user add a category to the database. This code should consist of a form that accepts the name for a new category followed by a Submit button that displays “Add”.
10.	Open the **model/category_db.php** file and add two functions to it that add and delete categories.
11.	Open the **index.php** file in the product_manager directory and add two new actions to it. The first action should add a category to the database. And the second action should delete a category from the database. 
Tip: To return to the Category List page after adding or deleting a category, you can pass an action to the controller with a statement like this: 

```header('Location: .?action=list_categories');```

12.	Test the application by adding two categories. Then, navigate to the Product List page and note that the list of categories includes the new categories. Next, navigate to the Add Product page and note that the drop-down list includes the new categories.
13.	Test the application by deleting the categories that you just added. However, don’t delete any of the existing categories because that will lead to products without categories. 

If necessary, though, you can restore the database by running the **create_db.sql**  script again as described in **part 0**. Doing so will restore both ```xxx_my_guitar_shop1``` and ```xxx_my_guitar_shop2``` databases

Refactor the Product Catalog application

14.	Open the **product_list.php** and **product_view.php** files in the **product_catalog** directory. Note that these files use the same code in the ```<nav>``` tag to display the list of navigation links for each category.
15.	Create a file named **categories_nav.php** in the view directory, and copy all the code for the ```<nav>``` tag from the **product_list.php** file to the **category_nav.php** file. Then, replace the code for the ```<nav>``` tag in the **product_list.php** and **product_view.php** files with the appropriate include statements.
16.	Test these changes to make sure your refactoring works.

Check the solution from http://172.21.82.208/gift/class10/sol/part1/

# Part 2: Use PHP to work with a database
**Change the name of your database**

1.	Open **part2/model/database.php** in VS Code
2.	Replace the database name with your database name (```xxxxxx```). 
3.	Change the value of ```$username``` and ```$password``` to your username and password for SSH
4.	Save the file

**Review and test the code**

1.	Run the application in **part2** directory. This should display the names of the products in the Basses category, a delete message, and an insert message.
2.	Open the **database.php** file, the **product_db.php** file, and the **index.php** file. Then, review the code. Note that this code uses PDO.

**Modify the code** 

3.	Modify the **index.php** file so it displays the products that are in the Guitars category.
4.	Modify the **index.php** file so it uses a function from the model to add a product. When you do that, use the sample data that’s already in the **index.php** file. Make sure this code displays an appropriate message that indicates whether the product was inserted. Note that the products table requires a unique product code for each product. As a result, you can’t insert the same product code twice.
5.	Add a function to the model named **get_product_by_name()**. This function should have a parameter for the product name and it should return a product array for the product with the specified name. This provides a way to get the product ID and other product data that corresponds to the product name.
6.	Modify the index.php file so it uses a function from the model to delete the product named **“Fender Telecaster”**. To do that, you can use the function that you created in the previous step to get the product ID. Make sure this code displays an appropriate message that indicates whether the product was deleted.
7.	Test the code to make sure it works correctly. If it does, it should display the products, delete a product, add a product, and display appropriate messages. 

Check the solution from http://172.21.82.208/gift/class10/sol/part2/
