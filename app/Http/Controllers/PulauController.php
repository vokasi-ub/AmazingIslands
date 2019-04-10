<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PulauModel;
use Illuminate\Database\Eloquent\Model;

class PulauController extends Controller
{
    public function index()
    {
        $pulau = PulauModel::all();
        return view('backend/tb_pulau', compact('pulau'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crudPulau/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // upload image
        if ($request->hasFile('gambar_pulau')) 
        {
            foreach($request->file('gambar_pulau') as $file)
            {
                $gambar=$file->getClientOriginalName();
                $file->move(public_path().'/image/', $gambar);
                $data = $gambar;
            }
        }
        // insert data
        $pulau = PulauModel::create([
            'nama_pulau' => $request->input('nama_pulau'),
            'gambar_pulau' => $gambar,
            'status' => $request->input('status'),
            'luas' => $request->input('luas'),
            'nama_negara' => $request->input('nama_negara'),
            'lokasi' => $request->input('lokasi'),
            'harga' => $request->input('harga'),
            'deskripsi' => $request->input('deskripsi')
        ]);
    
        $pulau->save();
        return redirect('/tb_pulau');
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pulau = PulauModel::where('id_pulau',$id)->get();
        return view('crudPulau/edit',compact('pulau'));
    }
    
    public function update(Request $request, $id)
    {
        $data = $this->getRequest($request);
        $pulau = PulauModel::find($id);
        $pulau->update($data);
        return redirect('tb_pulau');
        }

    public function getRequest(Request $request)
    {
        $gambar = $request->file('gambar_pulau');
        if (empty($gambar)) return $request->all();
        $filename = $gambar->getClientOriginalName();
        $destination = base_path() . '/image/';
        $gambar->move($destination, $filename);

        $data = $request->all();
        $data['gambar_pulau'] = $filename;

        return $data;
    }

    public function hapus($id)
    {
        $pulau = PulauModel::where('id_pulau',$id)->first();
        $pulau->delete();
        return redirect('tb_pulau')->with('alert-success','Data berhasi dihapus!');
    }

    public function search(Request $request)
    {
        $query = $request->get('q');
        $pulau = PulauModel::where('nama_pulau', 'LIKE', '%' . $query . '%')->paginate(10);

        return view('tb_pulau', compact('pulau', 'query'));
    }
}
