# OOP in PHP

## Topics

- [Encapsulation & Abstraction](#encapsulation--abstraction)
- [Inheritance](#inheritance)
- [PHP Interfaces & Polymorphism](#php-interfaces--polymorphism)
- [PHP Traits](#php-traits)
- [Some Notes](#some-useful-notes-and-points)
- [Error Handling In PHP](#error-handling-in-php)
- [Late Static Binding & How It Works](#late-static-binding--how-it-works)

---

### Encapsulation & Abstraction

**Abstraction**: and Encapsulation are two of the 4 pillars that build the foundation of Object-Oriented-Programming. Basic characteristics involve code-reusability, overriding, security purpose, data hiding, and implementation hiding. However, for a beginner, it can be quite confusing to understand the difference between the two as both of them offer data hiding on their own. In this article, we’ll learn about the differences along with code.

**Encapsulation**:is defined as the wrapping up of data under a single unit. It is the mechanism that binds together code and the data it manipulates. Another way to think about encapsulation is, that it is a protective shield that prevents the data from being accessed by the code outside this shield. Technically in encapsulation, the variables or data of a class are hidden from any other class and can be accessed only through any member function of its class in which they are declared. As in encapsulation, the data in a class is hidden from other classes, so it is also known as data hiding. Encapsulation can be achieved by Declaring all the variables in the class as private and writing public methods in the class to set and get the values of variables.

|                                                                  **Abstraction**                                                                   |                                                                                                     **Encapsulation**                                                                                                      |
| :------------------------------------------------------------------------------------------------------------------------------------------------: | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------: |
|                                          Abstraction is the process or method of gaining the information.                                          |                                           While encapsulation is the process or method to contain the information into a single unit and providing this single unit to the user.                                           |
| Main feature: reduce complexity, promote maintainability, and also provide clear separation between the interface and its concrete implementation. |                Main feature: Data hiding. It is a common practice to add data hiding in any real-world product to protect it from external world. In OOPs, this is done through specific access modifiers.                 |
|                                       In abstraction, problems are solved at the design or interface level.                                        |                                                                          While in encapsulation, problems are solved at the implementation level.                                                                          |
|                                           Abstraction is the method of hiding the unwanted information.                                            |                                           Whereas encapsulation is a method to hide the data in a single entity or unit along with a method to protect information from outside.                                           |
|                                         We can implement abstraction using abstract class and interfaces.                                          |                                                           Whereas encapsulation can be implemented using by access modifier i.e. private, protected and public.                                                            |
|                           In abstraction, implementation complexities are hidden using abstract classes and interfaces.                            |                                                                      While in encapsulation, the data is hidden using methods of getters and setters.                                                                      |
|                                           The objects that help to perform abstraction are encapsulated.                                           |                                                                          Whereas the objects that result in encapsulation need not be abstracted.                                                                          |
|                                               Abstraction provides access to specific part of data.                                                |                                                                      Encapsulation hides data and the user cannot access same directly (data hiding).                                                                      |
|                                                   Abstraction focus is on “what” should be done.                                                   |                                                                                     Encapsulation focus is on “How” it should be done.                                                                                     |
|  Example: CAR – the driver of the car only needs to know how to drive it. Not how its engine and the gear box and other internal components work.  | Example: A bank can be thought of as a fully encapsulated class that provides access to the customers through various methods (getters and setters). Rest of the data inside bank is hidden to protect from outside world. |

### Inheritance

**Inheritance** is one of the core features of object-oriented programming. It’s a programming procedure that allows you to reuse code by referencing the behaviors and data of an object. In other words, a class that inherits from another class shares all the attributes and methods of the referenced class.

An inherited class is called a subclass or child class of the class it inherits from. And the class being inherited is called either a parent class, superclass, or base class.

Some languages, like Go, are object-oriented but use composition instead of inheritance. Composition is an alternative approach that creates new complex objects by aggregating other objects. Most object-oriented programming languages have both composition and inheritance.

#### How inheritance makes development easier

**Inheritance** is a core element of object-oriented programming that serves as a powerful instrument for reusing code. Let’s use an example to illustrate how using inheritance can make creating an application easier.

Say you’re designing a video game with vehicles you can drive. You want to create a lot of vehicles that people can use, including coupes, sedans, trucks, four-wheel-drive vehicles, and maybe even some airplanes.

If you’re already somewhat familiar with object-oriented programming, you might consider making all of these vehicles as objects. You could create a class for each of the types of vehicles you want and encapsulate all the functionality and data necessary for that vehicle in the class.

### PHP Interfaces & Polymorphism

#### What is polymorphism?

**Polymorphism** is a Greek word that literally means many forms. In object-oriented programming, polymorphism is closely related to inheritance.

Polymorphism allows objects of different classes to respond differently based on the same message.

To implement polymorphism in PHP, you can use either abstract classes or interfaces.

Polymorphism helps you create a generic framework that takes the different object types that share the same interface.

Later, when you add a new object type to the system, you don’t need to change the framework to accommodate the new object type as long as it implements the same interface.

By using polymorphism, you can reduce coupling and increase code reusability.

Polymorphism is the ability of objects to be treated as instances of their parent class or any interface they implement. In PHP, polymorphism allows objects of different classes to be treated as objects of a common superclass or interface. This facilitates code reuse and flexibility.

```php
function writeToLog(Logger $logger, $message) {
    $logger->log($message);
}

$fileLogger = new FileLogger();
writeToLog($fileLogger, "Log this message."); // This works because FileLogger implements Logger interface

```

In this example, the writeToLog() function accepts any object that implements the Logger interface. This function can work with any class that implements the Logger interface, providing flexibility and enabling polymorphic behavior.

#### PHP Interfaces:

An interface in PHP is a blueprint of methods that a class must implement. It defines a set of methods without providing the implementation details. Interfaces are declared using the interface keyword. Here's an example:

```php
interface Logger {
 public function log($message);
}
```

In this example, Logger is an interface with a single method log(). Any class that implements the Logger interface must define the log() method.

#### Implementing an Interface:

To implement an interface in PHP, you use the implements keyword. Here's how you would implement the Logger interface:

```php
class FileLogger implements Logger {
    public function log($message) {
        // Implementation of logging to a file
    }
}
```

Benefits: Code Reusability: Interfaces allow you to define a contract that multiple classes can implement, promoting code reuse. Flexibility: Polymorphism allows you to work with objects of different classes through a common interface, enabling more flexible and extensible code. Understanding PHP interfaces and polymorphism is crucial for writing maintainable, extensible, and reusable object-oriented PHP code.

### PHP Traits

A trait is a PHP construct that lets you reuse the same code in different classes.

You can define a trait using the following syntax:

```php
trait SayGreeting {
   private $name = 'Alex';

   public function sayHello() {
      echo 'Hello, I\'m ' . $this->name;
   }
}
```

Traits can contain methods (like sayHello()) and properties (like $name).

Traits also support visibility operators (public, protected and private), static methods and properties, and class operators such as parent::, self:: and $this.

PHP classes can use traits and include the traits’ code.

To make a class use a trait, you need the use keyword.

For example:

```php
class MyClass {
   use SayGreeting;
}
```

```php
$myClass = new MyClass();
$myClass->sayHello();
/* Output:
 * Hello, I'm Alex
*/
```

#### How to use Traits.

In a nutshell, a trait is a structure that prevents code duplication in classes.

Different classes can use the same trait and include the trait’s methods and properties.

Traits have some similarities with interfaces and with abstract classes.

They are also similar to “include” scripts that contain global functions.

But traits have also important differences that make them unique.

Let’s see which ones in detail.

In the above example, the MyClass class uses the SayGreeting trait. By doing so, it’s like all the code inside the trait is copied into the class.

The class now has the sayHello() method as well as the $name property:

**Traits vs Interfaces.** An interface is an OOP construct that lets you share the same set of functionalities among different classes.

You can find an in-depth explanation of PHP interfaces in this tutorial.

Interfaces are more specific than traits, because they can only contain abstract methods.

It’s up to the class that implements the interface to actually implement the methods.

With interfaces there is no code reuse at all because every class must implement the methods.

Traits, on the other hand, can provide fully implemented methods, on top of properties and class operators.

The classes that use the trait can reuse all the trait’s own code, with no code duplication whatsoever.

**Traits vs Abstract Classes.** Both traits and abstract classes can include methods, either abstract or fully implemented.

However, if you want to use the methods from an abstract class into another class, you must extend the abstract class.

You can find an in-depth explanation of PHP abstract classes in this tutorial.

If you want to use the methods from an abstract class, you must establish an inheritance relation with your class. This is not always what you want.

Moreover, PHP does not support multiple inheritance so you cannot extend from more than one class.

This makes it impossible to define different sets of functions in different abstract classes and then extend from them to create different combinations.

#### Traits solve both problems:

- You can use the same trait in completely unrelated classes, without establishing an inheritance relation between them.
- You can use more traits in the same class.

#### Traits vs Include Scripts with Global Functions.

“Include” scripts contain PHP functions. If you need those functions in another PHP script, you can simply include that script.

Traits offer a similar solution. In fact, the main purpose of traits is to define some code once and then use it in different classes.

However, there are three main differences between traits and global functions:

- Global functions can be used anywhere, while traits can only be used inside classes.
- Traits can contain class elements and operators such as methods, properties, visibility modifiers (public, protected, private) and class operators (self::, parent::, $this).
- Traits can be combined: a trait can use other traits. This lets you define different traits combinations without the need of complex include statements.

### Error Handling In PHP
When creating scripts and web applications, error handling is an important part. If your code lacks error checking code, your program may look very unprofessional and you may be open to security risks.

This tutorial contains some of the most common error checking methods in PHP.

We will show different error handling methods:
- Simple "die()" statements
    ```php
    <?php
    // To prevent the user from getting an error message , we test whether the file exist before we try to access it:
    if(file_exists("mytestfile.txt")) {
    $file = fopen("mytestfile.txt", "r");
    } else {
    die("Error: The file does not exist.");
    }
    // The code above is more efficient than the earlier code, because it uses a simple error handling mechanism to stop the script after the error.
    //However, simply stopping the script is not always the right way to go. Let's take a look at alternative PHP functions for handling errors.
    ```
- Custom errors and error triggers
    ```php 
    error_function(error_level,error_message,error_file,error_line,error_context)
        /*Creating a custom error handler is quite simple. We simply create a special function that can be called when an error occurs in PHP.
        This function must be able to handle a minimum of two parameters (error level and error message) but can accept up to five parameters (optionally: file, line-number, and the error context):*/
    ```
- Error reporting
    These error report levels are the different types of error the user-defined error handler can be used for:
    - E_ERROR
    - E_WARNING
    - E_NOTICE
    - E_USER_ERROR
    - E_USER_WARNING
    - E_USER_NOTICE
    - E_STRICT
    - E_ALL
    - 
### Late Static Binding & How It Works

Basically, it boils down to the fact that the `self` keyword does not follow the same rules of inheritance. `self` always resolves to the class in which it is used. This means that if you make a method in a parent class and call it from a child class, `self` will not reference the child as you might expect.

Late static binding introduces a new use for the `static` keyword, which addresses this particular shortcoming. When you use `static`, it represents the class where you first use it, ie. it 'binds' to the runtime class.

Those are the two basic concepts behind it. The way `self`, `parent` and `static` operate when `static` is in play can be subtle, so rather than go in to more detail, I'd strongly recommend that you study the manual page examples. Once you understand the basics of each keyword, the examples are quite necessary to see what kind of results you're going to get.

---
### Some useful Notes and Points

to access any of class's property

```php
$object = new Person();
echo $object->name;
```

when name is a property in that class and you must define it in class like varaible using $ but when call it don't The construct is some code that runs when the object has been created other wise the destruct you can define them like function

```php
public function __construct();{ #code here
}

public function __desstruct();{ #code here
}
```

Static variables or functions can be called outside class without create an object like inside it ,and the why we do so is fro some categoration

you can define them

```php
class Student{
    public static $school="shoban";
}
```

and you can call it like that=> `Studen::$school;`

and is the same with functions

if you want to call a property,method even a static one in its class use this->property,method self::static property or method

we use static when we need a property or method from class without creating an object

In projects you may create so many classes that you want to include them everywhere so to overcome this you must use a built in function call `spl_autoload_register('function')` that take care to know what is the name of class that just got a instance then return the name and then you pass the name to function to include this file

```php
sql_autoload_register('myautoloader');

function myautoloader($classname){
	$directory="classes/";
	$extentions=".class.php";
	$fullpath="$directory . $classname . $extenions;

    id(!file_exist($fullpath){ // to minimize errors
    	return false;
    }
    include $fullpath;

}
```

The type declaration are a way when you specifiy what is the type that you want from user to enter such as string or int when use the functions when you create an oject often use type casting too (int) (string)like that

```php 
declar(strict_types=1);// we use this to make php strict with types not to be lossly ,if you enter hallo(2) that will run if you don't write a declare line

publich function hallo(string $name){ echo "hallo" . $name; }
```
```php
class First{ public $name;
	public static $nationality;
	const SALARY =200;
	public function getdata(){
		echo this->name;
		echo self::$nationality echo self::SALARY; } }
```

```php
class Second extend First{ public $password;
	public static function getname(){
		echo parent::name;
		echo parent::SALARY;
		echo parent::$nationality; } }
```
## We use classes ,interfaces and abstracts to make code more clean and structuer 


**Interfaces** are like templet or set of rules that every class must follow it at least unless there will be an error it useful because in projects
you may use several classes and your team so it is a good choice to make some rules in your project to prevent naming everyone methods or properties
as he wants ,and it is useful to refere to all classes that use this interface without create many methods in order to sutisfy all classes methods
as this 
```php
interface Payment{
	public function paynow();
	public function payprocess();
}

class Cash implements Payment{
	public function paynow(){};
	public function setdate(){};
	public function payprocess(){
	$this->paynow();
	$this->setdate()
	};
}

class Vise implements Payment{
	public function paynow(){};
	public function setdate(){};
	public function login(){};
	public function payprocess(){
	$this->login();
	$this->paynow();
	$this->setdate();
}

class Buynow {
	public funtion pay(Payment $paymentobject){
		$paymentobject->payprocess();// here you call a one method that you sure it exist in each class beacause of interface and then implement it whatever it contains in diffrenet classes
	}
}

$cash = new Cash();
$buy = new Buynow();
$buy->pay($cash);
``` 

**Abstract** : is a class that we use just for inherit from it only and not to create an object if there is a method or property that I want to put
a rule on it to all other classes that will extend  form just put before it abstract word to make sure that developer will use it unless will be an error
just for structuer purposes
**Anonymus** : is a class that create and impelement one time in our website in order not to use more memory because after finishing the class will be deleted 
so it is a good one if you want to do something once
```php
<?php
include_once "classes/simple.class.php";

$regularclass= new Simple;
$regularclass->hallo();

$anonymsclass =new class(){
	public function hellllo(){
		echo "heello";
	}
};
$anonymusclass->hellllo();
```
#### In MVC model we use protected to methods or properties which in classes and interact with database because it is not allowed to use this method everywhere!!

---

## Refrences

- [Encapsulation & Abstraction](https://www.geeksforgeeks.org/difference-between-abstraction-and-encapsulation-in-java-with-examples/)
- [Inheritance](https://www.codecademy.com/resources/blog/what-is-inheritance/)
- [PHP Interfaces & Polymorphism](https://www.phptutorial.net/php-oop/php-polymorphism/),[Another link](https://anastasionico.uk/blog/interfaces-and-polymorphism-in-php)
- [PHP Traits](https://alexwebdevelop.com/php-traits/)
- [Error Handling In PHP](https://www.w3schools.com/php/php_error.asp)
- [Late Static Binding & How It Works](https://stackoverflow.com/questions/1912902/what-exactly-are-late-static-bindings-in-php)
