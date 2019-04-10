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
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No HP</th>
                        <th>Alamat</th>
                        <th>Total Orang</th>
                        <th>Tanggal Penyewaan</th>
                        <th>Pesan</th>
                        <th>Pilihan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            @php
                            $no = 1;
                            @endphp
                            @foreach($inquire as $inquire)
                            <td>{{$no++}}</td>
                            <td>{{$inquire->user->name}}</td>
                            <td>{{$inquire->user->email}}</td>
                            <td>{{$inquire->user->no_hp}}</td>
                            <td>{{$inquire->user->alamat}}</td>
                            <td>{{$inquire->total_orang}}</td>
                            <td>{{$inquire->tanggal}}</td>
                            <td>{{$inquire->pesan}}</td>
                            <td>
                                <a href="edit/{{ $inquire->id_inquire }}" class=" btn btn-sm btn-primary">Edit</a>
                                &nbsp;
                                <a href="hapus/{{ $inquire->id_pulau }}" class="btn btn-sm btn-danger"
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
@endsection
  </body>
</html>