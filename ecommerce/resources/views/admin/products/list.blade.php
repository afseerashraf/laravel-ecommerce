@extends('admin.layout.master')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
            <h1>Products</h1>
            <div class="text-right">
            <div class="card-header">
              <a href="{{route ('adminproduct.create')}}" class="btn btn-primary">Add product</a>
            </div>
            </div>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Products <!--({{$products->total()}})--></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered ">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Status</th>
                      <th>is_favourite</th>



                      <th style="width: 40px">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($products as $product)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$product->name}}</td>
                      <td>{{number_format($product->price,2)}}</td>
                      <td>{{$product->status}}</td>
                      <td>$if($product->is_favourite == 1)YES $else NO</td>
                      <td>
                        <a href="" class="btn btn-primary btn-sm">Edit</a>
                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                      
                      </td>
                      </tr>
                      @endforeach
                  </tbody>
                </table>
                      </div>
                      <!--<div class="card-footer clearfix">
                        {{$products->links()}}
                      </div>-->
            </div>
            

           
    </section>
  @endsection

                    




                   
                  
                    
                       
                  
              