**What is Security ?**<br>
Is to make some specific important information hidden from people who are not allowed or not authorized to have access to it like[name-passwords-emails-birth date-phone number - address]

**Why we need Secuirty in our web pages ?**<br>

Because all websites are public and usesrs' personal information are stored on DB , so it is essential t to protect these information form attackers(Hackers),and to make your website secure you must have enough knowlege coupled with suitable action and always improve and develop it because security and hacking are a very dengerous and a long term competition or war, this is an ongoing process that won't stop.

**Who is the Hacker ?**<br>
someone who wants to steal or collect information about something whether a company or people or a government organization,and there are two types of them[White hat Hackers -Black hat Hackers ]
White hat Hackers :These are the good guys who simulate hacker attacks to improve the security system for a specific destination
Black hat Hackers :These are the bad guys who want actually damage either your hardware or software or collects information about you to blackmail you or your company whatever for political or personal interests, and there are some kinds of them:

1. Curious Users : Who try to hack just for get information about other people out of curiosity
1. Script Kiddie : Low level hacker who get scripts or code on some free pages or in youtube video (How to hack your school in 10 min) or something like that which most of these flaws have been secured or the solution is already known
1. Thrill Seekers : Who hackes for fun or to prove himself that he can do it if you want these type could be dangerous in some rare situations
1. Trophy Hunters : These individuals may not necessarily have a specific agenda or target, but instead, they seek to demonstrate their skills or prowess in hacking by compromising systems and networks.
1. Hacktivists : High level Hackers who deal with huge organizations to some essential data about sensitve palcesin country or something else
1. Profesionals :Those attackers who you must beware of them , may send spam emails or Keylogger in emails or steal your money from a bank using a credit card or some data he collected from you in several ways.

**What is social engineering ?**<br>
Is how to make your data secured in real life ,because hackers don't use software ways only to hack you they can get info from your trash that you throw to it your phone number, old password or email.You must also hide confidential information and not it at any way on sticky note or in normal note.
Beware of what your are sharing in Facebook or X this publicly available information is so important and many people don't pay attention to it.

**Some basic steps must be taken when initialization your first Web page Using PHP :**<br>

1. Every directory must have index.php file to prevent (Directorty Listing) the list of content of this directory..... if you want to make this page show Forbbiden message you can creat new file in directory with .htaccess extention and write init Option -Indexes[note that don't involve any senetive data in this file ]..... when internal server error occur that means error in php or htaccess files
1. Always put your sentive functions or classes in seperate directory(Privte) and then include it in your main page to prevent hacker from editing your functions or classes
1. Always use .php extention when you want save data or some strings because php file executs in server (server-side scripting language) so no output will appear unless .txt or .json
1. include function convertany file to PHP file so it could be so dangerous if hacker send to you a foto for example for profile and have a PHP code to get info about DB or directories or anything and that can be done by txt or json or any typeof file so toprevent this write this code
1. You have to make a unique class for functions that interact with each table in your database so if there any different data come from another one you know there is a problem.
1. When you want write a qurey it is most better if you put your queries into funcations in classes so you
   prevent hacker from editing the qurey or get whole database by using some speical characters that will get
   what they want.

1. Keep your functions empty from any globel variables **as you can** just use them in the main ,and give little inforamtion
   when any error occures.

1. **Principle of least privilege** In any login system must restrict premissions and privilege ,for example admin has access to users and editor
   depends on logic higher rank has access to lower and not the opposite

```php
$page=isset($_GET['page']?$_GET['page'] :"home");
$folders=""; //    or  "/" that brings all what in this folder
$files=glob($folders . ".php");
if(in_array($page .".php" ,$files)){
    require($page.".php");
}
else{
    echo "This page doesn't exist";
}
```

---

**Limit points of entry**
The website must have only one index.php because it will automatically render when enter any directory and include all pages in index.php.
In includes directory must have home.php not index.php to prevent hackers from run this pages if they write in url includes,because we want home page rendered when index.php in main calls it.

Like Functions must use **DRY** principle,if there any code you need to write it in several times just write it in php file and include it in all places.

We use htaccess file to rewrite the url when we use get method instead of showing index.php?page=posts or any page you called you add your rewrite rule

```htaccess
RewiteEngine On

RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.\*)$ index.php?url=$1 [l,QSA]

```

**SQL injection**

Protection your website must be in several layers at a time to make sure that if they break through one layer there is another one:

1. The first very effective level for protection is to use flags or make casting to the data (if user entered string and you put int casting it will return 0 == false)
   or use input check if the input data is what you expect if you want email,number,text,phone number and so on
   but make sure you put this limitions in php (in server side) not only in html because he can edit it easily

2. The second level is to use addslashes() function with two single quotes surrounding variables in your qurey that is why to force hacker to put quotes in input field
   then you will slashed it by addslashes() function so effectively neutralizing them
3. It is much better if you filter variables that used in qurey that come from users before entered into query using pervious method

**Prepared statements**

You can read&write from database using two methods `mysqli` that specialized in sql only or `PDO` that is a class and used to deal with any database ,it is work as template.

You prepared statements and then all variables will be stored in an array then garp them all to put them in its places in qurey ..its places in qurey are like that `id=:id and view=:view` so that function expects getting qurey and data where qurey is a bare qurey with placholders for the data the actual variable

**cross site scripting XSS**
Every data that comes even through database or url make sure to clean it first by using `htmlspecialchars()` that will return text even it was a dangerous script
hackers can include dangerous script while signing up either in password field or name or email and after it saved in database if he calls it again the script will be compiled

**Useful links**

- [Some security tricks](https://www.youtube.com/watch?v=bOqTCDfc7Tk&list=PL0eyrZgxdwhwwQQZA79OzYwl5ewA7HQih&index=6)
