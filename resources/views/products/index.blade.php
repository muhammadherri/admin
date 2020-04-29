 @extends('layout.master')
 @section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    
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
          <h3 class="card-title">Products</h3>
          
        </div>
        <div class="card-body">
                    <div align="right">
                    <button type="button" class="btn btn-primary my-3" data-toggle="modal" data-target="#staticBackdrop">
                         Button Add
                     </button> 
                     </div>
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
                               
                                </tbody>
                                </table>
								</div>
                               
                                <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                                </nav>
                            
                                
<!-- Modal-->
                <div class="modal fade " id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Team Member</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                            <div class="modal-body">
                                <form method="POST">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input name="Name" maxlength="50" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Department</label>
                                        <input name="Department"  maxlength="50" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Position</label>
                                        <input name="Position"  maxlength="50" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input name="Email"  maxlength="50" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                       
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Phone Numbers</label>
                                        <input name="Phone Numbers"  maxlength="50" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                       
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        </div>
                        </div>
                    </div>
                </div> 
    </div>
</div>
</section>
@endsection