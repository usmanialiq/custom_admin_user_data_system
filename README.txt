Hello Guys


This Custom User Registration System is built on following technologies,
* Bootstrap ( Paper Kit by Creative-Tim.com )
* PHP
* jQuery
* AJAX
* Custom CSS is also used with the page



To change the background image, 
 - Goto the 'index.html' and locate '<style>' tags
 - In body{}, change the 'url' by making "image/anime-back.jpg" to your directory (remember include file extension) 



Here is the guide to setup this project on your web server or host it on your domain,

* To change the heading "Custom User Registration System", 
 (1) Open the index.html file in text editor or any HTML editor (Sublime Text 3.0 or Notepad++ ...)
 (2) Locate <title>, change the content
 (3) Locate class="navbar-brand", and after the closing tags '>', change the content uptil '</a>' tags
 (4) To change the About content in Navbar, locate the the first '<li>' tags inside of '<ul>' tags, change the 'title' and
     'data-content'
 (5) Now we need to setup our database, goto 'phpmyadmin' and create a new database
 (6) Create a table named 'user_reg', and create '7' rows
 (7) First row must be 'id', set to primary and AUTO_INCREMENT
 (8) Second row must be 'fullname', VARCHAR
 (9) Third row must be 'email', VARCHAR 
 (10) Forth row must be 'contact', VARCHAR
 (11) Fifth row must be 'cnic', VARCHAR (you can change it to any other info you want but you need to change 'cnic' everywhere 
      in 'fetch.php' and 'confirm.php'and even in the 'index.html'
 (12) Sixth row must be 'institute', VARCHAR
 and,
 (13) Seventh row must be 'gender', VARCHAR
 

You are all set!!!