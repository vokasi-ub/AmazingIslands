<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InquireModel;
use Illuminate\Database\Eloquent\Model;

class InquireController extends Controller
{
    // // layout dengan menggunakan blade
    // public $layout  = 'layout';
    // public $title   = 'Inquire';
 
    public function index() {
        // $this->layout->title = $this->title;
        /* 
        * menggunakan view yang ada 
        * pada direktori views/article/index
        */
        $inquire = InquireModel::all();
        return view('backend/tb_inquire', compact('inquire'));
        
        // query ini digunakan untuk mengambil semua data dari table article        
        
 
        // query ini digunakan untuk menghitung total data dari table article
        // $view->count = InquireModel::all()->count();
 
        // render semua konten view kedalam layout
        $this->layout->content = $view;
    }

}
