<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PulauModel extends Model
{
    protected $table = 'tb_pulau';
    protected $primaryKey = 'id_pulau';
    protected $fillable = ['nama_pulau', 'gambar_pulau', 'status', 'luas', 'nama_negara', 'lokasi', 'harga', 'deskripsi'];
}
