<!DOCTYPE html>
<html lang="en">
 <body id="mimin" class="dashboard">
 @extends('layouts.master')
 @section('content')
          <!-- start: content -->
            <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Data Table Inquire</h3>
                        <p class="animated fadeInDown">
                          Table <span class="fa-angle-right fa"></span> Data Table Inquire
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Data Table Inquire</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <br>
                      <form action="{{ url('keyword') }}">
                        <div class="input-group input-group-sm" style="width: 150px; float: right; margin-top:-25px;">
                            <input type="text" name="keyword" class="form-control" placeholder="Search inquire...">

                          <div class="input-group-btn">
                              <button type="submit" class="btn btn-primary">
                              <i class="fa fa-search"></i>
                              </button>
                          </div>
                        </div>
                      </form>
                      <thead>
                        <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No HP</th>
                        <th>Alamat</th>
                        <th>Nama Pulau</th>
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
                            <td>{{$inquire->user['name']}}</td>
                            <td>{{$inquire->user['email']}}</td>
                            <td>{{$inquire->user['no_hp']}}</td>
                            <td>{{$inquire->user['alamat']}}</td>
                            <td>{{$inquire->pulau['nama_pulau']}}</td>
                            <td>{{$inquire->total_orang}}</td>
                            <td>{{$inquire->tanggal}}</td>
                            <td>{{$inquire->pesan}}</td>
                            <td>
                            <a href="infoinquire/{{ $inquire->user_id }}"  class="btn btn-sm btn-info modalMd" title="Info Data"><span class="glyphicon glyphicon-eye-open"></span></a>
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