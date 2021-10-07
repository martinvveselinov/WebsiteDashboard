<p>Interview task - simple website dashboard made with Laravel and MySQL.</p>
<p>There are tiles which have a button. If the tile is empty on button click,<br> you will be prompted to enter Title, URL and color. After that, the button<br> will be leading to the URL and will be displaying the title and will have the<br> entered color. You can edit and reset the tile.</p>

## Use the app locally

To use the app locally, you will need PHP, MySQL, Laravel and Composer.<br>
Before starting the app, the database needs to be created and seeded.<br>
First, create the MySQL database <strong>laravel_db</strong>.<br>
With <strong>php artisan migrate</strong> the database <strong>dashboard</strong> will be created.<br>
Then with <strong>php artisan db:seed</strong>, the table will be seeded with initial default data.<br>  
The app is started from the root folder with <strong>php artisan serve</strong> command.

## Cloud deploy

The app is also hosted on AWS Elastic Beanstalk and can be viewed by clicking <a href="http://dashboard-env.eba-w5vmqcy3.us-east-2.elasticbeanstalk.com/dashboard">HERE</a></br>
