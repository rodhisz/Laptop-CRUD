<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    use HasFactory;

    // $fillable => kita menulis apa saja yang mau kita isi

    // $guarded => kia menulis apa saja yang TIDAK mau kita isi

    // protected $fillable = [
    //     'name',
    //     'price',
    //     'image'
    // ];

    protected $guarded = [
        //
    ];
}
