<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PulauModel;
use App\InquireModel;
use Illuminate\Database\Eloquent\Model;

class IndexController extends Controller
{
    public function index(){
        $rangyai = PulauModel::where('id_pulau', 1)->get();
        $es = PulauModel::where('id_pulau', 2)->get();
        $little = PulauModel::where('id_pulau', 3)->get();
        $lambay = PulauModel::where('id_pulau', 4)->get();
        $macan = PulauModel::where('id_pulau', 5)->get();
        $cave = PulauModel::where('id_pulau', 6)->get();
        return view('/index', compact('rangyai','es','little','lambay','macan','cave'));
    }

    public function rangyai(){
        $rangyai = PulauModel::where('id_pulau', 1)->get();
        $es = PulauModel::where('id_pulau', 2)->get();
        $little = PulauModel::where('id_pulau', 3)->get();
        $lambay = PulauModel::where('id_pulau', 4)->get();
        $macan = PulauModel::where('id_pulau', 5)->get();
        $cave = PulauModel::where('id_pulau', 6)->get();
        return view('frontend/rangyai', compact('rangyai','es','little','lambay','macan','cave'));
    }

    public function eshpabekong(){
        $rangyai = PulauModel::where('id_pulau', 1)->get();
        $es = PulauModel::where('id_pulau', 2)->get();
        $little = PulauModel::where('id_pulau', 3)->get();
        $lambay = PulauModel::where('id_pulau', 4)->get();
        $macan = PulauModel::where('id_pulau', 5)->get();
        $cave = PulauModel::where('id_pulau', 6)->get();
        return view('frontend/eshpabekong', compact('rangyai','es','little','lambay','macan','cave'));
    }

    public function little(){
        $rangyai = PulauModel::where('id_pulau', 1)->get();
        $es = PulauModel::where('id_pulau', 2)->get();
        $little = PulauModel::where('id_pulau', 3)->get();
        $lambay = PulauModel::where('id_pulau', 4)->get();
        $macan = PulauModel::where('id_pulau', 5)->get();
        $cave = PulauModel::where('id_pulau', 6)->get();
        return view('frontend/little', compact('rangyai','es','little','lambay','macan','cave'));
    }

    public function lambay(){
        $rangyai = PulauModel::where('id_pulau', 1)->get();
        $es = PulauModel::where('id_pulau', 2)->get();
        $little = PulauModel::where('id_pulau', 3)->get();
        $lambay = PulauModel::where('id_pulau', 4)->get();
        $macan = PulauModel::where('id_pulau', 5)->get();
        $cave = PulauModel::where('id_pulau', 6)->get();
        return view('frontend/lambay', compact('rangyai','es','little','lambay','macan','cave'));
    }

    public function macan(){
        $rangyai = PulauModel::where('id_pulau', 1)->get();
        $es = PulauModel::where('id_pulau', 2)->get();
        $little = PulauModel::where('id_pulau', 3)->get();
        $lambay = PulauModel::where('id_pulau', 4)->get();
        $macan = PulauModel::where('id_pulau', 5)->get();
        $cave = PulauModel::where('id_pulau', 6)->get();
        return view('frontend/macan', compact('rangyai','es','little','lambay','macan','cave'));
    }

    public function cave(){
        $rangyai = PulauModel::where('id_pulau', 1)->get();
        $es = PulauModel::where('id_pulau', 2)->get();
        $little = PulauModel::where('id_pulau', 3)->get();
        $lambay = PulauModel::where('id_pulau', 4)->get();
        $macan = PulauModel::where('id_pulau', 5)->get();
        $cave = PulauModel::where('id_pulau', 6)->get();
        return view('frontend/cave', compact('rangyai','es','little','lambay','macan','cave'));
    }

    public function gallery(){
        $rangyai = PulauModel::where('id_pulau', 1)->get();
        $es = PulauModel::where('id_pulau', 2)->get();
        $little = PulauModel::where('id_pulau', 3)->get();
        $lambay = PulauModel::where('id_pulau', 4)->get();
        $macan = PulauModel::where('id_pulau', 5)->get();
        $cave = PulauModel::where('id_pulau', 6)->get();
        return view('frontend/gallery', compact('rangyai','es','little','lambay','macan','cave'));
    }

    public function contact(){
        return view('frontend/contact');
    }


    public function storeInquire(Request $request){
        // insert data
        $inquire = InquireModel::create([
            'user_id' => $request->input('user_id'),
            'id_pulau' => $request->input('id_pulau'),
            'total_orang' => $request->input('total_orang'),
            'tanggal' => $request->input('tanggal'),
            'pesan' => $request->input('pesan')
        ]);
    
        $inquire->save();
        return redirect('/');
    }
}
