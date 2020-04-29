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
        <h3 class="card-title">Master Workflow</h3>
      </div>
        <div class="card-body">
          
        
        <form>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Workflow Code</label>
                <input type="text"  class="form-control" id="inputEmail4">
            </div>
            <div class="form-group col-md-6">
                  <label for="inputEmail4">Workflow Name</label>
                    <input type="text"  class="form-control" id="inputEmail4">
            </div>
          </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Status</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option>TRUE</option>
                        <option>FALSE</option>
                        
                        </select>
                    </div>
                </div>
               
                <div align="center">
                <div class="col-md-4">
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
                                    <th scope="col">Workflow Code</th>
                                    <th scope="col">Workflow Name</th>
                                    <th scope="col">Version</th>
                                    <th scope="col">Status</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">1</th>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td>LinkActivity</td>
                                    <td>Link Next Activity</td>
                                    <td>Link Edit</td>   
                                    </tr>
                                    <tr>
                                    <th scope="row">2</th>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td> </td>
                                    <td>LinkActivity</td>
                                    <td>Link Next Activity</td>
                                    <td>Link Edit</td>  
                                    </tr>
                                    
                                </tbody>
                                </table>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-end">
                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
								</div>
          </form>
          <!-- Modal-->
          <div class="modal fade " id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Add/Edit Workflow</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST">
                                    <div class="form-group">
                                        <label for="inputEmail4">Workflow Code</label>
                                        <input type="text" maxlength="10" class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="form-group">
                                    <label for="inputEmail4">Workflow Name</label>
                                        <input type="text" maxlength="50" class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group ">
                                            <label for="inputEmail4">Status</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                            <option>TRUE</option>
                                            <option>FALSE</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="inputEmail4">Version</label>
                                        <input type="text" maxlength="50" placeholder="ReadOnly"class="form-control" id="inputEmail4"readonly>
                                    </div>
                                    
                                   
                                    <div align="right">
                                    <button type="submit" class="btn btn-primary">Save</button>
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