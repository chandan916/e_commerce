                            project structure
													
A) Extracted file 'project' contain

      //Remove the password in connection variable($con) in files common.php,check_if_added.php
         in folder  'include' if error occur.

   A)css folder
                  a.1)bootstrap.min.css
	 B.2)common.css(css file for setting.php, login.php, signup.php, history.php, cart.php, success.php)
	 C.3)style.css(css file for home.php, products.php, about.php, contact.php)
	 
   B)images folder
      contain images included in project.
	  
   C)include folder
                  c.1)check_if_added.php( contain two functions check_if_added and name(to display user name))
	 c.2)common.php(connection variable and session start function)
	 c.3)footer.php
	 c.4)header.php
	 
   D)js folder
                  D.1)all.js(font awesome file for icons used in project)
	 D.2)bootstrap.bundle.min.js
	 D.3)java.js
	 D.4)jquery-3.4.1.min.js
   
   E)files
	  1)home.php
	  2)cart.php
	  3)cart-add.php
	  4)cart-remove.php
	  5)contact.php
	  6)history.php (order history)
	  7)about.php
	  8)login.php
	  9)logout.php
	  10)message.php(to insert message added by user in contact.php into database )
	  11)products.php
	  12)registration.php (for signup.php)
	  13)setting.php
	  14)setting_script.php
	  15)signup.php
	  16)success.php
	  17)verification.php (for login.php)
      F) sql
                   1)'store' database

SQL file
1)Database name 'store'.
2)tables included in database 
      A)items
	id ( int(11) )
	name( varchar(25) )
	price( int(11) )
     B)users
	 id( int(11), AUTO_INCREMENT )
	name( varchar(255) )
	email( varchar(255) )
	password( varchar(255) )
	contact( varchar(255) )
	city( varchar(255) )
	address( varchar(255) )
     C)users_item
	id ( int(11), AUTO_INCREMENT )
	user_id ( int(11) )
	item_id ( int(11) )
	status ( enum('Added to cart','confirmed') )
                 time(datetime)
     D)contact(for contact.php)
	    name( varchar(255) )
	    email( varchar(255) )
	    message( varchar(255) )