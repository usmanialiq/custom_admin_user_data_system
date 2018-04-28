# Custom User Registation and Visualization
Hello Guys


This Custom User Registration System is built on following technologies,
* Bootstrap ( Paper Kit by Creative-Tim.com )
* PHP
* jQuery
* AJAX
* Custom CSS is also used with the page

This System comprise of,
* A cool registration form
* A Search System which visualizes the users in our database


To change the background image, 
 - Goto the 'index.html' and locate <style> tags
 - In body{}, change the 'url' by making "image/anime-back.jpg" to your directory (remember include file extension) 



Here is the guide to setup this project on your local web server (XAMPP etc...) or host it on your domain,

* To change the heading "Custom User Registration System", 
 * Open the index.html file in text editor or any HTML editor (Sublime Text 3.0 or Notepad++ ...)
 * Locate <title>, change the content
 * Locate class="navbar-brand", and after the closing tags >, change the content uptil '/a' tags
 * To change the content of About in Navbar, locate the the first 'li' tags inside of 'ul' tags, change the 'title' and
     'data-content'
 * Now we need to setup our database, goto 'phpmyadmin' and create a new database
 * Create a table named 'user_reg', and create '7' rows
 * First row must be 'id', set to primary and AUTO_INCREMENT
 * Second row must be 'fullname', VARCHAR
 * Third row must be 'email', VARCHAR 
 * Forth row must be 'contact', VARCHAR
 * Fifth row must be 'cnic', VARCHAR (you can change it to any other info you want but you need to change 'cnic' everywhere 
      in 'fetch.php' and 'confirm.php' and even in the 'index.html'
 * Sixth row must be 'institute', VARCHAR
 and,
 * Seventh row must be 'gender', VARCHAR
 

You are all set!!!
