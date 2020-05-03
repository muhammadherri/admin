@extends('layout.master')
 @section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
               
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
                <form action="/msworkflow/{{$msworkflow->WFID}}/update"method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="inputEmail4">Workflow Code</label>
                    <input value="{{$msworkflow->WFCode}}" name="WFCode" type="text" maxlength="10" class="form-control" id="inputEmail4">
                </div>
                <div class="form-group">
                    <label for="inputEmail4">Workflow Name</label>
                    <input value="{{$msworkflow->WFName}}" name="WFName" type="text" maxlength="50" class="form-control" id="inputEmail4">
                </div>
                <div class="form-group">
                    <div class="form-group ">
                        <label for="inputEmail4">Status</label>
                            <select value="{{$msworkflow->Status}}" name="Status" class="form-control" id="exampleFormControlSelect1">
                            <option value="1">TRUE</option>
                            <option value="0">FALSE</option>
                            </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail4">Version</label>
                    <input value="{{$msworkflow->Version}}" name="Version" type="text" maxlength="50" placeholder="ReadOnly"class="form-control" id="inputEmail4"readonly>
                </div>
                <div align="right">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
		</div>
    </div> 
</div> 

                            
                                

</section>
@endsection