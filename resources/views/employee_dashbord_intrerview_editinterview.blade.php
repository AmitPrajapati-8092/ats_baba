@include('include.emp_header')
@include('include.emp_leftsidebar')

<link href="{{url('assets/packages/core/main.css')}}" rel='stylesheet'>
<link href="{{url('assets/packages/bootstrap/main.css')}}" rel="stylesheet">
<link href="{{url('assets/packages/timegrid/main.css')}}" rel="stylesheet">
<link href="{{url('assets/packages/daygrid/main.css')}}" rel="stylesheet">
<link href="{{url('assets/packages/list/main.css')}}" rel="stylesheet">
<script src="{{url('assets/packages/core/main.js')}}"></script>
<script src="{{url('assets/packages/interaction/main.js')}}"></script>
<script src="{{url('assets/packages/bootstrap/main.js')}}"></script>
<script src="{{url('assets/packages/daygrid/main.js')}}"></script> 
<script src="{{url('assets/packages/timegrid/main.js')}}"></script>
<script src="{{url('assets/packages/list/main.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css">
<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
{{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="jquery.simple-calendar.js"></script> --}}
<link rel="stylesheet" type="text/css" href="simple-calendar.css" />
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

<script>
            var today = new Date();
            var dd = String(today.getDate()).padStart(2, '0');
            var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
            var yyyy = today.getFullYear();

            document.write(today);
            today = yyyy + '-' + mm + '-' + dd;
            // alert(today);
        document.addEventListener('DOMContentLoaded', function() {
          var calendarEl = document.getElementById('calendar');
      
          var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
            header: {
              left: 'prev,next today',
              center: 'title',
              right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
            },
            
            navLinks: true, // can click day/week names to navigate views
            businessHours: true, // display business hours
            editable: true,
            events: [
               {
                   start:   today,
                   rendering: 'background',
                   
               }, 
              {
                title: 'Business Lunch',
                start: '2019-09-03T13:00:00',
                constraint: 'businessHours'
              },
              {
                title: 'Meeting',
                start: '2019-09-13T11:00:00',
                constraint: 'availableForMeeting', // defined below
                color: '#257e4a'
              },
              {
                title: 'Conference',
                start: '2019-09-19',
                end: '2019-09-20'
              },
              {
                title: 'Party',
                start: '2019-09-29T20:00:00'
              },
      
              // areas where "Meeting" must be dropped
              {
                groupId: 'availableForMeeting',
                start: '2019-09-11T10:00:00',
                end: '2019-09-11T16:00:00',
                rendering: 'background'
              },
              {
                groupId: 'availableForMeeting',
                start: '2019-09-13T10:00:00',
                end: '2019-09-13T16:00:00',
                rendering: 'background'
              },
      
              // red areas where no events can be dropped
            //   {
            //     start: '2019-09-24',
            //     end: '2019-09-28',
            //     overlap: false,
            //     rendering: 'background',
            //     color: '#ff9f89'
            //   },
            //   {
            //     start: '2019-09-06',
            //     end: '2019-09-08',
            //     overlap: false,
            //     rendering: 'background',
            //     color: '#ff9f89'
            //   }
            ]
          });
      
          calendar.render();
        });
      
      </script>
      <style>
      
       
      
        #calendar {
          max-width: 770px;
          margin: 0 auto;
        }
      
      </style>  
<style>
.hei{
  height: 60vh;
}
<style>
    .panel-footer {
        padding: 5px 15px;
        border-bottom-right-radius: 0px;
        border-bottom-left-radius: 0px;
        background-color: #ffffff;
        width: 100%;
        height: 31px;
        /* margin-top: 6px; */
        border-radius: 10px;
        cursor: pointer;
    }

    .demo-mobile-month-view {
        height: 50%;
    }

    /* Darker background on mouse-over */

    .btn:hover {
        background-color: RoyalBlue;
    }

    .mini-stat-info span {
        color: #ffffff;
        display: block;
        font-size: 21px;
        font-weight: 500;
    }

    .card-body {
        padding: 0.25rem;
    }

    .card .card-header {
        padding: 10px 20px;
        border: none;
        background: #317eeb;
        color: #fff;
    }

    .card-title {
        font-size: 17px;
        font-weight: 100;
        color: #ffffff;
        margin-bottom: 0;
        margin-top: 0;
        text-transform: none;
    }

    .modal .modal-dialog .modal-content .modal-footer {
        padding: 0;
        padding-top: 14px;
        margin-right: 0em;
    }

    #wrapper {
        width: 100%;
        overflow-y: scroll;
    }

</style>
<div id="wrapper">
    <div class="content-page">
        <div class="content">
            <div class="row">
            <div class="col md-6">
                        <div id='calendar'></div>
                </div>

            
            <!-- End row-->
            <!-----------------------------------------------------------------start of first table------------------------------------------------->
            
                

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">

                                {{-- buttons --}}


                                <div class="col-md-11">
                                    <h3 class="card-title">Edit Interview</h3>
                                </div>

                                <div class="col-md-1">
                                    <a class="btn btn-warning"
                                        href="{{url('employer/dashboard/interview-meeting')}}">Back</a>
                                </div>
                            </div>
                            {{-- end buttons --}}
                        </div>
                        <form action="{{url('employer/dashboard/interview-interview-upchange')}}" method="POST">
                            {{csrf_field()}}
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="row ml-5">
                                            <div class="col-md-5 mt-2 ">
                                                <h4>Date</h4>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-group">
                                                        <input type="hidden" name="t0" id="id" value="{{$data['int']->job_ID}}">
                                                        <input type="hidden" name="ID" id="ID" value="{{$data['int']->schedule_id}}">

                                                    <input type="date" class="form-control" name="date_interview" id="interviewdate"
                                                aria-describedby="helpId" placeholder="" required value="{{$data['int']->interview_date}}">

                                                </div>
                                                <div class="col-md-1">

                                                </div>
                                            </div>


                                        </div>
                                        {{--row --}}
                                        <div class="row ml-5">
                                            <div class="col-md-5 mt-2 ">
                                                <h4>Start Time</h4>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-group">

                                                <input id="srttime" class="timepicker" name="start_time" type="text" required value="{{$data['int']->from_time}}">

                                                </div>
                                                <div class="col-md-1">

                                                </div>
                                            </div>


                                        </div>
                                        {{--row --}}
                                        <div class="row ml-5">
                                            <div class="col-md-5 mt-2 ">
                                                <h4>End Time</h4>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-group">

                                                <input id="endtime" class="timepicker1" name="end_time" type="text" required value="{{$data['int']->end_time}}">

                                                </div>
                                                <div class="col-md-1">

                                                </div>
                                            </div>


                                        </div>
                                        {{--row --}}
                                        <div class="row ml-5">
                                            <div class="col-md-5 mt-2 ">
                                                <h4>Type</h4>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-group">

                                                    {{-- Drop down --}}
                                                    <div class="form-group">
                                                        <select class="form-control" name="type" id="type" required>
                                                            <option selected>{{$data['int']->interview_type}}</option>
                                                            <option>Telephonic</option>
                                                            <option>Skype/video</option>
                                                            <option>In-Person</option>
                                                        </select>
                                                    </div>

                                                    {{--Drop down close--}}
                                                </div>
                                                <div class="col-md-1">

                                                </div>
                                            </div>

                                        </div>
                                        {{--row --}}
                                        <div class="row ml-5">
                                                <div class="col-md-5 mt-2 ">
                                                    <h4>Time Zone</h4>
                                                </div>
                                                <div class="col-md-6 mt-2">
                                                    <div class="form-group">
    
                                                        {{-- Drop down --}}
                                                        <div class="form-group">
                                                            <select class="form-control" name="time_zone" id="type" required>
                                                                <option selected>{{$data['int']->time_zone}}</option>
                                                                @foreach ($toReturn['time_zone'] as $item)
                                                            <option>{{$item->time_zone_name}}</option>
                                                                @endforeach
                                                                
                                                                
                                                            </select>
                                                        </div>
    
                                                        {{--Drop down close--}}
                                                    </div>
                                                    <div class="col-md-1">
    
                                                    </div>
                                                </div>
    
    
                                            </div>
                                        {{--row --}}
                                        <div class="row ml-5">
                                            <div class="col-md-5 mt-2 ">
                                                <h4>Interview For Job</h4>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-group">

                                                    {{-- Drop down --}}
                                                    <div class="form-group">
                                                        <select class="form-control" name="interview_job" id="jobcode" required>
                                                            
                                                            <!-- <option>Select Job For Schedule an interview</option> -->
                                                            @foreach ($toReturn['jobpost'] as $item)
                                                        <option value="{{$item['job_code']}}">{{$item['job_code']}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    {{--Drop down close--}}

                                                </div>
                                                <div class="col-md-1">

                                                </div>
                                            </div>


                                        </div>
                                        {{--row --}}
                                        <div class="row ml-5">
                                            <div class="col-md-5 mt-2 ">
                                                <h4>Candiate Name</h4>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-group">

                                                    {{-- Drop down --}}
                                                    <div class="form-group">
                                                        <select class="form-control" name="candiate_name" id="candidatename" required>
                                                            <option selected>{{$data['int']->candiate_name}}</option>
                                                            @foreach ($data['name'] as $i)
                                                            <option value="{{$i['first_name']}}|{{$i['ID']}}">{{$i['first_name']}}</option>
                                                            @endforeach
                                                            
                                                        </select>
                                                    </div>

                                                    {{--Drop down close--}}

                                                </div>
                                                <div class="col-md-1">

                                                </div>
                                            </div>


                                        </div>
                                        {{--row --}}
                                        <div class="row ml-5">
                                            <div class="col-md-5 mt-2 ">
                                                <h4>Instruction</h4>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-group">

                                                    <textarea class="form-control" aria-label="With textarea"
                                                id="instruction" name="instruction" required >{{$data['int']->instructions}}</textarea>

                                                </div>
                                                <div class="col-md-1">

                                                </div>
                                            </div>


                                        </div>
                                        {{--row --}}
                                        <div class="row ml-5">
                                            <div class="col-md-5 mt-2 ">

                                            </div>
                                            <div class="col-md-6 mt-2">


                                                <button type="submit" 
                                                    class="btn btn-primary">Submit</button>


                                                <div class="col-md-1">

                                                </div>
                                            </div>


                                        </div>
                                        {{--row --}}
                                        <div class="row mt-2">
                                            <div class="col-md-5 mt-2 ">

                                            </div>

                                        </div>


                                    </div>

                                    {{--row --}}
                                </div>



                                <!--end of col-->
                            </div>
                            <!--end of col-->
                        </form> 
                    </div>
                    <!--end of card body-->
                </div>
                <!--end of card -->
            </div>
            <!--end of row-->
            <div class="col-md-3">

            </div>

        </div>
        <!--end of row-->

        <!------------------------------------------------------------End of first table---------------------------------------------------------------->
        <!-----------------------------------------------------------------start of second line of table----------------------------------->


        <!------------------------------------------------------------End of second table---------------------------------------------------------------->

        <!------------------------------------------------------------start of third table--------------------------------------------------------------->

        <!---------------------------------------end  of third table--------------------------------------->


        <!--start of third table-->

    </div>
    <!--end of content-->
</div>
<!--end of content-page-->
</div>
<!--end of wrapper-->
<script>
    $('.timepicker').timepicker();
    $('.timepicker1').timepicker();

</script>


<script>
    var resizefunc = [];

</script>
@include('include.emp_footer')
</body>

</html>
