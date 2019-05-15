@extends('layouts.master')


@section('content')
<div class="row">
 <div class="col-lg-12">
  <table class="table table-bordered table-hover">
   <thead>
    <tr>
    @foreach($pulau as $pulau)
     <th>Nama Pulau</th>
     <td>{{$pulau->nama_pulau}}</td>
    </tr>
    <tr>
     <th>Judul</th>
     <td><img src="{{asset('/image/'. $pulau->gambar_pulau)}}" width="100px" height="70px"></td>
    </tr>
    <tr>
     <th>Status</th>
     <td>{{$pulau->status}}</td>
    </tr>
    <tr>
     <th>Luas</th>
     <td>{{$pulau->luas}} Acress</td>
    </tr>
    <tr>
     <th>Negara</th>
     <td>{{$pulau->nama_negara}}</td>
    </tr>
    <tr>
     <th>Lokasi</th>
     <td>{{$pulau->lokasi}}</td>
    </tr>
    <tr>
     <th>Harga</th>
     <td>USD {{ number_format($pulau->harga, 2) }}</td>
    </tr>
    @endforeach
   </thead>
  </table>
 </div>
</div>
@endsection