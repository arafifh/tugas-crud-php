<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    // kolom yg bisa diisi
    protected $fillable = [
        'name',
        'email',
        'address',
        'job_position',
        'gender',
        'join_date'
    ];
}
