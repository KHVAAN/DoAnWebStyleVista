<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mau extends Model
{
    use HasFactory;
    protected $table = 'mau';
    protected $fillable = [
        'tenmau',
        'trangthai',
    ];
}
