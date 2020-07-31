# Laravel-Authenticate-ON-

This site allows users to verify their Optimum-Nutrition product and receive regular updates about the promotional offers from Optimum Nutrition. Moreover, users from 11 different
countries can search for authorized retailers surrounding their location in South and West Asia. They can also get the driving distance and driving directions from their location to
the selected stores location. Users inquiries, comments and suggestions can also be reached out to Optimum Nutrition through this site.

This project is derived from : [Authenticate-On](https://authenticateon.com/). This time this project is completed using Laravel framework.

__Usage :__ Laravel, Jquery, Ajax, Google Maps JavaScript API.

__How to Run :__ Download all the contents from project root folder and using command line change directory to the folder "Authenticate_ON_Laravel". 

__Run these commands from cmd :__ 
                  1. composer install( You need to have composer installed on your machine to run this command successfully)
                  2. copy .env.example .env

Now, Change the name of your database in .env file in the line DB_DATABASE or keep it same and create a new database in PhpMyAdmin titled as the name in DB_DATABASE in your .env file. Now, go to the created database in PhpMyAdmin and import "on.sql" from the DB folder available in project root. That will import all the tables from my database to work with. After this you will need recapcthca and mail configuration to set up in your .env file. For mail, create a free account in mailtrap.io and use the username and password from the credentials in SMTP of Mailtrap  in your .env file in the lines MAIL_USERNAME and MAIL_PASSWORD respectively. Modify your mail.php file in config/mail.php according to your mail configurations in your .env file.

After completion of above steps next bits are easy. Run these 3 commands one by one maintaining serial.
                  1. php artisan key:generate
                  2. php artisan config:cache
                  3. php artisan serve

Now you are good to go with the application.
