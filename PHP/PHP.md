# Research
## Topics
- [Research](#research)
  - [Topics](#topics)
    - [What is PHP?](#what-is-php)
    - [What are the three main error types in PHP](#what-are-the-three-main-error-types-in-php)
    - [sensitivity in PHP](#sensitivity-in-php)
  - [Reference](#reference)

---
### What is PHP?
**PHP** stands for (Hypertext preprocessor) is a open source,interpreted,OOP and scripting language that mainly used for web development however it can make another things (AI ,Mobile ...etc),```PHP``` allows you to develop various web applications, including blogs, content management systems ```CMS```, and online stores. .Executed on server unlike ```HTML``` and ```Javascript``` which executed on web and gives anyone "who have enough knowledge " to read your code ,but that isn't happening in ```PHP``` .
```PHP``` can be hosted on almost servers which is used to manage the dynamic content of the website and works with almost databasese

**Importance of PHP**
1. It can Deal with cookies either access variable or set .
1. You can creat sessions in ```PHP```.
1. Can Encrypt and Decrypt and apply validation.
1. ```PHP``` supports several protocols such as ```HTTP```, ```POP3```, ```SNMP```, ```LDAP```, ```IMAP```, and many more.
1. Can control user access to some websites and deal with data that user entered.
![pic](https://static.javatpoint.com/phppages/images/php-features.png)

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
### echo vs print
1. **Speed.** There is a difference between the two, but speed-wise it should be irrelevant which one you use. echo is marginally faster since it doesn't set a return value if you really want to get down to the nitty gritty.

1. **Expression.** ```print()``` behaves like a function in that you can do: ```$ret = print "Hello World";``` And ```$ret``` will be 1. That means that ```print``` can be used as part of a more complex expression where ```echo``` cannot. An example from the PHP Manual:

   ```$b ? print "true" : print "false";```
   ```print``` is also part of the precedence table which it needs to be if it is to be used within a complex expression. It is just about at the bottom of the precedence list though. ```Only``` , ```AND``` ```OR``` ```XOR``` are lower.
2. **Parameter.** The grammar is: ```echo expression [, expression[,expression] ... ]``` But ```echo ( expression, expression ) ```is not valid. This would be valid: ```echo ("howdy"),("partner");``` the same as: ```echo "howdy" "partner";``` (Putting the brackets in that simple example serves no purpose since there is no operator precedence issue with a single term like that.)
So, ```echo``` without parentheses can take multiple parameters, which get concatenated

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
### sensitivity in PHP
```PHP``` is a partial case-insensitive language for the keywords, classes, and functions that it provides. This means that you can use uppercase, lowercase, or a combination of both when writing PHP code without affecting its functionality. However, variable names are case-sensitive, so 
**variableand** Variable would be considered two different variables.
In ```PHP```, you can use the ```strcasecmp()``` function to compare two strings and ignore case sensitivity. This function returns 0 if the two strings are equal, a negative value if the first string is less than the second, and a positive value if the first string is greater than the second. Here's an example:
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

## Reference
1. [What is PHP?](https://www.javatpoint.com/php-tutorial)
1. [What are the three main error types in PHP](https://www.geeksforgeeks.org/php-types-of-errors/)
1. [echo vs print](https://stackoverflow.com/questions/234241/how-are-echo-and-print-different-in-php)
1. [sensitivity in PHP](https://www.quora.com/Is-PHP-case-sensitive-or-case-insensitive)







