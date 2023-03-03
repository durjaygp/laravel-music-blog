@extends('admin.master')
@section('title','Blog List')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Blog</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Manage Blog</li>
                        </ol>
                        <a href="{{route('admin.blog')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Create Blog Post</a>
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
                    <div class="col-md-12">
                        <section class="content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card card-primary">
                                            <div class="card-header">
                                                <h3 class="card-title">Blog List</h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <table id="example" class="table table-bordered table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>Blog Image</th>
                                                        <th>Blog Title</th>
                                                        <th>Blog Category</th>
                                                        <th>Blog Description</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($blogs as $blog)
                                                        <tr>
                                                            <td><img src="{{asset($blog->image)}}" alt="" width="150px" height="100px"></td>
                                                            <td>{{$blog->title}}</td>
                                                            <td>{{$blog->category->name}}</td>
                                                            <td>{{Str::limit($blog->description, 150)}}</td>
                                                            <td class="{{$blog->status==1? 'text-success':'text-danger'}}">{{$blog->status == 1? 'Published': 'Unpublished'}}</td>
                                                            <td>
                                                                <a href="" class="btn btn-sm btn-primary"> <i class="fas fa-edit"></i></a>
                                                                <a href="" class="btn  btn-sm  btn-danger"> <i class="fas fa-trash"></i></a>
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
