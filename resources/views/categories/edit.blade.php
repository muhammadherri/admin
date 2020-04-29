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
          <h3 class="card-title">Edit Categori</h3>
          
        </div>
        <div class="card-body">
            
			<div class="table-responsive">
                <form action="/categories/{{$categories->id}}/update"method="POST">
                {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Category Name</label>
                        <input value="{{$categories->CategoryName}}"name="CategoryName" maxlength="50" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
			</div>
        </div> 
    </div> 

                            
                                

</section>
@endsection