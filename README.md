# simple-class-structure
This is a boilerplate to get your php project going for OOP
# Folder Structure

# How to use
Step 1 : Set Up Database connection in the ```Storage/DB.php``` file
Step 2 : Create Controller and Model file based on each table in your database
Step 3 : Include the following
```$files = array(
    "Model/Example",
    "Controller/Example_controller"
);``` in the view file
Where "Example" can represents the name 


# Definitions
App Folder - Contains all the core files of the app
Controller - contains controller classes 
Model - contains model class to interact with database
Middleware - This will contain classes that handle authentication, sanitization, mysqli result manipulaion 