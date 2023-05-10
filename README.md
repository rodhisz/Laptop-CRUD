<h1>Project Laptop - CRUD</h1>
project simple ini dibuat untuk bahan belajar CRUD di Laravel klo lupa caranya hehehe

<h3>Project Laptop - CRUD</h3>

## Cara Bikin CRUD di Laravel dengan Upload Gambar
1. Instalasi laravel dengan `composer create-project laravel/laravel nama_project`
2. Bikin database baru
3. Penyesuaian env (nama database, port dll)
4. Bikin Model, Controller, Migration dengan “php artisan make:Model nama_model -rm” di terminal
5. ke Model Bikin $fillable atau $guarded di Model
6. Bikin apa saja yang mau diinput di Migration
6. di terminal ketik "php artisan migrate"
7. Templating dan coba tampilkan


1. Clone this repository
2. Run `composer install`
3. Run `cp .env.example .env` for terminal or linux / Run `copy .env.example .env` for windows
4. Open your .env file and change the database name (`DB_DATABASE`) to whatever you have, username (`DB_USERNAME`) and password (`DB_PASSWORD`) field correspond to your configuration.
3. Run `php artisan key:generate`
4. Run `php artisan migrate:fresh --seed`
5. Run `php artisan serve`
