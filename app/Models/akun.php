<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class akun extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "akun";
    protected $fillable = ['kode_akun', 'nama_akun', 'deskripsi', 'tipe_akun', 'kategori_akun', 'level_akun', 'created_at'];
}
