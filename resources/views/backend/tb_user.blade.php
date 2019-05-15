<!DOCTYPE html>
<html lang="en">
 <body id="mimin" class="dashboard">
 @extends('layouts.master')
 @section('content')
          <!-- start: content -->
            <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Data Table Users</h3>
                        <p class="animated fadeInDown">
                          Tables <span class="fa-angle-right fa"></span> Data Table Users
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Data Table Users</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <br>
                      <form action="{{ url('keywords') }}">
                        <div class="input-group input-group-sm" style="width: 150px; float: right; margin-top:-25px;">
                            <input type="text" name="keywords" class="form-control" placeholder="Search users...">

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
                        <th>Kelamin</th>
                        <th>Pilihan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            @php
                            $no = 1;
                            @endphp
                            @foreach($user as $user)
                            <td>{{$no++}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->no_hp}}</td>
                            <td>{{$user->alamat}}</td>
                            <td>{{$user->kelamin}}</td>
                            <td>
                                <a href="infouser/{{ $user->id }}"  class="btn btn-sm btn-info" title="Info Data"><span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="hapus/{{ $user->id }}" class="btn btn-sm btn-danger"
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