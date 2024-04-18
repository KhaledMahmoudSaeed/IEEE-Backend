**What is Security ?**
Is to make some specific important information hidden from people who are not allowed or not authorized to have access to it like[name-passwords-emails-birth date-phone number - address]

**Why we need Secuirty in our web pages ?**

Because all websites are public and usesrs' personal information are stored on DB , so it is essential t to protect these information form attackers(Hackers),and to make your website secure you must have enough knowlege coupled with suitable action and always improve and develop it because security and hacking are a very dengerous and a long term competition or war, this is an ongoing process that won't stop.

**Who is the Hacker ?**
someone who wants to steal or collect information about something whether a company or people or a government organization,and there are two types of them[White hat Hackers -Black hat Hackers ]
White hat Hackers :These are the good guys who simulate hacker attacks to improve the security system for a specific destination
Black hat Hackers :These are the bad guys who want actually damage either your hardware or software or collects information about you to blackmail you or your company whatever for political or personal interests, and there are some kinds of them:

1. Curious Users : Who try to hack just for get information about other people out of curiosity
1. Script Kiddie : Low level hacker who get scripts or code on some free pages or in youtube video (How to hack your school in 10 min) or something like that which most of these flaws have been secured or the solution is already known
1. Thrill Seekers : Who hackes for fun or to prove himself that he can do it if you want these type could be dangerous in some rare situations
1. Trophy Hunters : These individuals may not necessarily have a specific agenda or target, but instead, they seek to demonstrate their skills or prowess in hacking by compromising systems and networks.
1. Hacktivists : High level Hackers who deal with huge organizations to some essential data about sensitve palcesin country or something else
1. Profesionals :Those attackers who you must beware of them , may send spam emails or Keylogger in emails or steal your money from a bank using a credit card or some data he collected from you in several ways.

**What is social engineering ?**
Is how to make your data secured in real life ,because hackers don't use software ways only to hack you they can get info from your trash that you throw to it your phone number, old password or email.You must also hide confidential information and not it at any way on sticky note or in normal note.
Beware of what your are sharing in Facebook or X this publicly available information is so important and many people don't pay attention to it.

**Some basic steps must be taken when initialization your first Web page Using PHP :**

1. Every directory must have index.php file to prevent (Directorty Listing) the list of content of this directory..... if you want to make this page show Forbbiden message you can creat new file in directory with .htaccess extention and write init Option -Indexes[note that don't involve any senetive data in this file ]..... when internal server error occur that means error in php or htaccess files
1. Always put your sentive functions or classes in seperate directory(Privte) and then include it in your main page to prevent hacker from editing your functions or classes
1. Always use .php extention when you want save data or some strings because php file executs in server (server-side scripting language) so no output will appear unless .txt or .json
1. include function convertany file to PHP file so it could be so dangerous if hacker send to you a foto for example for profile and have a PHP code to get info about DB or directories or anything and that can be done by txt or json or any typeof file so toprevent this write this code

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
