To run the website, place ALL these files in C:/xampp/htdocs/reg/. (mind that code is based on mysql database and is directory specific)
Open xampp, start APACHE and MYSQL.
Open browser and type localhost/reg/index.php in url box to run the index page of website.
To access database, type localhost/phpmyadmin/index.php create a database named eyadarshad, then create a table named users of four columns named id, name, email, password.
Check A_I(auto-increment) in id and keep it integer(int).
In name, change datatype to variable character (VARCHAR) and set the length limit of your own choice.
Do the same for both email and password.
Create table and test it on localhost/reg/register.php.
Password encryption, Same email cannot be used  for creating different accounts, form validation, credentials verification are also included as features. ENJOY!
