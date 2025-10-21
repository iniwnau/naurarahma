<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeluargaKk extends Model
{
    use HasFactory;

    protected $table = 'keluarga_kk';
    protected $primaryKey = 'kk_id';
    public $timestamps = true;

    protected $fillable = [
        'kk_nomor',
        'kepala_keluarga',
        'alamat',
        'rt',
        'rw',
    ];
}
