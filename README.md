<div align="center">
<h1>💻 Laptop - CRUD</h1>

<h4>This simple project is created for CRUD in Laravel, in case I forget how to do it hehe 😅</h4>

<img src="/img/preview.png" alt="Prev"/>

Made with :
<p>
    <a href="https://laravel.com/">
    <img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white"/></a>
    <a href="https://getbootstrap.com">
    <img src="https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white"/></a>
</p>
</div>

## 🔰 This Project

- [x] CRUD
- [x] Image Upload
- [ ] Auth
- [ ] Middleware

## 🔰 Step by step

1 - Instalasi laravel dengan

    composer create-project laravel/laravel nama_project

atau buka dokumentasinya langsung [Laravel](https://laravel.com/).

2 - Buat database baru di database local kalian.

3 - Buka `.env` dan ubah

    DB_DATABASE = nama database yang sudah dibuat
    DB_USERNAME = username database local kalian
    DB_PASSWORD = password database local kalian

Dan jangan lupa ganti

    FILESYSTEM_DISK = local 
    menjadi
    FILESYSTEM_DISK = public
karna kita akan mengupload gambar

4 - Buat `Model`, `Controller` & `Migration` secara bersamaan dengan di terminal dengan mengetik ini

    php artisan make:Model nama_model -rm

5 - Di `Model` buat `$fillable` atau `$guarded` dengan visibilitas `protected` seperti ini :

    protected $fillable = [
        //kita menulis apa saja yang mau kita isi
    ];

    protected $guarded = [
        //kita menulis apa saja yang TIDAK mau kita isi
    ];
6 - Di `Migration`  tentukan apa saja yang akan diinput beserta tipe datanya (untuk `image` gunakan tipe data `string` atau `text`), seperti contoh ini :

    Schema::create('laptops', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->bigInteger('price');
            $table->text('image');
            $table->timestamps();
        });

7 - Untuk menghubungkan folder storage dengan public/app/public di terminal ketik

    php artisan storage:link 

8 - Lakukan migrate dengan

    php artisan migrate

9 - Lalu coba jalankan project dengan

    php artisan serve

10 - Mulai templating blade dengan membuat `template.blade.php` dengan menambahkan

    @yield(nama_yield) 
pada tag body, untuk project ini saya menggunakan [Bootsrap](https://getbootstrap.com/) sebagai template utama.

11 - Lalu buatlah folder sesuai dengan nama `Controller` yang sudah dibuat, lalu buat `index.blade.php` dengan tambahkan `@extends('template')` dan `@section('nama_yield')` di awal dan `@endsection` di akhir seperti contoh berikut :

    @extends('template')

    @section('content')
      // code kalian
    @endsection

12 - Di folder `routes` di `web.php` buat route sesuai dengan `Controller` yang sudah dibuat, bisa menggunakan

    Route::resource('/nama_route', nama_controller::class)
    atau 
    Route::post('/nama_route',[nama_controller::class,'nama_method']); 

13 - Pada file controller isi setiap method yang sudah ada seperti contoller yang ada di file `LaptopController.php` pada project ini (Ubah code pada controller jika laravel sudah update dan ada perubahan syntax)

## 🔰 Don't forget

1 - Untuk menampilkan data di `index.blade.php` bisa menggunakan `@foreach` dan panggil variable yang sudah kalian buat di controller method `index`, seperti contoh ini :

Di Controller

    public function index()
    {
        $laptop = Laptop::all();
        return view('laptop.index', compact('laptop'));
    }
Di Blade

    @foreach ($laptops as $laptop)
        // code kalian
    @endforeach

2 - Ketika `Create` data, gunakan `Method = 'POST'` di form dan `@csrf` dibawah form, seperti ini :

    <form class="container" action="" method="POST" enctype="multipart/form-data">
        @csrf
        // code kalian
    </form>

3 - Ketika `Update` data, gunakan `Method = 'POST'` di form dan `@method('PUT')` `@csrf` dibawah form , seperti ini :

    <form class="container" action="" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        // code kalian
    </form>

4 - Ketika `Create` & `Update` pastikan pada tag input ada `name='....'` dan sudah sesuai dengan nama request di `Controller` nya, seperti ini :

    <input type="text" name="name" id="name" value="{{ old('name') ?? $laptop->name }}">

5 - Ketika `Delete` data, gunakan `Method = 'POST'` di form dan `@method('DELETE')` `@csrf` dibawah form, seperti ini

    <form action="" method="POST">
        @csrf
        @method('DELETE')
        // code kalian
    </form>

6 - karna akan upload gambar pastikan ada `enctype="multipart/form-data"` di form, seperti ini :

    <form class="container" action="" method="POST" enctype="multipart/form-data">
        @csrf
        // code kalian
    </form>

7 - Ketika upload gambar pastikan gambar terduplikat sendiri di file `public/storage/nama_folder` kalian

## 🔰 How to use this repo

1 - Clone this repository

    git clone https://github.com/rodhisz/Laptop-CRUD.git
2 - Run

    composer install
3 - Run
for macOS or linux

    cp .env.example .env

for windows

    copy .env.example .env

4 - Open your .env file and change the database name (`DB_DATABASE`) to whatever you have, username (`DB_USERNAME`) and password (`DB_PASSWORD`) field correspond to your configuration.

5 - Run

    php artisan key:generate
6 - Run

    php artisan serve

## 🔥 Thank You

### Semoga Bermanfaat 🔥

Repo dan step by step ini teruntuk murid murid kelas XI RPL saya di `SMK IDN Boarding School Bogor` biar kalau lupa tinggal buka repo ini yaa hehe. Sukses yaa temen temen

<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
