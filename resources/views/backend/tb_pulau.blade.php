<!DOCTYPE html>
<html lang="en">
 <body id="mimin" class="dashboard">
@extends('layouts.master')
@section('content')
    	
          <!-- start: content -->
          <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Data Tables</h3>
                        <p class="animated fadeInDown">
                          Table <span class="fa-angle-right fa"></span> Data Tables
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Data Tables</h3></div>
                    <div class="panel-body">
                    <a href="/create"> + Tambah Data Pulau</a>
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                        <th>No</th>
                        <th>Nama Pulau</th>
                        <th>Gambar Pulau</th>
                        <th>Status</th>
                        <th>Luas</th>
                        <th>Negara</th>
                        <th>Lokasi</th>
                        <th>harga</th>
                        <th>Deskripsi</th>
                        <th>Pilihan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            @php
                            $no = 1;
                            @endphp
                            @foreach($pulau as $pulau)
                            <td>{{$no++}}</td>
                            <td>{{$pulau->nama_pulau}}</td>
                            <td><img src="{{asset('/image/'. $pulau->gambar_pulau)}}" width="100px" height="70px"></td>
                            <td>{{$pulau->status}}</td>
                            <td>{{$pulau->luas}} Acress</td>
                            <td>{{$pulau->nama_negara}}</td>
                            <td>{{$pulau->lokasi}}</td>
                            <td>USD {{ number_format($pulau->harga, 2) }}</td>
                            <td>{{$pulau->deskripsi}}</td>
                            <td>
                                <a href="edit/{{ $pulau->id_pulau }}" class=" btn btn-sm btn-primary">Edit</a>
                                &nbsp;
                                <a href="hapus/{{ $pulau->id_pulau }}" class="btn btn-sm btn-danger"
                                onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>  
              </div>                 
          <!-- end: content -->
  <!-- end: Javascript -->
  @endsection
  </body>
</html>