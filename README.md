# Getting started
The following instructions are written for ubuntu.
## Installation
### 1. Install apache
Use following commands in your terminal to install apache
```
sudo apt-get update
sudo apt-get install apache2
```
### 2. Install php
```
sudo apt-get install php5 libapache2-mod-php5 php5-mcrypt
```
### 3. Install mySQL
This commands will install and make more secure mySQL.
NOTE: remember your password, it is very necessary for further steps and your work with mysql at all.
```
sudo apt-get install mysql-server php5-mysql
sudo mysql_install_db
sudo mysql_secure_installation
```
### 4. Install phpMyAdmin
With next commands you will set up phpMyAdmin, enable php extensions and reload apache server.
```
sudo apt-get install phpmyadmin php-mbstring php-gettext
sudo phpenmod mcrypt
sudo phpenmod mbstring
sudo systemctl restart apache2
```
### 5. Create database for your laravel project
Open your browser and type http://localhost/phpMyAdmin/.
Then type your login (default: root) and password that you set up in previous steps.
Click "create DB" button. Type name and click "create".
### 6. Install composer
Firstly we have to make sure that all dependencies for composer are already installed
```
sudo apt-get install curl php5-cli
```
Then download composer
```
sudo curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer
```
To check if composer installed properly type next command in your terminal
```
composer
```
And you should get output similar to this:
```
   ______
  / ____/___  ____ ___  ____  ____  ________  _____
 / /   / __ \/ __ `__ \/ __ \/ __ \/ ___/ _ \/ ___/
/ /___/ /_/ / / / / / / /_/ / /_/ (__  )  __/ /
\____/\____/_/ /_/ /_/ .___/\____/____/\___/_/
                    /_/
Composer version 1.0-dev (9859859f1082d94e546aa75746867df127aa0d9e) 2015-08-17 14:57:00

Usage:
 command [options] [arguments]

Options:
 --help (-h)           Display this help message
 --quiet (-q)          Do not output any message
```
And so on.
### 7. Install project dependencies
 Go to your directory with project and run
```
sudo composer install
```
Wait a minute for composer to install all the dependencies
### 8. Configure your project

During this process you will need root permissions for your project directory
In your project directory run
```
cd ../
sudo chmod PERMISSIONS_YOU_WANT -R directory_with_your_project/
cd directory_with_your_project/
```
If you can't choose what permissions to gave you can use next command, but I recommend you to read some tutorial that will help you to choose right permissions for your project.
```
cd ../
sudo chmod 777 -R directory_with_your_project/
cd directory_with_your_project/
```

Now you can continue configuring your project
```
sudo composer run-script post-root-package-install
```
This command will create .env file with configuration for connection to your database
Now, open .env file and change next lines
```
DB_DATABASE=db that you create
DB_USERNAME=your username (default username: root)
DB_PASSWORD=your password (if no password just live empty)
```
Next step is to create key for your project
You can simply do it with
```
sudo composer run-script post-create-project-cmd
```
### 9. Migrate your database
In your project directory run
```
php artisan migrate
```

That is all ! Now you can make your back-end run with
```
php artisan serve
```

### 10. Seed your DB with random data (OPTIONAL)
You can add random data to your db using
```
php artisan db:seed
```
Each time that you type this command you add some additional data to your db

That's all. Good luck !
