<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InquireModel extends Model
{
    // table yang akan digunakan
    public $table = 'tb_inquire';
    protected $fillable = ['user_id', 'id_pulau', 'total_orang', 'tanggal', 'pesan'];
    
    // mengambil data user dari model User
    // berdasarkan foreign key 'user_id'
    
    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function pulau() {
        return $this->belongsTo(PulauModel::class, 'id_pulau', 'id_pulau');
    }
}
