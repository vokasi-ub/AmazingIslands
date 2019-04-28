<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Database\Eloquent\Model;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('backend/tb_user', compact('user'));
    }

    public function hapus($id)
    {
        $pulau = User::where('id',$id)->first();
        $pulau->delete();
        return redirect('tb_user')->with(['message'=> 'Successfully deleted!!']);
    }

    public function paginate2(Request $request)
    {
        $query = $request->get('keywords');
        $user = User::where('name', 'LIKE', '%' . $query . '%')->paginate(10);

        return view('backend/tb_user', compact('user', 'query'));
    }
}
