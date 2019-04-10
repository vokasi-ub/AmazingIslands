<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InquireModel extends Model
{
    // table yang akan digunakan
    public $table = 'tb_inquire';
    
    // mengambil data user dari model User
    // berdasarkan foreign key 'user_id'
    
    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
