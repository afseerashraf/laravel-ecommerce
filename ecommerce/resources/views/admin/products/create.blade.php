
@extends('admin.layout.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('adminproduct.save')}}" method="POST"> 
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" class="form-control" id="pname" placeholder="product name" name="product_name">
                  </div>
                  <div class="form-group">
                    <label for="price">price</label>
                    <input type="text" class="form-control" id="price" placeholder="price" name="price">
                  </div>

                  <div class="form-group">
                  <label for="category">category</label>
                    <select name="category" class="form-controll">
                        <option value="">select an option</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}} </option>
                        @endforeach

                    </select>
                  </div>
                  
                  
                  
                  <div class="form-group">
                    
                    <br>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="img">
                        <label class="custom-file-label" for="exampleInputFile">image</label>
                      </div>


                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                 <div class="form-group">
                     <label for="status">Status</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="active" name="status" value="1">
                        <label class="form-check-label" for="active">Active</label>
                     </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="inactive" name="status" value="0">
                        <label class="form-check-label" for="inactive">Inactive</label>
                    </div>
                 </div>

                  
                 <div class="form-group">
                    <label for="status">Favorite:</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="yes" name="favorite" value="Yes">
                     <label class="form-check-label" for="yes">Yes</label>
               </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="no" name="favorite" value="No">
                      <label class="form-check-label" for="no">No</label>
                </div>
                </div>






                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                 <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div>
           

          </div>
         
  @endsection
  