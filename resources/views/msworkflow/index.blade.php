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
            <form action="/search" method="get">
                <div class="input-group">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Workflow Code</label>
                        <input type="search" name="search" class="form-control" id="inputEmail4">
                    </div>
                    <div class="input-group">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Workflow Name</label>
                            <input type="search" name="search2" class="form-control" id="inputEmail4">
                        </div>
                    </div>
                </div>
                <div class="input-group">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Status</label>
                        <select type="search" name="search3" class="form-control" id="exampleFormControlSelect1">
                            <option value="1">TRUE</option>
                            <option value="0">FALSE</option>
                        </select>
                    </div>
                </div>
                <div align="center">
                    <div class="col-md-6">
                        <div class="input-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Search</button>
                        </div>
                    </div>
                </div>`
            </form>
            
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
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($msworkflow as $mwf)
                            <tr>
                                <td>{{$mwf -> WFID}}</td>
                                <td>{{$mwf -> WFCode}}</td>
                                <td>{{$mwf -> WFName}}</td>
                                <td>{{$mwf -> Version}}</td>
                                <td>{{$mwf -> Status}}</td>
                                <td>
                                    <a href="/msworkflow/{{$mwf->WFID}}/edit" class="btn btn-outline-success">Edit</a>
                                    <a href="/msworkflow/{{$mwf->WFID}}/destroy" class="btn btn-outline-danger">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                                </tbody>
                                </table>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-end">
                                        {{$msworkflow->links()}}
                                       
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
                                <form action="/msworkflow/create"method="POST">
                                {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="inputEmail4">Workflow Code</label>
                                        <input name="WFCode" type="text" maxlength="10" class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="form-group">
                                    <label for="inputEmail4">Workflow Name</label>
                                        <input name="WFName" type="text" maxlength="50" class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group ">
                                            <label for="inputEmail4">Status</label>
                                            <select name="Status" class="form-control" id="exampleFormControlSelect1">
                                                <option value="1">TRUE</option>
                                                <option value="0">FALSE</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="inputEmail4">Version</label>
                                        <input name="Version" type="text" maxlength="50" placeholder="ReadOnly"class="form-control" id="inputEmail4"ReadOnly>
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