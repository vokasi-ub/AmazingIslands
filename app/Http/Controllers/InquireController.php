<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InquireModel;
use App\User;
use Illuminate\Database\Eloquent\Model;

class InquireController extends Controller
{
 
    public function index() {
       
        $inquire = InquireModel::all();
        return view('backend/tb_inquire', compact('inquire'));
        
       
        $this->layout->content = $view;
    }

    public function hapus($id)
    {
        $inquire = InquireModel::where('id_inquire',$id)->first();
        if ($inquire != null) {
            $inquire->delete();
            return redirect('tb_inquire')->with(['message'=> 'Successfully deleted!!']);
        }
        return redirect('tb_inquire')->with(['message'=> 'Wrong ID!!']);
    }

    // public function paginate(Request $request)
    // {
    //     $query = $request->get('keyword');
    //     $inquire = User::when($request->keyword, function ($query) use ($request) {
    //         $query->where('email', 'like', "%{$request->keyword}%")
    //             ->orWhere('name', 'like', "%{$request->keyword}%");
    //     })->get();

    //     return view('backend/tb_inquire', compact('inquire', 'query'));
    // }

    public function paginate(Request $request)
    {
        $query = $request->get('keyword');
        $inquire = InquireModel::where('user_id', 'LIKE', '%' . $query . '%')->paginate(10);

        return view('backend/tb_inquire', compact('inquire', 'query'));
    }

}
