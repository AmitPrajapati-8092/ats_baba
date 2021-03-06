@include('include.header')
@include('include.leftSidebar')
<style>
    #wrapper{
        width:100%;
        overflow-y:scroll;
    }
 
.content-page > .content {
    margin-bottom: 60px;
    margin-top: 10px;
    padding: 20px 10px 15px 10px;
}

.table td {
    padding: 7px;
    font-size: top;
    border-top: 1px solid #dee2e6;
    font-size: 14px;
    color: #000;
    background:#fff;
}
.table tr {
    padding: 7px;
    font-size: top;
    border-top: 1px solid #dee2e6;
    font-size: 14px;
    color: #000;
    background:#fff;
}
.table th {
    padding: 7px;
    font-size: top;
    border-top: 1px solid #dee2e6;
    font-size: 14px;
    color: #000;
    background:#e4e4e4;
}
.table thead th {
    vertical-align: bottom;
    border-bottom: 0.5px solid #000;
}
.table-bordered thead td, .table-bordered thead th {
    border-bottom-width: 1px;
}
</style>
        <div id="wrapper">
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                        <div class="row">
                            <div class="col-sm-12">
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Hrms</a></li>
                                    <li class="active">countries</li>    
                                </ol>
                            </div>
                        </div>
                 
                   <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header" style="background: #317eeb;">
                                  <h3 class="card-title" style="color:#fff;">All Countries</h3>
                                </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-12">
                                        <span><button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#add_new_modal">Add New Country </button></span><br><br>
                                            <table  class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead style="background:#317eeb;">
                                                    <tr>
                                                       <th>Country Name</th>
                                                       {{-- <th>Nationality</th> --}}
                                                       <th>	Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                     @foreach($countries as $countrie)
                                                    <tr>
                                                        <?php
                                                        $id=$countrie->country_id;
                                                        // echo $id;
                                                        ?>

                                                      <td>{{$countrie->country_name}}</td>
                                                      {{-- <td>{{$countries->country_citizen}}</td> --}}
                                                      <td class="actions">
                                                      <a  href="" data-toggle="modal" data-target="#edit_model_countries{{$countrie->country_id}}" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="Edit" data-original-title="Edit"><i class="fa fa-pencil"></i></a>

                                                        <div id="edit_model_countries{{$countrie->country_id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                                                                <div class="modal-dialog">
                                                                 <form action="{{url('admin/countries/edit')}}"  method="post"> 
                                                                    <div class="modal-content"> 
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title mt-0">Edit Country</h4> 
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div> 
                                                                        <div class="modal-body"> 
                                                                           
                                                                            <div class="row"> 
                                                                                <div class="col-md-12"> 
                                                                                   <input type="hidden" name="_token" value ="{{ csrf_token() }}">
                    
                                                                                    <div class="form-group"> 
                                                                                        <label for="field-1" class="control-label">Country Name:</label> 
                                                                                        <input type="hidden" id="countries_id" name="countries_id">
                                                                                        <input type="text" class="form-control" id="country_name" value="{{$countrie->country_name}}" placeholder="Enter Country Name" name="country_name"> 
                                                                                        <input type="hidden" class="form-control" id="country_id" value="{{$countrie->country_id}}" placeholder="Enter Country Name" name="country_id"> 
                                                                                    </div> 
                                                                                </div> 
                                                                            </div> 
                                                                            {{-- <div class="row"> 
                                                                                <div class="col-md-12"> 
                                                                                    <div class="form-group"> 
                                                                                        <label for="field-3" class="control-label">Nationality:</label> 
                                                                                        <input type="text" class="form-control" id="country_citizen" placeholder="enter here ..... nationality" name="country_citizen"> 
                                                                                    </div> 
                                                                                </div> 
                                                                            </div> --}}
                                                                            
                                                                        </div> 
                                                                        <div class="modal-footer"> 
                                                                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button> 
                                                                            <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button> 
                                                                        </div>
                                                                        </div> 
                                                                    </form>
                                                                </div> 
                                                            </div>
                                                        </div>


                                                        <a href="{{URL::to('admin/countries/delete'.$id)}}" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                      </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            {{$countries->links()}}
                                    </div> 
                                </div>
                            </div>  <!-- end card-body -->
                            </div>   <!--end card-->
                   </div>  <!--end row-->         
</div>


                   <div id="add_new_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                                            <div class="modal-dialog">
                                             <form action="{{url('admin/countries/add')}}" method="post" > 
                                                <div class="modal-content"> 
                                                    <div class="modal-header">
                                                        <h4 class="modal-title mt-0">Add New Country</h4> 
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div> 
                                                    <div class="modal-body"> 
                                                       
                                                        <div class="row"> 
                                                            <div class="col-md-12"> 
                                                               <input type="hidden" name="_token" value ="{{ csrf_token() }}">

                                                                <div class="form-group"> 
                                                                    <label for="field-1" class="control-label">Country Name:</label> 
                                                                    <input type="text" class="form-control" id="field-1" placeholder="Enter New Country Name" name="country_name" required> 
                                                                </div> 
                                                            </div> 
                                                        </div> 
                                                        
                                                        
                                                    </div> 
                                                    <div class="modal-footer"> 
                                                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button> 
                                                        <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button> 
                                                    </div>
                                                    </div> 
                                                </form>
                                                </div> 
                                            </div>

                    

                                      
@include('include.footer')