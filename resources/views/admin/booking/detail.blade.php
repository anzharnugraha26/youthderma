@extends('layouts.back-end')
@section('title')
  Detail Booking
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
              <li class="breadcrumb-item active">Daftar Transaksi</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
    <div class="row">
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <div class="row mb-3">
                <div class="col">
                <h4 class="card-title">Detail Booking {{ $booking->name }}</h4>
                </div>
                <div class="col text-right">
                <a href="javascript:void(0)" onclick="window.history.back()" class="btn btn-primary">Kembali</a>
                </div>
              </div>
              <hr>
             <div class="row">
             <div class="col-md-7">
              <table>
                  <tr>
                      <td>Name</td>
                      <td>:</td>
                      <td  class="p-2">{{ $booking->name }}</td>
                  </tr>
                  <tr>
                      <td>Email</td>
                      <td>:</td>
                      <td  class="p-2">{{ $booking->email }}</td>
                  </tr>
                 
                  <tr>
                      <td>Phone Number</td>
                      <td>:</td>
                      <td  class="p-2">{{ $booking->phone }}</td>
                  </tr>
                  
                  <tr>
                      <td>Threatment</td>
                      <td>:</td>
                      <td  class="p-2">{{ $booking->threatment }}</td>
                  </tr>
                  <tr>
                      <td>Doctor</td>
                      <td>:</td>
                      <td  class="p-2">{{ $booking->doctor }} </td>
                  </tr>
                  <tr>
                      <td>Date</td>
                      <td>:</td>
                      <td  class="p-2">{{ $booking->date}}</td>
                  </tr>

                  
                  
                </table>
              </div>
              <div class="col-md-5">
              
              </div>
             </div>
            </div>
          </div>
        </div>
      </div>




    </section>
</div>

@endsection