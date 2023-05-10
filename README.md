<h1>Laptop - CRUD</h1>

This simple project is created for CRUD in Laravel, in case I forget how to do it hehe

<h4>In This Project</h4>

- [√] CRUD
- [√] Image Upload
- [x] Auth
- [x] Middleware

<h4>Step by step</h4>

1. Instalasi laravel dengan `composer create-project laravel/laravel nama_project`
2. Buat database baru di xampp
3. Buka `.env` dan ubah nama `DB_DATABASE` dengan nama database yang sudah dibuat, lalu sesuaikan `DB_USERNAME`, dan `DB_PASSWORD` dengan apapun yang kalian pakai
4. Masih di `.env` ganti `FILESYSTEM_DISK=local` menjadi `FILESYSTEM_DISK=public` karna kita akan mengupload gambar
5. Buat `Model`, `Controller`, `Migration` bersamaan dengan `php artisan make:Model nama_model -rm` di terminal
6. Di `Model` buat `$fillable` atau `$guarded` dengan visibilitas `protected`
7. Di `Migration`  tentukan apa saja yang akan diinput beserta tipe datanya (untuk `image` gunakan tipe data `string` atau `text`)
8. Lakukan migrate dengan `php artisan migrate`
9. Mulai templating blade dengan membuat `Template.blade.php` dengan tambahkan `@yield(nama_yield)`
10. Lalu buatlah folder sesuai dengan nama `Controller` yang sudah dibuat, lalu buat `index.blade.php` dengan tambahkan `@extends('Template')` dan `@section('nama_yield')` di awal dan `@endsection` di akhir
11. Di folder `routes` di `web.php` buat route sesuai dengan `Controller` yang sudah dibuat, bisa dengan `Route::resource('/nama_route', nama_controller::class)` atau `Route::post('/nama_route', [nama_controller::class, 'nama_method']);`
12. Pada file controller isi tiap method yang sudah ada seperti contoller yang ada di file `LaptopController.php` pada project ini (Ubah code pada controller jika laravel sudah update dan ada perubahan syntax)


1. Clone this repository
2. Run `composer install`
3. Run `cp .env.example .env` for terminal or linux / Run `copy .env.example .env` for windows
4. Open your .env file and change the database name (`DB_DATABASE`) to whatever you have, username (`DB_USERNAME`) and password (`DB_PASSWORD`) field correspond to your configuration.
3. Run `php artisan key:generate`
4. Run `php artisan migrate:fresh --seed`
5. Run `php artisan serve`
