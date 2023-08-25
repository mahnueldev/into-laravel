<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

### Run Server
php artisan serve

### Create Model
 php artisan make:model <Name>
### Create Migration
 php artisan make:migration create_<name>_table
### Create Seeders
 php artisan db:seed
### Migrate to database
 php artisan migrate
### Refresh database migration
 php artisan migrate:refresh
### Refresh database migration & run seeders
 php artisan migrate:refresh --seed
 ### Create Factory
 php artisan make:factory <Name>