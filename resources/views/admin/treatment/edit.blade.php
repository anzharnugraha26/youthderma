@extends('layouts.back-end')
@section('title')
   Update Product
@endsection
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Create Product</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{url("/")}}">Home</a></li>
                <li class="breadcrumb-item active">update Product</li>
              </ol>
            </div>
          </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                    <h3>Input Product</h3>
                </div>
                <div class="card-body">
                    <form action="{{url('admin/treatment/update/'.$t->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                      
                      <div class="col-md-12">

                        <input type="hidden" value="{{$t->image}}" name="image_old">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" name="name" value="{{$t->name}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Caption</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter ML" name="caption" value="{{$t->caption}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Image</label>
                            <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="image">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Detail</label>
                          <textarea class="textarea" placeholder="Place some text here" name="detail"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{!!$t->detail!!}</textarea>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>

                  </div>
              </div>
            </div>
        </div>
    </section>
</div>
@endsection