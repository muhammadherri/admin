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
        <h3 class="card-title">Master Next Activity</h3>
      </div>
        <div class="card-body">
          
        
        <form>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Workflow Code</label>
                <input type="text" maxlength="50" class="form-control" placeholder="Read Only"id="inputEmail4"readonly>
            </div>
            <div class="form-group col-md-6">
                  <label for="inputEmail4">Workflow Name</label>
                    <input type="text" maxlength="50" class="form-control" placeholder="Read Only"id="inputEmail4"readonly>
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
                                    <th scope="col">Next Activity</th>
                                    <th scope="col">Condition</th>
                                    <th scope="col"></th>
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
                                <h5 class="modal-title" id="staticBackdropLabel">Add Edit</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST">
                                    <div class="form-group">
                                        <div class="form-group ">
                                            <label for="inputEmail4">Actifity Name</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                            <option>Dropdown</option>
                                            <option>Dropdown1</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group ">
                                            <label for="inputEmail4">Next Actifity Name</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                            <option>Dropdown</option>
                                            <option>Dropdown1</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Example textarea</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                           
                        </div>
                    </div>
                </div> 
        </div>
      </div>

</section>
 @endsection