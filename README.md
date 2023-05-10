# Laptop - CRUD

This simple project is created for CRUD in Laravel, in case I forget how to do it hehe

### 🔰 In This Project 🔰

- [x] CRUD
- [x] Image Upload
- [ ] Auth
- [ ] Middleware

### 🔰 Step by step 🔰

## 1. Instalasi laravel dengan 

    composer create-project laravel/laravel nama_project

1. Instalasi laravel dengan 

    composer create-project laravel/laravel nama_project

atau buka dokumentasinya langsung [Laravel](https://laravel.com/)

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

# Project Title

One Paragraph of the project description

Initially appeared on
[gist](https://gist.github.com/PurpleBooth/109311bb0361f32d87a2). But the page cannot open anymore so that is why I have moved it here.

## Getting Started

These instructions will give you a copy of the project up and running on
your local machine for development and testing purposes. See deployment
for notes on deploying the project on a live system.

### Prerequisites

Requirements for the software and other tools to build, test and push 
- [Example 1](https://www.example.com)
- [Example 2](https://www.example.com)

### Installing

A step by step series of examples that tell you how to get a development
environment running

Say what the step will be

    Give the example

And repeat

until finished

End with an example of getting some data out of the system or using it
for a little demo

## Running the tests

Explain how to run the automated tests for this system

### Sample Tests

Explain what these tests test and why

    Give an example

### Style test

Checks if the best practices and the right coding style has been used.

    Give an example

## Deployment

Add additional notes to deploy this on a live system

## Built With

  - [Contributor Covenant](https://www.contributor-covenant.org/) - Used
    for the Code of Conduct
  - [Creative Commons](https://creativecommons.org/) - Used to choose
    the license

## Contributing

Please read [CONTRIBUTING.md](CONTRIBUTING.md) for details on our code
of conduct, and the process for submitting pull requests to us.

## Versioning

We use [Semantic Versioning](http://semver.org/) for versioning. For the versions
available, see the [tags on this
repository](https://github.com/PurpleBooth/a-good-readme-template/tags).

## Authors

  - **Billie Thompson** - *Provided README Template* -
    [PurpleBooth](https://github.com/PurpleBooth)

See also the list of
[contributors](https://github.com/PurpleBooth/a-good-readme-template/contributors)
who participated in this project.

## License

This project is licensed under the [CC0 1.0 Universal](LICENSE.md)
Creative Commons License - see the [LICENSE.md](LICENSE.md) file for
details

## Acknowledgments

  - Hat tip to anyone whose code is used
  - Inspiration
  - etc

