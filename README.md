# Laptop - CRUD

This simple project is created for CRUD in Laravel, in case I forget how to do it hehe

=============================

## 🔰 In This Project 🔰

- [x] CRUD
- [x] Image Upload
- [ ] Auth
- [ ] Middleware

=============================

## 🔰 Step by step 🔰

1. Instalasi laravel dengan 

    composer create-project laravel/laravel nama_project

atau buka dokumentasinya langsung [laravel](https://laravel.com/)

2. Buat database baru di database local kalian
3. Buka `.env` dan ubah nama `DB_DATABASE` dengan nama database yang sudah dibuat, lalu sesuaikan `DB_USERNAME`, dan `DB_PASSWORD` dengan apapun yang kalian pakai
4. Masih di `.env` ganti `FILESYSTEM_DISK=local` menjadi `FILESYSTEM_DISK=public` karna kita akan mengupload gambar
5. Buat `Model`, `Controller`, `Migration` bersamaan dengan `php artisan make:Model nama_model -rm` di terminal
6. Di `Model` buat `$fillable` atau `$guarded` dengan visibilitas `protected`
7. Di `Migration`  tentukan apa saja yang akan diinput beserta tipe datanya (untuk `image` gunakan tipe data `string` atau `text`)
8. Lakukan `php artisan storage:link` untuk menghubungkan folder storage dengan public/app/public
8. Lakukan migrate dengan `php artisan migrate`
9. Mulai templating blade dengan membuat `Template.blade.php` dengan tambahkan `@yield(nama_yield)`
10. Lalu buatlah folder sesuai dengan nama `Controller` yang sudah dibuat, lalu buat `index.blade.php` dengan tambahkan `@extends('Template')` dan `@section('nama_yield')` di awal dan `@endsection` di akhir
11. Di folder `routes` di `web.php` buat route sesuai dengan `Controller` yang sudah dibuat, bisa dengan `Route::resource('/nama_route', nama_controller::class)` atau `Route::post('/nama_route', [nama_controller::class, 'nama_method']);`
12. Pada file controller isi tiap method yang sudah ada seperti contoller yang ada di file `LaptopController.php` pada project ini (Ubah code pada controller jika laravel sudah update dan ada perubahan syntax)

=============================

<h4>🔰 Don't forget 🔰</h4>

1. Untuk menampilkan data di `index.blade.php` bisa menggunakan `@foreach` atau `@forelse` dan panggil variable yang sudah kalian buat di controller method `index`
2. Ketika `Create` data, gunakan `Method = 'POST'` di form dan `@csrf` dibawah form
3. Ketika `Update` data, gunakan `Method = 'POST'` di form dan `@method('PUT')` `@csrf` dibawah form
4. Ketika `Create` & `Update` pastikan pada tag input ada `name='....'` dan sudah sesuai dengan nama request di `Controller` nya
5. Ketika `Delete` data, gunakan `Method = 'POST'` di form dan `@method('DELETE')` `@csrf` dibawah form
6. karna akan upload gambar pastikan ada `enctype="multipart/form-data"` di form
7. Ketika upload gambar pastikan gambar terduplikat sendiri di file `public/storage/nama_folder` kalian

=============================

<h4>🔰 How to use this repo 🔰</h4>

1. Clone this repository
2. Run `composer install`
3. Run `cp .env.example .env` for terminal or linux / Run `copy .env.example .env` for windows
4. Open your .env file and change the database name (`DB_DATABASE`) to whatever you have, username (`DB_USERNAME`) and password (`DB_PASSWORD`) field correspond to your configuration.
3. Run `php artisan key:generate`
5. Run `php artisan serve`

=============================
<h4>🔥 Terima Kasih, Semoga Bermanfaat 🔥</h4>

Repo dan step by step ini teruntuk murid murid saya di `SMK IDN Boarding School Bogor` biar kalau lupa tinggal buka repo ini yaa hehe. Sukses yaa temen temen

<h4>💡 Preview 💡</h4>
<img src="/public/preview" alt="Prev"/>
