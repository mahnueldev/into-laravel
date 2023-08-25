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