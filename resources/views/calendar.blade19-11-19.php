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
<script>
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();

    document.write(today);
    today = yyyy + '-' + mm + '-' + dd;
    // alert(today);
    document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: ['interaction', 'dayGrid', 'timeGrid', 'list'],
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
            },

            navLinks: true, // can click day/week names to navigate views
            businessHours: true, // display business hours
            editable: true,
            events: [{
                    start: today,
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
        max-width: 900px;
        margin: 0 auto;
    }

</style>
<style>
    .hei {
        height: 60vh;
    }

    body {}

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

<body>


    <div class="content-page">
        <div class="content">
            <div class="row">
                <div class="col-md-5 ">
                    <div class="card">

                        <div class="card-body hei">

                            <div id='calendar'></div>

                        </div>
                    </div>

                </div>
                <div class="col-md-7">
                    <ul class="nav nav-tabs tabs" role="tablist">
                        <li class="nav-item tab">
                            <a class="nav-link active" id="profile-tab-2" data-toggle="tab" href="#profile-2" role="tab"
                                aria-controls="profile-2" aria-selected="true">
                                <!-- $con=count($tbl_interview_add); -->
                                <span class="d-none d-sm-block">Interviews </span>
                            </a>
                        </li>
                        <li class="nav-item tab">
                            <a class="nav-link" id="message-tab-2" data-toggle="tab" href="#message-2" role="tab"
                                aria-controls="message-2" aria-selected="false">
                                <span class="d-none d-sm-block">Meetings</span>
                            </a>
                        </li>
                        <li class="nav-item tab">
                        </li>
                        <li class="nav-item tab">
                        </li>
                    </ul>
                    <div class="tab-pane" id="profile-2" role="tabpanel" aria-labelledby="profile-tab-2">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title"
                                            style="color:white;text-transform: none; font-size:large">
                                            Interviews
                                            <a href="{{url('employer/dashboard/interview-meeting/add')}}"><button
                                                    type="button" class="btn btn-success" style="float: right;">Add an
                                                    Interview</button></a>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table id="datatable"
                                                        class="table table-striped table-bordered dt-responsive nowrap"
                                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                        <thead>
                                                            <tr>
                                                                <th>Candidate</th>
                                                                <th>Date</th>
                                                                <th>Time</th>
                                                                <th>Time Zone</th>
                                                                <th>Job Code</th>
                                                                <th>Type</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($toReturn['interviewall'] as $r)


                                                            <tr>

                                                            <?php $ida=$r->job_ID; 
                                                            $date_application=$r->interview_date;
                                                            $new_date = date("m-d-Y", strtotime($date_application));
                                                            $data_time = DB::table('tbl_time_zone')->where('time_zone_name',$r->time_zone)->first();
                                                            $static_time = $data_time->change_time;
                                                            $cal_value = $data_time->cal_value;
                                                            if($cal_value == "+"){
                                                                $secs = strtotime($r->from_time)-strtotime("00:00");
                                                                $result = date("H:i A",strtotime($static_time)+$secs);
                                                            }
                                                            else{
                                                                $secs = strtotime($r->from_time)-strtotime("00:00");
                                                                $result = date("H:i A",strtotime($static_time)-$secs);
                                                            }
                                                            // $secs = strtotime($r->from_time)-strtotime("00:00");
                                                            // $result = date("H:i",strtotime($static_time)+$secs);
                                                            // $secs = strtotime("1:00")-strtotime("00:00");
                                                            // $result = date("H:i",strtotime("1:00")+$secs);
                                                            ?>
                                                                <td>{{$r->candiate_name}}</td>
                                                                <td>{{$new_date}}</td>
                                                                <td>{{$result}}</td>
                                                                <td>{{$r->time_zone}}</td>
                                                                <td>{{$r->job_ID}}</td>
                                                                <td>{{$r->interview_type}}</td>

                                                                <td class="actions">
                                                                    <a href="{{url('employer/dashboard/interview-meeting-intedit'.$ida)}}"
                                                                        class="hidden on-editing login-row"
                                                                        data-placement="top" title=""
                                                                        data-toggle="tooltip"
                                                                        data-original-title="Edit"><i
                                                                            class="fa fa-pencil"></i></a>
                                                                    <a href="{{url('employer/dashboard/interview-meeting-intdel'.$ida)}}"
                                                                        class="on-default edit-row"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        title="" data-original-title="delete"><i
                                                                            class="fa fa-trash-o"></i></a>

                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!--end of col-->
                                        </div>
                                        <!--end of row-->
                                    </div>
                                    <!--end of card body-->
                                </div>
                            </div>
                        </div> <!-- End Row -->
                    </div>
                    <!--end of tabpenel-->

                    <div class="tab-pane" id="message-2" role="tabpanel" aria-labelledby="message-tab-2">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title"
                                            style="color:white;text-transform: none; font-size:large">
                                            Meetings
                                            <a href="{{url('employer/dashboard/interview-meeting-tab/add')}}"><button
                                                    type="button" class="btn btn-success"
                                                    style="float: right; margin-right: 1em;">Add a Meeting</button></a>
                                        </h3>
                                    </div>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table id="datatable-responsive"
                                                        class="table table-striped table-bordered dt-responsive nowrap"
                                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                        <thead>
                                                            <thead>
                                                                <tr>
                                                                    <th>Date</th>
                                                                    <th>Time</th>
                                                                    <th>Subject</th>
                                                                    <th>Time Zone</th>
                                                                    <th>Participants</th>
                                                                    <th>Actions</th>
                                                                </tr>
                                                            </thead>
                                                        <tbody>
                                                            @foreach ($toReturn['meetingall'] as $i)


                                                            <tr>
                                                                <?php $id=$i->meeting_ID;
                                                                $date_application1=$i->meeting_date;
                                                                $new_date1 = date("m-d-Y", strtotime($date_application1));
                                                                $data_time = DB::table('tbl_time_zone')->where('time_zone_name',$i->timezone)->first();
                                                                $static_time = $data_time->change_time;
                                                                $cal_value = $data_time->cal_value;
                                                                if($cal_value == "+"){
                                                                    $secs = strtotime($i->meeting_time)-strtotime("00:00");
                                                                    $result = date("H:i A",strtotime($static_time)+$secs);
                                                                }
                                                                else{
                                                                    $secs = strtotime($i->meeting_time)-strtotime("00:00");
                                                                    $result = date("H:i A",strtotime($static_time)-$secs);
                                                                }
                                                                ?>
                                                                <td>{{$new_date1}}</td>
                                                                <td>{{$result}}</td>
                                                                <td>{{$i->subject}}</td>
                                                                <td>{{$i->timezone}}</td>
                                                                <td>{{$i->participants}}</td>




                                                                <td class="actions">

                                                                    <a href="{{url('employer/dashboard/interview-meeting-up'.$id)}}"
                                                                        class="hidden on-editing login-row"
                                                                        data-placement="top" title=""
                                                                        data-toggle="tooltip"
                                                                        data-original-title="Edit"><i
                                                                            class="fa fa-pencil"></i></a>
                                                                    <a href="{{url('employer/dashboard/interview-meeting-del'.$id)}}"
                                                                        title="delete"
                                                                        class="hidden on-editing login-row"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        data-original-title="delete"><i
                                                                            class="fa fa-trash-o"></i></a>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!--end of col-->
                                        </div>
                                        <!--end of row-->
                                    </div>
                                    <!--end of card body-->
                                </div>
                            </div> <!-- End Row -->
                        </div>
                    </div>
                </div>
            </div>
            <!--end of col-->
        </div>
        <!--end of row-->
    </div>
</body>

<!--Model-->
<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
    Launch demo modal
  </button> --}}



<script>
    $('#timepicker').timepicker();
    $('#timepicker1').timepicker();
    $('#timepicker3').timepicker();

</script>
<!--end of content-->
@include('include.emp_footer')