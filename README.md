# simple-class-structure
This is a boilerplate to get your php project going for OOP
# Folder Structure

# How to use
Step 1 : Run ```composer init;composer install```
Step 2 : Set Up Database connection in the ```Storage/DB.php``` file
Step 3 : Create Controller and Model file based on each table in your database. ```Example.php``` has been set up as an example. Pun intended :)
Step 4 : Include the following
{
    "autoload": {
        "psr-4": {
            ...
            "Storage\\": "app/Storage/",
            "Middleware\\": "app/Middleware/",
            "Controller\\": "app/Controller/",
            "Model\\": "app/Model/"
        }
    }
}
in the view file
Where the key value represent the namespace for each class and the value represent the folder path to the 
Step 5 : Run ```composer dump-autoload```. This will auto generate an autoload file for all your classes.

# Note
Make sure that the folder that contains a class file has the same name as the namespace of the class. Also, ensure that the file name is the same as the class name. For example, all class in the Controller folder must have Controller as the Namespace. Also, if a class is Posts, the name of the class should be Posts. Use ```require "pathto/vendor/autoload.php"``` to load in all classes into a file. 
# Definitions
App Folder - Contains all the core files of the app
    Controller - Contains controller classes 
    Model - Contains model class to interact with database
    Middleware - This will contain classes that handle authentication, sanitization, mysqli result manipulation
    Storage - This is the folder for all database manipulation