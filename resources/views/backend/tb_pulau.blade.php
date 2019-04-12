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

                        <div id="datatables-example_filter" class="datatables-filter">
                        <form action="{{ url('query') }}" method="GET" style="float :right">
                <div class="box-tools">
                  <div class="input-group input-group-sm" style="width: 150px; float: right; margin-top:-25px;">
                    <input type="text" name="q" class="form-control pull-right" placeholder="Search">

                    <div class="input-group-btn">  
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                  </form>
                </div>
                                         
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
                            <td style="overflow:hidden; text-overflow:ellipsis; display: -webkit-box;
                                      -webkit-box-orient: vertical;
                                      -webkit-line-clamp: 4;
                                      line-height: 1.8;">
                                {{$pulau->deskripsi}}</td>
                            <td>
                            <button class="edit-modal btn btn-primary" data-id="{{$pulau->id_pulau}}" data-title="{{$pulau->nama_pulau}}" data-description="{{$pulau->description}}" data-status="{{$pulau->status}}" data-luas="{{$pulau->luas}} Acress" data-nama_negara="{{$pulau->nama_negara}}" data-lokasi="{{$pulau->lokasi}}" data-harga="USD {{ number_format($pulau->harga, 2) }}">
                              <span class="glyphicon glyphicon-eye-open"></span> Info
                            </button>
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
                      <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
          <!-- /.box -->
                  </div>
                </div>
              </div>  
              </div>                 
          <!-- end: content -->
  <!-- end: Javascript -->
  @endsection
  </body>
  <script src="{{asset('/js/ajax-crud-modal-form.js')}}"></script>
    <script src="https://use.fontawesome.com/2c7a93b259.js"></script>
</html>