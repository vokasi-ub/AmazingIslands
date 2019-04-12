<?php

namespace App\Http\Controllers;
use App\PulauModel;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('admin');
    }

    public function search(Request $request)
    {
        $query = $request->get('q');
        $pulau = PulauModel::where('nama_pulau', 'LIKE', '%' . $query . '%')->paginate(10);

        return view('backend/tb_pulau', compact('pulau', 'query'));
    }
}
