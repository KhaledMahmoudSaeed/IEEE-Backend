# Research

## Topics

- [What is PHP?](#what-is-php)
- [What are the three main error types in PHP](#what-are-the-three-main-error-types-in-php)
- [sensitivity in PHP](#sensitivity-in-php)
- [programming language vs scripting langauge](#programming-language-vs-scripting-langauge)
- [dynamically typed vs statically typed language](#dynamically-typed-vs-statically-typed-language)
- [Assign by Value . VS . Assign by Reference](#assign-by-value--vs--assign-by-reference)
- [What are the different types of loops in PHP?](#what-are-the-different-types-of-loops-in-php)
- [What is the difference between for and foreach loop in PHP?](#what-is-the-difference-between-for-and-foreach-loop-in-php)
- [What are superglobals in PHP?](#what-are-superglobals-in-php)
- [Differentiate between GET and POST methods in PHP](#differentiate-between-get-and-post-methods-in-php)
- [What are closures in PHP?](#what-are-closures-in-php)
- [What are the steps to create a new database using postgreSQLand PHP?](#what-are-the-steps-to-create-a-new-database-using-postgresqland-php)
- [What are cookies? How to create cookies in PHP?](#what-are-cookies-how-to-create-cookies-in-php)
- [ What is the difference between the include() and require()functions?](#what-is-the-difference-between-the-include-and-requirefunctions)
- [Reference](#reference)

---

### What is PHP?

**PHP** stands for (Hypertext preprocessor) is a open source,interpreted,OOP and scripting language that mainly used for web development however it can make another things (AI ,Mobile ...etc),`PHP` allows you to develop various web applications, including blogs, content management systems `CMS`, and online stores. .Executed on server unlike `HTML` and `Javascript` which executed on web and gives anyone "who have enough knowledge " to read your code ,but that isn't happening in `PHP` .
`PHP` can be hosted on almost servers which is used to manage the dynamic content of the website and works with almost databasese

**Importance of PHP**

1. It can Deal with cookies either access variable or set .
1. You can creat sessions in `PHP`.
1. Can Encrypt and Decrypt and apply validation.
1. `PHP` supports several protocols such as `HTTP`, `POP3`, `SNMP`, `LDAP`, `IMAP`, and many more.
1. Can control user access to some websites and deal with data that user entered.
   ![pic](https://static.javatpoint.com/phppages/images/php-features.png)

---

### What are the three main error types in PHP

There are various types of errors in PHP but it contains basically three main type of errors.

1. **Parse error or Syntax Error:** It is the type of error done by the programmer in the source code of the program. The syntax error is caught by the compiler. After fixing the syntax error the compiler compile the code and execute it. Parse errors can be caused dues to unclosed quotes, missing or Extra parentheses, Unclosed braces, Missing semicolon etc Example
   ```php
   <?php
   echo 'welcom'
   echo "hallo ;
   ```
1. **Fatal Error:** It is the type of error where PHP compiler understand the PHP code but it recognizes an undeclared function. This means that function is called without the definition of function. Example:

   ```php
    <?php

    function add($x, $y)
    {
        $sum = $x + $y;
        echo "sum = " . $sum;
    }
    $x = 0;
    $y = 20;
    add($x, $y);

    diff($x, $y);
    ?>
   ```

1. **Warning Errors :** The main reason of warning errors are including a missing file. This means that the PHP function call the missing file. Example

   ```php
    <?php

    $x = "GeeksforGeeks";

    include ("gfg.php");

    echo $x . "Computer science portal";
    ?>
   ```

- There is another one but not always consider as **Main Error** ,this error is **Notice error** it is similar to warning error. It means that the program contains something wrong but it allows the execution of script. Example:

  ```php
    <?php

    $x = "GeeksforGeeks";

    echo $x;

    echo $geeks;
    ?>
  ```

---

### echo vs print

1. **Speed.** There is a difference between the two, but speed-wise it should be irrelevant which one you use. echo is marginally faster since it doesn't set a return value if you really want to get down to the nitty gritty.

1. **Expression.** `print()` behaves like a function in that you can do: `$ret = print "Hello World";` And `$ret` will be 1. That means that `print` can be used as part of a more complex expression where `echo` cannot. An example from the PHP Manual:

   `$b ? print "true" : print "false";`
   `print` is also part of the precedence table which it needs to be if it is to be used within a complex expression. It is just about at the bottom of the precedence list though. `Only` , `AND` `OR` `XOR` are lower.

1. **Parameter.** The grammar is: `echo expression [, expression[,expression] ... ]` But `echo ( expression, expression ) `is not valid. This would be valid: `echo ("howdy"),("partner");` the same as: `echo "howdy" "partner";` (Putting the brackets in that simple example serves no purpose since there is no operator precedence issue with a single term like that.)
   So, `echo` without parentheses can take multiple parameters, which get concatenated

```php
<?php
echo  "and a ", 1, 2, 3;   // comma-separated without parentheses
   echo ("and a 123");        // just one parameter with parentheses
?>


<?php
  print ("and a 123");
  print  "and a 123";
?>
```

---

### sensitivity in PHP

`PHP` is a partial case-insensitive language for the keywords, classes, and functions that it provides. This means that you can use uppercase, lowercase, or a combination of both when writing PHP code without affecting its functionality. However, variable names are case-sensitive, so
**variableand** Variable would be considered two different variables.
In `PHP`, you can use the `strcasecmp()` function to compare two strings and ignore case sensitivity. This function returns 0 if the two strings are equal, a negative value if the first string is less than the second, and a positive value if the first string is greater than the second. Here's an example:

```php
<?php

$string1 = "Hello";
$string2 = "hello";

if (strcasecmp($string1, $string2) == 0) {
    echo "The strings are equal.";
} else {
    echo "The strings are not equal.";
}
```

---

### programming language vs scripting langauge

Both languages are used for software development. All scripting languages can be used as programming languages but vice versa is not true. The basic difference between them is that scripting languages are not compiled, they are interpreted. Before the advent of scripting languages, programming languages were used to develop software like Microsoft PowerPoint, Microsoft Excel, Internet Explorer, etc. However, there arose a need for languages to incorporate additional functionalities, hence the need for scripting languages. Let us now understand scripting language and programming languages in detail, and then we will look at some differences between them.
![pic](https://www.interviewbit.com/blog/wp-content/uploads/2021/12/Difference-Between-Scripting-Language-and-Programming-Language-800x187.png)

---

**Programming Language**

1. A programming language is a type of computer language that consists of a set of instructions for communicating with computers.
1. Most programming languages are compiled. The translation overhead is incurred just once when the source is compiled; after that, it merely needs to be loaded and run.
1. Traditional programming languages are based on low-level languages.
1. Execution of a program takes more time since they are compiled.
1. It is used to create a new program or piece of software from the scratch.
1. Most regular programming languages are stronger in data and control abstraction.

---

**Scripting Language**

1. A scripting language is a kind of programming language that is used to automate the execution of operations in a runtime environment.
2. Most scripting languages are interpreted languages. They must be parsed, interpreted, and executed each time the program is run.
3. Scripting languages generally prefer high-level languages.
4. Execution of a script takes less time as scripts are generally short.
5. It is used to enhance an existing program or automate a specific task. A scripting language is used to control the behavior of a program.
6. Scripting languages generally emphasize the extensibility and richness of expressions.

---

### Dynamically typed vs statically typed language

TypeScript is considered a strongly typed programming language that builds on top of JavaScript. It allows specifying the types of data being passed around within the code and can repeat errors when the types don't match. In a Statically Typed language, type-checking occurs during compile time. The compiler carries out the value to use the same type. TypeScript provides static typing through type annotations to enable checking type at compile time. This typing is optional and may be ignored to use the regular dynamic typing of JavaScript.
**Static Typing**
Static Typing allows for catching type-related errors at compile time. It provides an automatic way to verify the type safety and correctness of your application during the development stage, which ensures type errors are eliminated before your code is deployed to production. It can make developers more productive. With the additional type of information made available to IDEs, features such as auto-completion, incremental error checking, and automatic refactoring become more powerful. It also improves collaboration on a large codebase.
**Dynamic Typing**
Dynamic Typing allows assigning a type to a variable at run-time. The type of variable is decided based on its value. The programs written using dynamic-typed languages are more flexible but will compile whether or not they contain errors. If a program has a minimum of one dynamically-typed variable, then the program is considered dynamically typed. The word dynamic means that after you set a variable to a type, you can change it. This is because typing is associated with the value of the variable, it assumes rather than the variable itself.

---

### Assign by Value . VS . Assign by Reference

When you assign one variable to another by value, you are essentially making a copy of the original value and assigning it to a new variable. Any changes made to the new variable will not affect the original variable, and vice versa. This is useful when you want to manipulate a value without modifying the original variable, or when you want to compare two values without altering either one.

On the other hand, when you assign one variable to another by reference, you are creating a reference or alias to the original variable. Any changes made to the new variable will be reflected in the original variable, and vice versa. This is useful when you want to modify the original variable directly, or when you want to avoid making unnecessary copies of large data structures.

Understanding the difference between these two types of variable assignments is crucial for designing efficient and effective programs. By using the right assignment method for each situation, you can optimize your code for speed and memory usage, and avoid common errors like unintended side effects or memory leaks.

So, whether you're just starting out as a programmer or you're an experienced developer looking to improve your skills, mastering the difference between assigning variables by value and by reference in C++ is an important step towards writing clean, efficient, and reliable code.

---

### What are the different types of loops in PHP?

Loops in PHP are

1. **for loop** :This type of loops is used when the user knows in advance, how many times the block needs to execute. That is, the number of iterations is known beforehand. These type of loops are also known as entry-controlled loops. There are three main parameters to the code, namely the initialization, the test condition and the counter
1. **while loop**: The while loop is also an entry control loop like for loops i.e., it first checks the condition at the start of the loop and if its true then it enters the loop and executes the block of statements, and goes on executing it as long as the condition holds true.
1. **do-while loop** :This is an exit control loop which means that it first enters the loop, executes the statements, and then checks the condition. Therefore, a statement is executed at least once on using the do…while loop. After executing once, the program is executed as long as the condition holds true.
1. **foreach loop** :This loop is used to iterate over arrays. For every counter of loop, an array element is assigned and the next counter is shifted to the next element

---

### What is the difference between for and foreach loop in PHP?

**The for loop** works at the end of the given condition. It is used for the implementation of variables and works in a single way. The for loop does not work in the case of associative arrays. A for loop basically consists of three portions or parts.
A variable is initialized with a value.
The variable is subjected to the condition to which it is compared.
Increment/decrement loop counter.

**The foreach loop** works at the end of the array count. This loop can work with variables as well as associative **arrays**. Therefore, this loop can be implemented in more than one way. The foreach loop is much better and performs better in comparison to the for loop.
**The foreach loop** can also be implemented in the case of key-value pairs, i.e. **associative arrays**. The key and their corresponding mapped values can be displayed easily on the screen. The following code snippet illustrates the usage of the loop over an **associative arrays**.

---

### What are superglobals in PHP?

Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.

The PHP superglobal variables are:

```php
$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION

```

---

### Differentiate between GET and POST methods in PHP.

The key difference Between GET and POST method in PHP is that GET method sends the information by appending them to the page request while POST method sends information via HTTP header.

PHP is a server-side scripting language designed for web development. The GET and POST methods are two ways of a client computer to send information to the web server. These methods help to retrieve information from users by forms.

**What is GET Method in PHP?**
A dynamic website has the capability to store, update, retrieve and delete data from a database. A form is a document that contains fields for the user to fill the data. These form data will store to the database.
The form information with the GET method is visible to everyone. In other words, all variable names and values are visible in the URL. The ‘?’ character separates the page URL and form information. The amount of information to send using GET is limited. It is less than 1500 characters. Usually, it is not a good practice to use GET to send sensitive information such as passwords. In some situations, this method helps to bookmark the page.
**What is POST Method in PHP?**
The form information with the POST method is not visible to everyone. In other words, all variable names and values are attached to the body of the HTTP request. The form information is not visible in the URL. Therefore, it helps to send information securely. There is also no particular limit to the amount of data to send. In addition to that, the POST method provides features such as support for multi-part binary input while uploading files to the server.
![](/PHP/Sources/pic.PNG)

---

### What are closures in PHP?

1. The closure is a function assigned to a variable, so you can pass it around
1. A closure is a separate namespace, normally, you can not access variables defined outside of this namespace. There comes the use keyword:
1. **use** allows you to access (use) the succeeding variables inside the closure.
1. **use** is early binding. That means the variable values are COPIED upon DEFINING the closure. So modifying `$tax` inside the closure has no external effect, unless it is a pointer, like an object is.
1. You can pass in variables as pointers like in case of &$total. This way, modifying the value of $total DOES HAVE an external effect, the original variable's value changes.
1. Variables defined inside the closure are not accessible from outside the closure either.
1. Closures and functions have the same speed. Yes, you can use them all over your scripts.

```php
function ($quantity) use ($tax, &$total) { .. };
```

### What are the steps to create a new database using postgreSQLand PHP?

All interactions with the PostgreSQL database are performed through the PostgreSQL extension, which is a comprehensive set of PHP functions. For a complete list of functions and information about what they do, refer to the PHP Manual instructions: http://www.php.net/manual/ref.pgsql.php.

There are two ways we can connect to the PostgreSQL database:

1. Using the PHP command line interface.

1. Using PHP API.

**PHP command line Interface**
Using the functions below we can connect to the PostgreSQL database:

```
[root@localhost bin]#cd /usr/bin/

[root@localhost bin]# ./php -a
```

Interactive shell:

```
php > pg_connect("host=localhost dbname=edb user=enterprisedb password=postgres");

php > pg_query("create table test(id integer)");

php > exit
```

---

### What are cookies? How to create cookies in PHP?

PHP transparently supports HTTP cookies. Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users. You can set cookies using the `setcookie()` or `setrawcookie(`) function. Cookies are part of the HTTP header, so `setcookie()` must be called before any output is sent to the browser. This is the same limitation that `header()` has. You can use the output buffering functions to delay the script output until you have decided whether or not to set any cookies or send any headers.

Any cookies sent to server from the client will automatically be included into a $\_COOKIE auto-global array if variables_order contains "C". If you wish to assign multiple values to a single cookie, just add [] to the cookie name.

---

### What is the difference between the include() and require()functions?

In PHP, there are two functions that are used to put the contents of a file containing PHP source code into another PHP file. These function are Include() and Require(). These functions are the same if but they have one difference. The difference is that the include() function produces a warning, but the script will continue execution, while the require() function produces a warning and a fatal error i.e. the script will not continue execution. These two functions are used to put the data of a file into another PHP file before it is executed by the server.

include():
PHP include() function includes external file into a PHP program. It accepts the external file path and checks if the file exists or not. If the file does not exist in the specified path, then the include() will return a PHP warning.

Warning: failed to open stream: No such file or directory...
Warning: Failed opening ... for inclusion...
By including an external file by using the PHP include() function, the variable, functions, and classes of the included file can be used in the program where it is included. The following code shows an example for including an external file using PHP include().

```php
<?php
include ("../file_name.php"); // relative path
                              // OR
include ("/xampp/hddocs/file_name.php"); // absolute path
?>
```

If we include the same file multiple times by using this function, then it will cause a PHP error.

require():
PHP require() function is as similar as include() function. But, the difference is, that the ‘require()’ function will return a fatal error and stop executing the program at the time of failure whereas the include() function returns a warning and continue execution.

Warning: failed to open stream: No such file or directory...
Fatal error: Failed opening required...
The code to include file using require() function is,

```php
<?php
require ("../file_name.php"); // relative path
                              // OR
require ("/xampp/hddocs/file_name.php"); // absolute path
?>
```

---

## Reference

1. [What is PHP?](https://www.javatpoint.com/php-tutorial)
2. [What are the three main error types in PHP](https://www.geeksforgeeks.org/php-types-of-errors/)
3. [echo vs print](https://stackoverflow.com/questions/234241/how-are-echo-and-print-different-in-php)
4. [sensitivity in PHP](https://www.quora.com/Is-PHP-case-sensitive-or-case-insensitive)
5. [programming language vs scripting langauge](https://www.interviewbit.com/blog/scripting-language-vs-programming-language/)
6. [dynamically typed vs statically typed language](https://www.scaler.com/topics/typescript/static-typing-vs-dynamic-typing/)
7. [Assign by Value . VS . Assign by Reference](https://www.quora.com/What-is-the-difference-between-assigning-one-variable-to-another-by-value-and-by-reference-in-C)
8. [What are the different types of loops in PHP?](https://www.geeksforgeeks.org/php-loops/)
9. [What is the difference between for and foreach loop in PHP?](https://www.geeksforgeeks.org/what-is-the-difference-between-for-and-foreach-loop-in-php/)
10. [What are superglobals in PHP?](https://www.w3schools.com/php/php_superglobals.asp)
11. [Differentiate between GET and POST methods in PHP.](https://www.differencebetween.com/difference-between-get-and-post-method-in-php/)
12. [What are closures in PHP?](https://stackoverflow.com/questions/1065188/in-php-what-is-a-closure-and-why-does-it-use-the-use-identifier)
13. [What are the steps to create a new database using postgreSQLand PHP?](https://www.enterprisedb.com/postgres-tutorials/connecting-postgresql-using-php)
14. [What are cookies? How to create cookies in PHP?](https://www.php.net/manual/en/features.cookies.php)
15. [ What is the difference between the include() and require()functions?](https://phppot.com/php/comparison-between-include-and-require-statements-in-php/)
