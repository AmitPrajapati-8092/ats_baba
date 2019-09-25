@include('include.emp_header')
@include('include.emp_leftsidebar')
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
{{-- <link rel="stylesheet" href="{{url('assets/css/bootstrap-timepicker.css')}}">
<link rel="stylesheet" href="{{url('assets/css/bootstrap-timepicker.min.css')}}">
<link rel="stylesheet" href="{{url('assets/css/timepicker.less')}}">
<script src="{{url('assets/js/bootstrap-timepicker.js')}}"></script>
<script src="{{url('assets/js/bootstrap-timepicker.min.js')}}"></script>
<link type="text/css" href="css/bootstrap.min.css" />
<link type="text/css" href="css/bootstrap-timepicker.min.css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-timepicker.min.js"></script> --}}
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
{{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="jquery.simple-calendar.js"></script> --}}
<link rel="stylesheet" type="text/css" href="simple-calendar.css" />
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
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
<style>
      
       
      
      #calendar {
        max-width: 750px;
        margin: 0 auto;
      }
    
    </style>
<div id="wrapper">
    <div class="content-page">
        <div class="content">
            <br>
            <div class="row">

            </div>
            <!-- End row-->
            <!-----------------------------------------------------------------start of first table------------------------------------------------->
            <form action="{{url('employer/dashboard/interview_meeting_interview/add1')}}" method="POST">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-6">
                    <div id='calendar'></div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">

                
                                    <div class="col-md-11">
                                        <h3 class="card-title">New Meeting</h3>
                                    </div>

                                    <div class="col-md-1">
                                        <a class="btn btn-success"
                                            href="{{url('employer/dashboard/interview-meeting')}}">Back</a>
                                    </div>
                                </div>
                                {{-- end buttons --}}
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row ml-5">
                                            <div class="col-md-5 mt-2 ">
                                                <h4>Date</h4>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-group">

                                                    <input type="date" class="form-control" name="date" id=""
                                                        aria-describedby="helpId" placeholder="" required >

                                                </div>
                                                <div class="col-md-1">

                                                </div>
                                            </div>


                                        </div>
                                        {{--row --}}
                                        <div class="row ml-5">
                                            <div class="col-md-5 mt-2 ">
                                                <h4>Meeting Time</h4>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                {{-- <div class="input-group bootstrap-timepicker timepicker">
                                                <input id="timepicker1" type="text" class="form-control input-small">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                            </div> --}}
                                                <input id="timepicker" class="form-control input-small" type="time"
                                                    name="meeting_time" required>


                                            </div>


                                        </div>
                                        {{--row --}}
                                        <div class="row ml-5">
                                            <div class="col-md-5 mt-2 ">
                                                <h4>Location Time Zone</h4>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-group">

                                                    {{-- <input type="text"
                                                            class="form-control" name="" id="" aria-describedby="helpId" placeholder=""> --}}
                                                    {{-- Drop down --}}
                                                    <div class="form-group">
                                                        <select class="form-control" name="local_time" id="time_zone" required>
                                                            <option value="">Time Zone</option>
                                                                <option>Eastern Time Zone(ET)</option>
                                                                <option>Pacific Time Zone(PT)</option>
                                                                <option>Central Time Zone(CT)</option>
                                                                <option>Indian Standard Time(IST)</option>
                                                        </select>
                                                        <p style="display:none;">This field cannot be empty</p>
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
                                                <h4>Subject</h4>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-group">

                                                    <input type="text" class="form-control" name="subject" id=""
                                                        aria-describedby="helpId" placeholder="" required>
                                                </div>
                                                <div class="col-md-1">

                                                </div>
                                            </div>


                                        </div>
                                        {{--row --}}




                                        {{--row --}}
                                        <div class="row ml-5">
                                            <div class="col-md-5 mt-2 ">
                                                <h4>Participants</h4>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-group">

                                                    <textarea class="form-control" aria-label="With textarea"
                                                        name="parti" required></textarea>

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


                                                <button type="submit" class="btn btn-primary">Submit</button>


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
                        </div>
                        <!--end of card body-->
                    </div>
                    <!--end of card -->
                </div>
            </form>
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

{{-- <script type="text/javascript">
    $('#timepicker1').timepicker();
</script> --}}
<script type="text/javascript">
    $('#timepicker').timepicker();

</script>
<script>
    var resizefunc = [];

</script>

@include('include.emp_footer')
</body>

</html>
