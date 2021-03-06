@include('include.emp_header')
@include('include.emp_leftsidebar')
<style>
    #wrapper {
        width: 100%;
        overflow-y: scroll;
    }

</style>
<div id="wrapper">
    <div class="content-page">
        <div class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" style="background-color:#317eeb;">
                            <h3 class="card-title" style="color:#fff;text-transform: none; font-size:large">Edit
                                Education
                                <a href="{{url('employer/search_resume')}}"><button type="button" class="btn btn-success" style="float: right;">Back</button></a>
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"
                                    style="float: right;">Add Education</button></h3>

                            </h3>
                        </div>

                        <div class="card-body" style="border: 1px #B0B0B0 solid;">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-12">
                                    <table id="datatable"
                                        class="table table-striped table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                        <thead>
                                            <tr>
                                                <th>Degree</th>

                                                <th>Institute</th>
                                                <th>City</th>
                                                <th>Country</th>
                                                <th>Year of Completion</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($educations as $education)


                                            <tr>
                                                <?php $id=$education['ID'];
                                                              $seekerid=$education['seeker_ID'];?>

                                                <td>{{$education['degree_title']}}</td>
                                                <td>{{$education['institude']}}</td>
                                                <td>{{$education['city']}}</td>
                                                <td>{{$education['country']}}</td>
                                                <td>{{$education['completion_year']}}</td>

                                                <td>
                                                    <a data-toggle="modal" data-target="#updateModal{{$id}}"><i
                                                            class="fa fa-pencil" aria-hidden="true"
                                                            style="color: #1ba6df;cursor: pointer;"
                                                            title="Edit"></i></a>
                                                    <a
                                                        href="{{url('employer/employer_edit_education/del/'.$id.'/'.$seekerid)}}"><i
                                                            class="fa fa-trash-o" aria-hidden="true" onclick="return confirm('Are you sure you want to delete this item?');"
                                                            style="color:#317eeb;" title="Delete"></i></a>
                                                </td>
                                                <!-- Model Update -->
                                                <div class="modal fade" id="updateModal{{$id}}" tabindex="-1"
                                                    role="dialog" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Edit
                                                                    Education</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">

                                                                <form class="cmxform form-horizontal tasi-form"
                                                                    action="{{url('employer/employer_edit_education/'.$id.'/'.$seekerid)}}"
                                                                    method="post">
                                                                    {{csrf_field()}}
                                                                    <div class="form-group row">
                                                                        <label for=""
                                                                            class="control-label col-lg-4">Degree</label>
                                                                        <div class="col-lg-8">
                                                                            <input class="form-control" type="hidden"
                                                                                id="seeker_ID" name="seeker_ID"
                                                                                value="{{$education['seeker_ID']}}">
                                                                            <input class="form-control" type="text"
                                                                                id="degree" name="degree_title"
                                                                                placeholder="Degree"
                                                                                value="{{$education['degree_title']}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for=""
                                                                            class="control-label col-lg-4">Institute</label>
                                                                        <div class="col-lg-8">
                                                                            <input class="form-control " type="text"
                                                                                id="institute" name="institude"
                                                                                placeholder="Institute"
                                                                                value="{{$education['institude']}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for=""
                                                                            class="control-label col-lg-4">City</label>
                                                                        <div class="col-lg-8">
                                                                            <input class="form-control " type="text"
                                                                                id="city_name" name="city" placeholder="City"
                                                                                value="{{$education['city']}}" required>
                                                                            <span id="cityerror"
                                                                                class="text-danger"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for=""
                                                                            class="control-label col-lg-4">Country</label>
                                                                        <div class="col-lg-8">

                                                                            <select name="country" class="form-control"
                                                                                id="">
                                                                                <option>{{$education['country']}}
                                                                                </option>
                                                                                @foreach ($country as $item)
                                                                                <option>{{$item->country_name}}</option>
                                                                                @endforeach
                                                                            </select>
                                                                            <span id="countryerror"
                                                                                class="text-danger"></span>
                                                                        </div>
                                                                    </div>
                                                                    {{-- <div class="form-group row">
                                                                      <label for="" class="control-label col-lg-4">Enter
                                                                          Date's</label>
                                                                      <div class="col-lg-8">
                                                                          <input type="checkbox" onclick="show_dates()"
                                                                              class="" name="" value="1" id="check_val">
                                                                      </div>
                                                                  </div>
                                                                  <div class="form-group row" id="show1"
                                                                      style="display:none;">
                                                                      <label for="" class="control-label col-lg-4">Start
                                                                          Date</label>
                                                                      <div class="col-lg-8">
                                                                          <input type="text" class="form-control" name=""
                                                                              id="">
                                                                      </div>
                                                                  </div>
                                                                  <div class="form-group row" id="show2"
                                                                      style="display:none;">
                                                                      <label for="" class="control-label col-lg-4">End
                                                                          Date</label>
                                                                      <div class="col-lg-8">
                                                                          <input type="text" class="form-control" name=""
                                                                              id="">
                                                                      </div>
                                                                  </div> --}}
                                                                    <div class="form-group row">
                                                                        <label for=""
                                                                            class="control-label col-lg-4">Year of
                                                                            Completion</label>
                                                                        <div class="col-lg-8">
                                                                            <input class="form-control " type="text"
                                                                                id="year_completion"
                                                                                name="completion_year"
                                                                                placeholder="Year of Completion"
                                                                                value="{{$education['completion_year']}}"
                                                                                required>
                                                                            <span id="completion_yearerror"
                                                                                class="text-danger"></span>
                                                                        </div>
                                                                    </div>


                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                        <button type="submit" onclick="validation()"
                                                                            class="btn btn-primary">Submit</button>
                                                                    </div>


                                                            </div>
                                                        </div>
                                                        </form>
                                                    </div>


                                            </tr>
                                              <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true"> 
                                                 <div class="modal-dialog" role="document"> 
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Add Education
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <form class="cmxform form-horizontal tasi-form"
                                                                onsubmit="return validation1()"
                                                                action="{{url('employer/employer_edit_education/add')}}"
                                                                method="post">
                                                                {{csrf_field()}}
                                                                <div class="form-group row">
                                                                    <label for=""
                                                                        class="control-label col-lg-4">Degree</label>
                                                                    <div class="col-lg-8">
                                                                        <input class="form-control" type="hidden"
                                                                            id="seeker_ID" name="seeker_ID"
                                                                            value="{{$education['seeker_ID']}}">
                                                                        <input class="form-control" type="text"
                                                                            id="degree" name="degree_title"
                                                                            placeholder="Degree" value="" required>
                                                                        <span id="degree_titleerror"
                                                                            class="text-danger"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for=""
                                                                        class="control-label col-lg-4">Institute</label>
                                                                    <div class="col-lg-8">
                                                                        <input class="form-control " type="text"
                                                                            id="institute" name="institude"
                                                                            placeholder="Institute" value="" required>
                                                                        <span id="institudeerror"
                                                                            class="text-danger"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for=""
                                                                        class="control-label col-lg-4">City</label>
                                                                    <div class="col-lg-8">
                                                                        <input class="form-control " type="text"
                                                                            id="city_name" name="city" placeholder="City"
                                                                            value="" required>
                                                                        <span id="cityerror" class="text-danger"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for=""
                                                                        class="control-label col-lg-4">Country</label>
                                                                    <div class="col-lg-8">
                                                                        <select name="country" id=""
                                                                            class="form-control" required>
                                                                            <option selected>Select country</option>
                                                                            @foreach ($country as $item)
                                                                            <option>{{$item->country_name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                {{-- <div class="form-group row">
                                                                    <label for="" class="control-label col-lg-4">Select
                                                                        length of education</label>
                                                                    <div class="col-lg-8">
                                                                        <select name="" class="form-control" id="">
                                                                            <option>present</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="" class="control-label col-lg-4">Enter
                                                                        Date's</label>
                                                                    <div class="col-lg-8">
                                                                        <input type="checkbox" onclick="show_dates()"
                                                                            class="" name="" value="1" id="check_val">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row" id="show1"
                                                                    style="display:none;">
                                                                    <label for="" class="control-label col-lg-4">Start
                                                                        Date</label>
                                                                    <div class="col-lg-8">
                                                                        <input type="text" class="form-control" name=""
                                                                            id="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row" id="show2"
                                                                    style="display:none;">
                                                                    <label for="" class="control-label col-lg-4">End
                                                                        Date</label>
                                                                    <div class="col-lg-8">
                                                                        <input type="text" class="form-control" name=""
                                                                            id="">
                                                                    </div>
                                                                </div> --}}
                                                                <div class="form-group row">
                                                                    <label for="" class="control-label col-lg-4">Year of
                                                                        Completion</label>
                                                                    <div class="col-lg-8">
                                                                        <input class="form-control " type="text"
                                                                            id="year_completion" name="completion_year"
                                                                            placeholder="Year of Completion" value=""
                                                                            required>
                                                                    </div>
                                                                </div>


                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="submit" onclick="validation1()"
                                                                        class="btn btn-primary">Submit</button>
                                                                </div>


                                                        </div>
                                                    </div>
                                                    </form>
                                                </div>
                                                @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->
        </div>
        <!--container-fluid-->
    </div>
    <!--content-->



    @include('include.emp_footer')


    <!-- Mirrored from coderthemes.com/moltran/blue/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2019 12:16:08 GMT -->
    <script>
        function show_dates() {
            var check_val = document.getElementById("check_val").value;
            if (check_val == "1") {
                $("#show1").show('slow');
                $("#show2").show('slow');
                document.getElementById("check_val").value = "0";
            } else {
                $("#show1").hide('slow');
                $("#show2").hide('slow');
                document.getElementById("check_val").value = "1";
            }


        }


        // function var_city() {

        //     var city_op = document.getElementById("check").value;
        //     console.log(city_op);
        //     if (city_op == "1") {
        //         $("#city_op").removeAttr("readonly", true);

        //         document.getElementById("check").value = "0";
        //     } else {
        //         $("#city_op").attr("readonly", true);
        //         $("#city_op").css("background-color", "#E7E7E7");

        //         // console.log("works")
        //         document.getElementById("check").value = "1";

        //     }


        // }

    </script>

<script>

$('#degree').bind('keyup blur',function(){ 
    var node = $(this);
    node.val(node.val().replace(/[^A-Za-z_\s]/,'') ); }   // (/[^a-z]/g,''
);

$('#institute').bind('keyup blur',function(){ 
    var node = $(this);
    node.val(node.val().replace(/[^A-Za-z_\s]/,'') ); }   // (/[^a-z]/g,''
);

$('#city_name').bind('keyup blur',function(){ 
    var node = $(this);
    node.val(node.val().replace(/[^A-Za-z_\s]/,'') ); }   // (/[^a-z]/g,''
);


$('#year_completion').bind('keyup blur',function(){ 
    var node = $(this);
    node.val(node.val().replace(/[^0-9]/,'') ); }   // (/[^a-z]/g,''
);

</script>



    </html>
