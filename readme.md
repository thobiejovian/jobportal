## Easy Job 

This is my first Fullstack Website for my University project and any improvement will be always updated 



## How to install? 

you can also install this on your local desktop and improve it 

**Windows**
Go to the project folder
Shift+Right Click -> Open command window here

**Mac**
Open Terminal, Type "cd " (with a space)
From finder, Drag the project folder
Press Enter to go inside the project folder

**Compose**

-composer install

**Generate Key**

-php artisan key:generate

**Setup Database**

-Open the file .env
(Assuming wamp or xampp)
-Edit values to match your database
-Add empty database using phpmyadmin
-Include that name in the DB_DATABASE

```
DB_HOST=localhost
DB_DATABASE=students_data
DB_USERNAME=root
DB_PASSWORD=
```

**Get Tables**
-php artisan migrate

**Get default/initial/dummy table values**
-php artisan db:seed

**Run the project**
-php artisan serve




## Responsive? 

at the moment this website is responsive to 768px (ipad portrait and landscape), soon i will improve it to make it fully responsive for smartphone. 


