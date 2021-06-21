@extends('layouts.back-end')
@section('title')
Daftar Booking
@endsection
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Booking</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Daftar Booking</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="box-body table-responsive no-padding">
              <table id="tbl" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Name</th>       
                  <th>email</th>
                  <th>action</th>
                </tr>
                </thead>
                <tbody>
                   @foreach ($booking as $item)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$item->name}}</td>
                  <td>{{$item->email}}</td>
                    <td>
                     <a class="btn btn-info btn-sm" href="{{url("admin/booking/$item->id")}}" style="background:blue;margin-top: 10px"  target="_blank"><i class="fas fa-eye"></i> View</a>
                    <a class="btn btn-danger btn-sm delete" href="{{url("delete-produk/$item->id")}}" onclick="return confirm('Anda Yakin akan menghapus data ini ?')" style="margin-top: 10px" id="{{$item->id}}"><i class="far fa-trash-alt" ></i> Delete</a>
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
    </section>
</div>
@endsection
@section('script')
@include('admin.include.script')

@if(Session::has('deleteproduk'))
<script>
    Swal.fire({
    position: 'top-end',
    icon: 'success',
    title: 'Data Anda Sudah terhapus',
    showConfirmButton: false,
    timer: 1500
})
</script>
@endif
    
@endsection