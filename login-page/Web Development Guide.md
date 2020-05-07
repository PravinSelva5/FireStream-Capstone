# Web Development Guide
* Create a local host on your computer where you can test out website. Provides you more advantages then just opening your files (index.html) on chrome because you can see if backend works as well such as the login page. Technically you do not need phpMyAdmin anymore as I needed this before we got AWS setup to create our backend for login but if you want to learn and have something for other projects without AWS dependence I recommend installing it. You could skip installing this and just connect to our RDS if you wish.
  * Steps:
    * Install Apache24
    *	Install PHP
    *	Install MySQL
    *	Install phpMyAdmin
  * To setup the login backend for the website:
    * Set up firestream database table of ID, user, pass in phpMyAdmin
    * Add default entry of -> ID: 1, user: admin, pass: admin
  * To access localhost type localhost in the browser:
    * Access the website by typing localhost/firestream in browser
	  * Access phpMyAdmin by typing localhost/phpmyadmin in browser
  * Links I used to do above:
    * To Install Apache, MySql, PhP: https://youtu.be/kuMTZowwjus 
    * To Install phpMyAdmin: https://youtu.be/hqfIksHKPPg

* To transfer whatever you worked on in localhost to AWS for deployment:
  * AWS works with its RDS service for the database and I used MySQL Workbench (installed on my computer) to connect to that database:
    * Connection Info:
      * User: admin
      * Password: firestream-db.cmserg3y5aet.ca-central-1.rds.amazonaws.com
      * Port: 3306
    * After connecting to the database, I used SQL to create a table of loginform in the firestream database and inserted info of user: admin, pass: admin in to that table (notice how this is similar to phpMyAdmin database table info):
      * SQL code: INSERT INTO loginform VALUES
		  (1, 'admin', 'admin');loginform
  * Every file EXCEPT connect.php (the file that connects to our local database in phpMyAdmin) will remain the same
    * To connect to Amazon RDS instead of phpMyAdmin make the following changes in connect.php:
      * Change DB_USER to ‘admin’ 
      * Change DB_PASSWORD to ‘firestream’
      * Change DB_HOST to 'firestream-db.cmserg3y5aet.ca-central-1.rds.amazonaws.com'
    * Steps:
      * Zip the folder
      * AWS -> AWS Management Console -> Elastic Beanstalk -> Environments -> Firestream-env -> Upload and deploy
      
* Explanation of files:
  * connect.php -> Connects to our database (whether phpMyAdmin or AWS RDS)
  *	index.php -> Backbone of our website
  *	logout.php -> Logs user out and brings them back to our login page, asking for a login again
  *	member.php -> Page the user is greeted with after logging in
  *	pi1.php -> Live streaming page
  *	styles.css -> Front-end styling is handled here
  *	Under S3 folder:
    *	Under app folder:
    	* config.php -> Contains our key and secret to access our S3 bucket for video storage
      	* start.php -> Connects us to our S3 bucket using information from config.php
    *	videos.php -> Uses start.php and grabs the videos stored in our S3 bucket for viewing by users
 


