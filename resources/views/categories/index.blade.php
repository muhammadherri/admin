@extends('layout.master')
 @section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                @if(session('sukses'))
                    <div class="alert alert-success" role="alert">
                    {{session('sukses')}}
                    </div>  
                @endif
                </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Blank Page</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <!-- Support Request -->
    <div class="card card-secondary">
        <div class="card-header">
          <h3 class="card-title">Categori</h3>
          
        </div>
        <div class="card-body">
            <div align="right">
                <button type="button" class="btn btn-primary my-3" data-toggle="modal" data-target="#staticBackdrop">
                         Button Add
                </button> 
            </div>
            <div class="col-md-4">
                <form action="/search" method="get">
                    <div class="input-group">
                        <input type="search" name="search" class="form-control">
                        <span class="input-group-prepend">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </span>
                    </div>
                </form>
            </div>
            </br>
			<div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">CategoryName</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $ctg)
                            <tr>
                                <td>{{$ctg -> id}}</td>
                                <td>{{$ctg -> CategoryName}}</td>
                                <td>
                                    <a href="/categories/{{$ctg->id}}/edit" class="btn btn-outline-success">Edit</a>
                                    <a href="/categories/{{$ctg->id}}/destroy" class="btn btn-outline-danger">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
			</div>
                               
            {{$categories->links()}}
        </div> 
    </div> 
    
                            
                                
<!-- Modal Team Members-->
                <div class="modal fade " id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Tambah Categori</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                            <div class="modal-body">
                                <form action="/categories/create"method="POST">
                                {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Category Name</label>
                                        <input name="CategoryName" maxlength="50" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            </div>
                    </div>
                </div>

                
                
</section>
@endsection