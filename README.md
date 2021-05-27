## ECV Team Maryam-Abdoul-Christopher

Project Laravel UML

## Local Development

### Initial Setup

The below commands will clone this repository, install all the required dependencies, start the application, and apply migrations:

```bash
# First, we clone the repository
git clone https://github.com/Abdoul-wahab/ecv-laravel-uml.git
cd ecv-laravel-uml/

# Then, we install all the required dependencies
composer install

# Copy .env file
cp .env.example .env

# Start the application
php artisan serve

# Apply migrations
php artisan migrate:fresh --seed

```

Once the application's have been started, you may access the project in your web browser at: [http://localhost:8088](http://localhost:8088).
