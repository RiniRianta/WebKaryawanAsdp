<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = 'karyawan'; // Nama tabel di database
    protected $fillable = ['nik', 'nama', 'alamat', 'no_hp', 'jenis_kelamin', 'hobi'];
}
