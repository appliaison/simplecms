Met
======
Install composer as follows
curl -sS https://getcomposer.org/installer | php

Moved composer to /usr/local/bin/ as follows
sudo mv composer.phar /usr/local/bin/composer

First, download the Laravel installer using Composer:
composer global require "laravel/installer"

Create the  app
laravel new theniche

Make a WelcomeController as follows
php artisan make:controller WelcomeController


Run migration
php artisan migrate

Rollback migration
php artisan migrate:rollback

Rollback all migrations and run them all again
php artisan migrate:refresh

Create ChannelPoster model
php artisan make:model ChannelPoster --migration
Model created successfully.
Created Migration: <name-of-migration>

Create ChannelController
php artisan make:controller ChannelController
Illuminate
composer require illuminate/html (not supported)
composer require laravelcollective/html


Troubleshooting

Fix the error described here
http://laravel.io/forum/06-09-2015-no-supported-encrypter-found-the-cipher-and-or-key-length-are-invalid
by running php artisan key:generate

Faker
composer require fzaninotto/faker

List routes
php artisan route:list
Deploy
======

Move files over
Run composer install
composer install

Run artisan migrate
php artisan migrate

Make sure Options is commented out in public/.htaccess as follows

<IfModule mod_rewrite.c>
    <IfModule mod_negotiation.c>
        #Options -MultiViews
    </IfModule>

    RewriteEngine On

    # Redirect Trailing Slashes If Not A Folder...
    RewriteCond %{REQUEST_FILENAME} !-d 
    RewriteRule ^(.*)/$ /$1 [L,R=301]

    # Handle Front Controller...
    RewriteCond %{REQUEST_FILENAME} !-d 
    RewriteCond %{REQUEST_FILENAME} !-f 
    RewriteRule ^ index.php [L] 
</IfModule>

Make sure storage permissions are correctly set as follows

sudo chmod 755 -R <project-name> and then

chmod -R o+w <project-name>/storage

Create test data as follows
php artisan tinker

>>> $user = new App\User;
=> App\User {#634}
>>> $user->name = 'appliaison';
=> "appliaison"
>>> $user->email='appliaison@gmail.com';
=> "appliaison@gmail.com"
>>> $user->password=Hash::make('password');
=> "$2y$10$cbtB.XHq0m/rP5J6gClKDOHsYc8LCGrF46/GOheZj9c9Es5eB5oOW"
>>> $user->save();
=> true

>>> App\User::first()->toArray();
=> [
     "id" => 1,
     "channel_id" => 0,
     "name" => "appliaison",
     "email" => "appliaison@gmail.com",
     "created_at" => "2016-01-05 12:40:17",
     "updated_at" => "2016-01-05 12:40:17",


//-------------------------------------------------------------------------------------------------------------------------------------------------------
As described here 
https://laraveltips.wordpress.com/2015/06/15/how-to-make-user-login-and-registration-laravel-5-1/

==> php artisan make:auth
Created View: /Users/coder/repos/appliaison/bitbucketrepos/ProjectOnline/aws_amazon_com/www.theniche.tv/theniche/resources/views/auth/login.blade.php
Created View: /Users/coder/repos/appliaison/bitbucketrepos/ProjectOnline/aws_amazon_com/www.theniche.tv/theniche/resources/views/auth/register.blade.php
Created View: /Users/coder/repos/appliaison/bitbucketrepos/ProjectOnline/aws_amazon_com/www.theniche.tv/theniche/resources/views/auth/passwords/email.blade.php
Created View: /Users/coder/repos/appliaison/bitbucketrepos/ProjectOnline/aws_amazon_com/www.theniche.tv/theniche/resources/views/auth/passwords/reset.blade.php
Created View: /Users/coder/repos/appliaison/bitbucketrepos/ProjectOnline/aws_amazon_com/www.theniche.tv/theniche/resources/views/auth/emails/password.blade.php
Created View: /Users/coder/repos/appliaison/bitbucketrepos/ProjectOnline/aws_amazon_com/www.theniche.tv/theniche/resources/views/layouts/app.blade.php
Created View: /Users/coder/repos/appliaison/bitbucketrepos/ProjectOnline/aws_amazon_com/www.theniche.tv/theniche/resources/views/home.blade.php
Created View: /Users/coder/repos/appliaison/bitbucketrepos/ProjectOnline/aws_amazon_com/www.theniche.tv/theniche/resources/views/welcome.blade.php
Installed HomeController.
Updated Routes File.
Authentication scaffolding generated successfully!


//-------------------------------------------------------------------------------------------------------------------------------------------------------

