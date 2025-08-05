<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class siswa extends Model
{
    //
    protected $table = 'datasiswa';
    protected $fillable = ['nama', 'bb', 'tb'];
    use HasFactory;
}
