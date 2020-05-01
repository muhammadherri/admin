@extends('layout.master')
 @section('content')
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
        <h3 class="card-title">Master Activity</h3>
      </div>
        <div class="card-body">
          
        
        <form>
          <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Workflow Code</label>
                    <input type="text" maxlength="50" class="form-control" placeholder="ReadOnly"id="inputEmail4"readonly>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Workflow Name</label>
                    <input type="text"  class="form-control" placeholder="ReadOnly" id="inputEmail4"readonly>
                </div>
            </div>
             
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Activity Name</label>
                      <input type="text" class="form-control" id="inputEmail4">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Next Activity Name</label>
                      <input type="text"  class="form-control" id="inputEmail4">
                  </div>
                </div>
                
                <div align="center">
                <div class="col-md-6">
                    <form  method="get">
                        <div class="input-group">
                            
                        <button type="button" class="btn btn-primary btn-lg btn-block">Search</button>
                           
                        </div>
                    </form>
                </div>
                </div>
                <div align="right">
                    <button type="button" class="btn btn-primary my-3" data-toggle="modal" data-target="#staticBackdrop">
                         Button Add
                     </button> 
                     </div>
                     <div class="table-responsive">
                                <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Activity Name</th>
                                    <th scope="col">Act Type</th>
                                    <th scope="col">Distribution Type</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">1</th>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td>Del/Edit</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">2</th>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td>Del/Edit</td>
                                    </tr>
                                    
                                </tbody>
                                </table>
								</div>
          </form>
          <!-- Modal-->
          <div class="modal fade " id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Add/Edit</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST">
                                    <div class="form-group">
                                        <label for="inputEmail4">Activity Name</label>
                                        <input type="text"class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="form-group">
                                    <label for="inputEmail4">Activity Type</label>
                                        <input type="text"  class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="form-group">
                                    <label for="inputEmail4">Distribution Type</label>
                                        <input type="text" class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-light btn-lg btn-block" data-toggle="modal" data-target="#customdistribution">Custom Distribution</button>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-light btn-lg btn-block" data-toggle="modal" data-target="#customdistribution">Before RPC</button>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-light btn-lg btn-block" data-toggle="modal" data-target="#customdistribution">System RPC</button>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-light btn-lg btn-block" data-toggle="modal" data-target="#customdistribution">After RPC</button>
                                    </div>
                                   
                                    <div align="right">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                           
                        </div>
                    </div>
                </div> 
                <!-- Modal customdistribution-->
          <div class="modal fade " id="customdistribution" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Lookup RPC</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST">
                                    <div class="form-group">
                                        <label for="inputEmail4">RPC Name</label>
                                        <input type="text"class="form-control" id="inputEmail4">
                                    </div>
                                    <div align="center">
                                        <div class="">
                                            <form  method="get">
                                                <div class="input-group">
                                                    <input type="search" name="search" class="form-control">
                                                    <span class="input-group-prepend">
                                                        <button type="submit" class="btn btn-primary">Search</button>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div> 
                                    </br>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col">No</th>
                                                    <th scope="col">RPC Name</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Pilih</td>
                                                    <td> </td>
                                                    <td> </td>
                                                </tr>
                                                <tr>
                                                    <td>Pilih</td>
                                                    <td> </td>
                                                    <td> </td>
                                                </tr>
                                            </tbody>
                                        </table>
								    </div>
                                </form>
                            </div>
                           
                        </div>
                    </div>
                </div> 
        </div>
      </div>

</section>
 @endsection