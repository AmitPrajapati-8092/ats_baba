@include('include.emp_header') @include('include.emp_leftsidebar')
<style>
    input[type=text],
    input[type=email],
    textarea,
    {
        -moz-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        outline: none;
        margin: 5px 1px 3px 0px;
        border: 1px solid #DDDDDD;
    }
    
    input[type=text]:focus,
    ,
    input[type=email]:focus textarea:focus {
        -moz-box-shadow: 0 0 5px #51cbee;
        -webkit-box-shadow: 0 0 5px #51cbee;
        box-shadow: 0 0 5px #51cbee;
        border: 1px solid #51cbee;
    }
    
    label {
        width: 100%;
        float: left;
    }
    
    label {
        font-weight: 200;
        font-family: inherit;
        font-size: 15px;
    }
    
    input[type=text],
    input[type=email],input[type=date],select {
        width: 100%;
        padding: 7px;
        border-radius: 5px;
    }
    
    textarea {
        border-radius: 5px;
        width: 48%;
    }
    
    span.red {
        color: red;
    }
    
    input[class="form-control"] {
        border: 1px solid #bdbcbc;
        width: 84%;
        background: #fff;
    }
    
    select[class="form-control"] {
        border: 1px solid #bdbcbc;
        width: 84%;
        background: #fff;
    }
    
    textarea[class="form-control"] {
        border: 1px solid #bdbcbc;
        background: #fff;
        width: 84%;
    }
    
    #wrapper {
        width: 100%;
        overflow-y: scroll;
    }
    
    #dels {
        display: flex;
        margin-top: 2%;
        margin-left: 2%;
    }
    
    .card .card-header {
        padding: 2px 20px;
        border: none;
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
        <div class="content">
            <div class="container-fluid">
                <form class="cmxform form-horizontal tasi-form" id="signupForm" action="{{url('employer/forward_candidate')}}" method="post" enctype="multipart/form-data">
                    @csrf()
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" style="  background-color:#317eeb;">
                                    <h3 class="card-title" style="color:#fff;text-transform: none; font-size:large">Candidate Link Forward</h3></div>
                                <div class="card-body">
                                    <div class="form">
                                        <div class="form-group row">
                                            <label for="email" class="control-label col-lg-4">From<span class="red">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="email" style="width: 75%;" placeholder="Email Id" id="" name="email_from" disabled value="{{$toReturn['form_email_id']}}" required>

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="control-label col-lg-4">Email To<span class="red">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="hidden" name="job_id" value="{{$toReturn['application_detail']['job_ID']}}">
                                                <input type="hidden" name="seeker_id" value="{{$toReturn['application_detail']['seeker_ID']}}"> 
                                                <input type="email" style="width: 75%;" placeholder=" Send Email To " id="" name="email_to" required>

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="CC" class="control-label col-lg-4">CC</label>
                                            <div class="col-lg-8">
                                                <input type="email" style="width: 75%;" placeholder="CC " id="" name="email_cc">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Bcc" class="control-label col-lg-4">Bcc</label>
                                            <div class="col-lg-8">
                                                <input type="email" style="width: 75%;" placeholder=" BCC" id="" name="email_bcc">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="Subject" class="control-label col-lg-4">Subject<span class="red">*</label>
                                            <div class="col-lg-8">
                                                <input type="text"  style="width: 75%;" placeholder="Subject" id="Subject" name="email_subject" required >  
                                            </div>
                                        </div>
                                        <input type="hidden"  placeholder="Updated Resume" name="updated_resume" value="{{$toReturn['application_detail']['updated_resume']}}" />
                                        <div class="form-group row">
                                            <label for="Subject"  class="control-label col-lg-4">Email Content<span class="red">*</label>
                                            <div class="col-lg-6">
                                                <textarea class="wysihtml5 form-control article-ckeditor"  required id="article-ckeditor"  placeholder="Message body" style="height: 200px" name="email_content" required ></textarea>
                                            </div>
                                        </div>
                                    <div class="card-header bg-primary"> 
                                    </div> 
                                       <div class="card-body" style="background:#f3f2f2;">
                                    <div class="row" >
                                        <div class="col-md-1"></div>
                                            <div class="col-md-3" id="dels">
                                              <input class="form-check-input chkbx" type="checkbox"  name="param[]" value="fullname" checked>
                                                <label class="form-label">Full Name </label>
                                                 <input type="text" id="fullname" placeholder="Full Name " name="fullname" value="{{$toReturn['application_detail']['candate_name']}}" required>   
                                            </div><!--emd of col-->

                                            <div class="col-md-3" id="dels">
                                              <input class="form-check-input chkbx" type="checkbox"  name="param[]" value="phone_primary" checked>
                                              <label class="form-label">Phone Primary</label>
                                                <input type="text" id="phone_primart" placeholder="Phone Primary" name="phone_primary" value="{{$toReturn['application_detail']['phone_no_mobile']}}" required>  
                                            </div><!--emd of col-->

                                            <div class="col-md-3" id="dels">
                                                <input class="form-check-input chkbx" type="checkbox" name="param[]" value="condidate_email_id" checked>
                                                <label class="form-label">Email Id</label>
                                                 <input type="text" id="condidate_email_id" placeholder="Email Id" name="condidate_email_id" value="{{$toReturn['application_detail']['email_id']}}" required>     
                                            </div><!--emd of col-->
                                        </div> <!--end of row-->

                                        <div class="row" >
                                        <div class="col-md-1"></div>
                                            <div class="col-md-3" id="dels">
                                             <input class="form-check-input chkbx" type="checkbox"  name="param[]" value="current_location" checked >
                                             <label class="form-label">Current Location</label>
                                                <input type="text" id="" placeholder="Current Location" name="current_location" value="{{$toReturn['application_detail']['current_location']}}" required>      
                                            </div><!--emd of col-->

                                            <div class="col-md-3" id="dels">
                                             <input class="form-check-input chkbx" type="checkbox"  name="param[]" value="current_ctc" checked >
                                             <label class="form-label">Current CTC</label>
                                                    <input type="text" id="inlinetext" placeholder="Current CTC" name="current_ctc" required />   
                                            </div><!--emd of col-->

                                            <div class="col-md-3" id="dels">
                                             <input class="form-check-input chkbx" type="checkbox"  name="param[]" value="expected_ctc" checked>
                                             <label class="form-label">Expected CTC(min)</label>
                                                 <input type="text"  placeholder="Expected CTC(min)" name="expected_ctc"  required/>    
                                            </div><!--emd of col-->
                                        </div> <!--end of row-->

                                        <div class="row" >
                                        <div class="col-md-1"></div>
                                            <div class="col-md-3" id="dels">
                                             <input class="form-check-input chkbx" type="checkbox" name="param[]" checked value="qual_with_uni" checked>
                                             <label class="form-label">Qualification With University</label>
                                                <input type="text" placeholder="Qualification With University" name="qual_with_uni"  required/>   
                                            </div><!--emd of col-->

                                            <div class="col-md-3" id="dels">
                                             <input class="form-check-input chkbx" type="checkbox" name="param[]" value="us_visa_status" checked >
                                             <label class="form-label">US Visa Status</label>  
                                                 <input type="text"  placeholder=" US Visa Status " name="us_visa_status" value="{{$toReturn['application_detail']['visa_status']}}" required>   
                                            </div><!--emd of col-->
                                            <div class="col-md-3" id="dels">
                                              <input class="form-check-input chkbx" type="checkbox"  name="param[]" value="date_of_birth" checked >
                                              <label class="form-label">Date Of Birth</label>
                                              <input type="date" placeholder="Date Of Birth" name="date_of_birth" required/>
                                            </div><!--emd of col-->
                                        </div> <!--end of row-->
                                        <div class="row" >
                                        <div class="col-md-1"></div>
                                            <div class="col-md-3" id="dels">
                                             <input class="form-check-input chkbx" type="checkbox"  name="param[]" value="last_for_digit_ssn" checked>
                                             <label class="form-label">Last 4 Digit SSN No.</label>
                                                 <input type="text" max="4" placeholder="Last 4 Digit SSN No." id="last_for_digit_ssn" name="last_for_digit_ssn"  required>  
                                                        <span id="emsg" style="display:none;">Please Enter a Valid SSN No.</span>
                                                    
                                            </div><!--emd of col-->
                                                    
                                            <div class="col-md-3" id="dels">
                                             <input class="form-check-input chkbx" type="checkbox" name="param[]" value="entred_in_us" checked >
                                             <label class="form-label">Entered In Us</label>
                                                <input type="text"  placeholder="Entered In Us" name="entred_in_us" required>  
                                            </div><!--emd of col-->

                                            <div class="col-md-3" id="dels">
                                                <input class="form-check-input chkbx" type="checkbox"  name="param[]" value="Open_For_Relocation" checked>
                                                <label class="form-label">Open For Relocation(Yes/No)</label>
                                                <!--<input type="text" placeholder="Open For Relocation(Y/N)" name="Open_For_Relocation" required/>-->
                                                <select placeholder="Open For Relocation(Yes/No)" name="Open_For_Relocation" >
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                </select>
                                            </div><!--emd of col-->
                                        </div> <!--end of row-->

                                        <div class="row" >
                                        <div class="col-md-1"></div>
                                            <div class="col-md-3" id="dels">
                                              <input class="form-check-input chkbx" type="checkbox"  name="param[]" value="availa_for_tele" checked>
                                              <label class="form-label">Availability For Telephone(Yes/No)</label>
                                                <!--<input type="text"  placeholder="Availability For Telephone(Y/N)" name="availa_for_tele"  required/>     -->
                                                <select placeholder="Availability For Telephone(Yes/No)" name="availa_for_tele">
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                </select>
                                            </div><!--emd of col-->
                                            <div class="col-md-3" id="dels">
                                                <input class="form-check-input chkbx" type="checkbox"  name="param[]" value="availa_for_per" checked>
                                                <label class="form-label">Availability For Person(Yes/No)</label>
                                                <!--<input type="text"  placeholder="Availability For Person(Y/N)" name="availa_for_per"  required />-->
                                                <select  placeholder="Availability For Person(Yes/No)" name="availa_for_per">
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                </select>
                                            </div><!--emd of col-->

                                            <div class="col-md-3" id="dels">
                                                <input class="form-check-input chkbx" type="checkbox"  name="param[]" value="availa_for_new" checked> 
                                                <label class="form-label">Availability For New Project(Yes/No) </label>
                                                <!--<input type="text"  placeholder="Availability For New Project(Y/N)" name="availa_for_new" required />-->
                                                <select  placeholder="Availability For New Project(Yes/No)" name="availa_for_new">
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                </select>
                                            </div><!--emd of col-->
                                            <div class="col-md-3" id="dels">
                                                <input class="form-check-input chkbx" type="checkbox"  name="param[]" value="expectedrate" checked> 
                                                <label class="form-label">Expected Rate</label>
                                                <input type="text"  placeholder="Expected Rate" name="expectedrate" required>       
                                            </div><!--emd of col-->
                                            
                                        </div> <!--end of row-->  
                                    </div>
                                </div>
                                <hr>
                                <div align="center">
                                    <input type="checkbox" onclick="javascript:showTable('exp_required','exp_table');" id="exp_required" name="exp_required" value="exp_required" > &nbsp;&nbsp;&nbsp; Experience Required ?

                                    <table class="table" style="display:none;" id="exp_table" cellspacing = "0" style="border: 1Px solid;width: 40%;!important" >
                                    <thead style="    background: #317eeb;">
                                        <tr>
                                            <th colspan= "5">Experiences</th>
                                        </tr>
                                        <tr>    
                                            <th style="border: 1Px solid;">Skills</th>
                                            <th style="border: 1Px solid;">Years of<br>Experience/Exposure</th>
                                            <th style="border: 1Px solid;">Expertise Level (0 - 10)<br/>[1=Novice; 10=Expert]</th>
                                        </tr>
                                    </thead>        
                                    <tbody>
                                    <tr style="background: aliceblue;">
                                        <td><input type ="text" name="experience[0][]"/></td>
                                        <td><input type ="text" name="experience[0][]"/></td>
                                        <td><input type ="text" name="experience[0][]"/></td>
                                    </tr>
                                    <tr>
                                        <td><input type ="text" name="experience[1][]"/></td>
                                        <td><input type ="text" name="experience[1][]"/></td>
                                        <td><input type ="text" name="experience[1][]"/></td>
                                    </tr>
                                    <tr style="background: aliceblue;">
                                        <td><input type ="text" name="experience[2][]"/></td>
                                        <td><input type ="text" name="experience[2][]"/></td>
                                        <td><input type ="text" name="experience[2][]"/></td>
                                    </tr>
                                    <tr>
                                        <td><input type ="text" name="experience[3][]"/></td>
                                        <td><input type ="text" name="experience[3][]"/></td>
                                        <td><input type ="text" name="experience[3][]"/></td>
                                    </tr>
                                    <tr style="background: aliceblue;">
                                        <td><input type ="text" name="experience[4][]"/></td>
                                        <td><input type ="text" name="experience[4][]"/></td>
                                        <td><input type ="text" name="experience[4][]"/></td>
                                    </tr>
                                    <tr>
                                        <td><input type ="text" name="experience[5][]"/></td>
                                        <td><input type ="text" name="experience[5][]"/></td>
                                        <td><input type ="text" name="experience[5][]"/></td>
                                    </tr>
                                    <tr style="background: aliceblue;">
                                        <td><input type ="text" name="experience[6][]"/></td>
                                        <td><input type ="text" name="experience[6][]"/></td>
                                        <td><input type ="text" name="experience[6][]"/></td>
                                    </tr>
                                    <tr>
                                        <td><input type ="text" name="experience[7][]"/></td>
                                        <td><input type ="text" name="experience[7][]"/></td>
                                        <td><input type ="text" name="experience[7][]"/></td>
                                    </tr>
                                    <tr style="background: aliceblue;">
                                        <td><input type ="text" name="experience[8][]"/></td>
                                        <td><input type ="text" name="experience[8][]"/></td>
                                        <td><input type ="text" name="experience[8][]"/></td>
                                    </tr>
                                    <tr>
                                        <td><input type ="text" name="experience[9][]"/></td>
                                        <td><input type ="text" name="experience[9][]"/></td>
                                        <td><input type ="text" name="experience[9][]"/></td>
                                    </tr>
                                </tbody>
                            </table>   
                        </div>
                        <hr>
                                    <div align="center">    
                                        <input type="checkbox" onclick="javascript:showTable('ref_required','ref_table');" id="ref_required" name="ref_required" value="ref_required" > &nbsp;&nbsp;&nbsp; Reference Required ? 

                                        <table class="table" style="display:none;" id="ref_table" cellspacing = "0" style="border: 1Px solid;width: 40%;!important" >
                                            <thead>
                                                <tr style="background: #317eeb;">
                                                    <th colspan= "5">References</th>
                                                </tr>
                                               <tr style="background: #317eeb;">     
                                                    <th style="border: 1Px solid;">Full Name</th>
                                                    <th style="border: 1Px solid;">Official Email Id</th>
                                                    <th style="border: 1Px solid;">Designation</th>
                                                    <th style="border: 1Px solid;">Client Name</th>
                                                    <th style="border: 1Px solid;">Location</th>
                                                </tr>
                                            </thead>            
                                            <tbody>
                                                <tr>
                                                    <td><input type ="text" name="reference[0][]"/></td>
                                                    <td><input type ="text" name="reference[0][]"/></td>
                                                    <td><input type ="text" name="reference[0][]"/></td>
                                                    <td><input type ="text" name="reference[0][]"/></td>
                                                    <td><input type ="text" name="reference[0][]"/></td>
                                                </tr>
                                                 <tr style="background: aliceblue;">
                                                    <td><input type ="text" name="reference[1][]"/></td>
                                                    <td><input type ="text" name="reference[1][]"/></td>
                                                    <td><input type ="text" name="reference[1][]"/></td>
                                                    <td><input type ="text" name="reference[1][]"/></td>
                                                    <td><input type ="text" name="reference[1][]"/></td>
                                                </tr>
                                                <tr>
                                                    <td><input type ="text" name="reference[2][]"/></td>
                                                    <td><input type ="text" name="reference[2][]"/></td>
                                                    <td><input type ="text" name="reference[2][]"/></td>
                                                    <td><input type ="text" name="reference[2][]"/></td>
                                                    <td><input type ="text" name="reference[2][]"/></td>
                                                </tr>
                                                 <tr style="background: aliceblue;">
                                                    <td><input type ="text" name="reference[3][]"/></td>
                                                    <td><input type ="text" name="reference[3][]"/></td>
                                                    <td><input type ="text" name="reference[3][]"/></td>
                                                    <td><input type ="text" name="reference[3][]"/></td>
                                                    <td><input type ="text" name="reference[3][]"/></td>
                                                </tr>
                                                <tr>
                                                    <td><input type ="text" name="reference[4][]"/></td>
                                                    <td><input type ="text" name="reference[4][]"/></td>
                                                    <td><input type ="text" name="reference[4][]"/></td>
                                                    <td><input type ="text" name="reference[4][]"/></td>
                                                    <td><input type ="text" name="reference[4][]"/></td>
                                                </tr>
                                                 <tr style="background: aliceblue;">
                                                    <td><input type ="text" name="reference[5][]"/></td>
                                                    <td><input type ="text" name="reference[5][]"/></td>
                                                    <td><input type ="text" name="reference[5][]"/></td>
                                                    <td><input type ="text" name="reference[5][]"/></td>
                                                    <td><input type ="text" name="reference[5][]"/></td>
                                                </tr>
                                                <tr>
                                                    <td><input type ="text" name="reference[6][]"/></td>
                                                    <td><input type ="text" name="reference[6][]"/></td>
                                                    <td><input type ="text" name="reference[6][]"/></td>
                                                    <td><input type ="text" name="reference[6][]"/></td>
                                                    <td><input type ="text" name="reference[6][]"/></td>
                                                </tr>
                                                 <tr style="background: aliceblue;">
                                                    <td><input type ="text" name="reference[7][]"/></td>
                                                    <td><input type ="text" name="reference[7][]"/></td>
                                                    <td><input type ="text" name="reference[7][]"/></td>
                                                    <td><input type ="text" name="reference[7][]"/></td>
                                                    <td><input type ="text" name="reference[7][]"/></td>
                                                </tr>

                                        </tbody>
                                    </table>   
                                </div>
                            <hr>
                            <div align="center">        
                                <input type="checkbox" onclick="javascript:showTable('attachment_required','attach_table');" name="attachment_required" id="attachment_required" value="attachment_required">  &nbsp;&nbsp;&nbsp; Attachment Required ?      
                                    <table class="table" style="display:none;" id="attach_table" cellspacing = "0" style="border: 1Px solid;width: 40%;!important" >
                                            <thead>
                                               <tr style="background: #317eeb;">
                                                    <th colspan= "5">Attachments</th>
                                                </tr>
                                               <tr style="background: #317eeb;">      
                                                    <th style="border: 1Px solid;">Resume</th>
                                                    <th style="border: 1Px solid;"></th>
                                                    <th style="border: 1Px solid;"></th> 
                                               </tr>
                                            </thead>    
                                            <tbody>
                                                <tr style="background: aliceblue;">
                                                    <td><input type="checkbox"  name="other_doc0" id="other_doc0" value="document_upload"> 
                                                    @if(!empty($toReturn['application_detail']['updated_resume']))
                                                    <input type="hidden" name="document_name[]" value="update_Resume">
							                        <input type="hidden" name="document_upload[]" value="{{$toReturn['application_detail']['updated_resume']}}" ><a href="{{url('public/seekerresume/'.$toReturn['application_detail']['updated_resume'])}}">{{$toReturn['application_detail']['updated_resume']}}</a>
							                        @endif
                                                    <td><input type="button"  name="other_doc1" id="other_doc1" value="Delete"> 
                                                        <input type="button" name="add_more_doc" value="Add More "/></a></td>
                                                   
                                                </tr>
                                                <tr><td></td><td></td></tr>
                                                <tr id="exp_detail">		
										        <td class="form-group row delete_exp">													
										        <input type="text" name="document_name[]" id="job_title" placeholder="Document Name" style="width: 40%;">
                                                <input type="file" name="document_upload[]" id="document_upload" class="form-control" style="width: 40%;">
												<p><button type="button" id="btnAdd_Exp" class="btn btn-primary">Add More&nbsp;<i class="fa fa-plus" aria-hidden="true"></i></button></p>
												</td>
                                                </tr>
                                                </tbody>
                                                </table>   
                                            </div>
                                        <hr>
                                   <center><button type="submit" class="btn btn-info">Send</button></center>
                                </div> <!-- .form -->
                            </div> <!-- card-body -->
                        </div> <!-- card -->
                    </div> <!-- col -->
                </div> <!-- End row -->	
            </div>
        </div>
        </form>
    </div>
</div>
<script type="text/javascript">
function showTable(checkbox,tableId){
    if($('#'+checkbox).is(":checked"))   
        $("#"+tableId).show();
    else
        $("#"+tableId).hide();
}
</script>
<!-- <script type="text/javascript">
$(document).ready(function(){
    
    var $regexname=/^([0-9])$/;
    $('#last_for_digit_ssn').on('keypress keydown keyup',function(){
             if (!$(this).val().match($regexname)) {
              // there is a mismatch, hence show the error message
                //  $('.emsg').removeClass('hidden');
                 $('#emsg').show();
             }
           else{
                // else, do not display message
                $('#emsg').addClass('hidden');
               }
         });
});
</script>
<script type="text/javascript">
    
</script>
@include('include.footer')
<script>
$(document).ready(function(){
	var i=1;
	$('#btnAdd_Exp').click(function(){
        i++;				
            var data2=`<div class="form-group row delete_exp">													
            <input type="text" name="document_name[]" id="job_title" placeholder="Document Name" style="width: 40%;">
                            <input type="file" name="document_upload[]" id="document_upload" style="width: 40%;">
							<button type="button" id="btnRemove" class="btn btn-primary btn_remove">Remove</button>											  
						 </div>`;
		 $('#exp_detail').append(data2);
	});	
});
$(document).on('click', '.btn_remove', function() {
    $(this).closest('.delete_exp').remove();
});	 
</script> -->
<script type="text/javascript">
function showTable(checkbox,tableId){
    if($('#'+checkbox).is(":checked"))   
        $("#"+tableId).show();
    else
        $("#"+tableId).hide();
}
</script>
<script type="text/javascript">
$(document).ready(function(){
    
    var $regexname=/^([0-9])$/;
    $('#last_for_digit_ssn').on('keypress keydown keyup',function(){
             if (!$(this).val().match($regexname)) {
              // there is a mismatch, hence show the error message
                //  $('.emsg').removeClass('hidden');
                 $('#emsg').show();
             }
           else{
                // else, do not display message
                $('#emsg').addClass('hidden');
               }
         });
});
</script>
<script type="text/javascript">
    function lastfor();
</script>
<script>
    // last ssn number
function numbval() {
  var x, text;

  // Get the value of the input field with id="numb"
  x = document.getElementById("last_for_digit_ssn").value;

  // If x is Not a Number or less than one or greater than 10
  if (isNaN(x) || x < 1000 || x > 9999) {
    text = "Please enter a Valid SSN No.";
  } else {
    text = " ";
  }
  document.getElementById("chk").innerHTML = text;
}
    
// for ctc
function ctc() {
  var x, text;
  x = document.getElementById("inlinetext").value;

  if (isNaN(x) || x < 1 ) {
    text = "Please enter a Valid CTC No.";
  } else {
    text = " ";
  }
  document.getElementById("wrong").innerHTML = text;
}

// etc
function etc() {
  var x, text;
  x = document.getElementById("inlinetextetc").value;

  if (isNaN(x) || x < 1 ) {
    text = "Please enter a Valid ETC No.";
  } else {
    text = " ";
  }
  document.getElementById("wrong2").innerHTML = text;
}

// expected rate
function rate() {
  var x, text;

  // Get the value of the input field with id="numb"
  x = document.getElementById("expectedrate").value;

  // If x is Not a Number or less than one or greater than 10
  if (isNaN(x) || x < 1) {
    text = "Please enter numbers only";
  } else {
    text = " ";
  }
  document.getElementById("exprate").innerHTML = text;
}
</script>