@extends('admin.master')
@section('title','Category')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Category</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Category</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Info boxes -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Create New Category</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{route('category.store')}}" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Category Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Category Title">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Category Description <span class="text-sm text-gray-400">(Optional)</span></label>
                                        <textarea name="description" id="" cols="30" rows="7" class="form-control" placeholder="Write a short Description in 125 words"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Select Status</label>
                                        <select class="custom-select" name="status">
                                            <option value="1">Published</option>
                                            <option value="0">Unpublished</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <section class="content">
                          <div class="container-fluid">
                            <div class="row">
                              <div class="col-12">
                                <div class="card card-primary">
                                  <div class="card-header">
                                    <h3 class="card-title">Category List</h3>
                                  </div>
                                  <!-- /.card-header -->
                                  <div class="card-body">
                                    <table id="example" class="table table-bordered table-hover">
                                      <thead>
                                      <tr>
                                        <th>Category Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      @foreach($categories as $category)
                                      <tr>
                                        <td>{{$category->name}}</td>
                                        <td class="{{$category->status==1? 'text-success':'text-danger'}}">{{$category->status == 1? 'Published': 'Unpublished'}}</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-primary"> <i class="fas fa-edit"></i></a>
                                            <a href="{{route('category.delete',['id'=>$category->id])}}" class="btn  btn-sm  btn-danger"> <i class="fas fa-trash"></i></a>
                                        </td>
                                      </tr>
                                      @endforeach
                                      </tbody>
                                    </table>
                                  </div>
                                  <!-- /.card-body -->
                                </div>
                                <!-- /.card -->

                                <!-- /.card -->
                              </div>
                              <!-- /.col -->
                            </div>
                            <!-- /.row -->
                          </div>
                     </section>


                    </div>
                </div>
                <!-- /.row -->
            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
