<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script src="https://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>
    <link href="https://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet" />

    @include('path/head')
</head>

<style>
    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: white;
        background-clip: border-box;

        border-radius: 20px;
    }
</style>


<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        @include('path/admin_nav')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="ti-settings"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close ti-close"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>
            <div id="right-sidebar" class="settings-panel">
                <i class="settings-close ti-close"></i>
                <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
                    </li>
                </ul>
                <div class="tab-content" id="setting-content">
                    <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
                        <div class="add-items d-flex px-3 mb-0">
                            <form class="form w-100">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                                    <button type="button" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                                </div>
                            </form>
                        </div>
                        <div class="list-wrapper px-3">
                            <ul class="d-flex flex-column-reverse todo-list">
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Team review meeting at 3.00 PM
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Prepare for presentation
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Resolve all the low priority tickets due today
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked>
                                            Schedule meeting for next week
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked>
                                            Project review
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                            </ul>
                        </div>
                        <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
                        <div class="events pt-4 px-3">
                            <div class="wrapper d-flex mb-2">
                                <i class="ti-control-record text-primary mr-2"></i>
                                <span>Feb 11 2018</span>
                            </div>
                            <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
                            <p class="text-gray mb-0">The total number of sessions</p>
                        </div>
                        <div class="events pt-4 px-3">
                            <div class="wrapper d-flex mb-2">
                                <i class="ti-control-record text-primary mr-2"></i>
                                <span>Feb 7 2018</span>
                            </div>
                            <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                            <p class="text-gray mb-0 ">Call Sarah Graves</p>
                        </div>
                    </div>
                    <!-- To do section tab ends -->
                    <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                            <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
                        </div>
                        <ul class="chat-list">
                            <li class="list active">
                                <div class="profile"><img src="../../images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Thomas Douglas</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">19 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../../images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                                <div class="info">
                                    <div class="wrapper d-flex">
                                        <p>Catherine</p>
                                    </div>
                                    <p>Away</p>
                                </div>
                                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                                <small class="text-muted my-auto">23 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../../images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Daniel Russell</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">14 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../../images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                                <div class="info">
                                    <p>James Richardson</p>
                                    <p>Away</p>
                                </div>
                                <small class="text-muted my-auto">2 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../../images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Madeline Kennedy</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">5 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../../images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Sarah Graves</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">47 min</small>
                            </li>
                        </ul>
                    </div>
                    <!-- chat tab ends -->
                </div>
            </div>
            <!-- partial -->
            <!-- partial:../../partials/_sidebar.html -->
            @include('path/admin_sidebar')
            <!-- partial -->

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <h5 style="margin-top:18px; margin-left:10px">Add Quiz</h5>
                                <div class="alert alert-success d-none"> Data insert successfully </div>
                                <div class="card-block" style="margin:10px ;">
                                    <form class="form-material" id="" method="" action="" enctype="multipart/form-data">

                                        @csrf
                                        <input type="hidden" name="" value="">
                                        <div class="row">
                                            <?php
                                            // $quiz = DB::table('Questions_models')->get();
                                            ?>
                                            <div class="col-md-12">
                                                <div class="row">

                                                    <!-- <label class="float-label">Quiz_Questions</label><br> -->
                                                    @foreach($quiz as $q)
                                                    <div class="col-md-6">
                                                        <input type="checkbox" name="" class="checkbox" id="" value="{{$q->id}}">
                                                        <span class="">{!!$q->Add_question!!}</span>

                                                    </div>
                                                    @endforeach

                                                </div>
                                                <br><br><br>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group form-default">
                                                    <label>Cources </label>
                                                    <select class="form-control js-example-basic-single" name="cource_id" id="courses">
                                                        <option value="">-select option </option>
                                                        @foreach($cource as $c)
                                                        <option value="{{ $c->id }}">{{ $c->cource }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group form-default">
                                                    <label class="float-label">- Select subject</label>
                                                    <select class="form-control js-example-basic-single" id="subject_name" name="subject_id">

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-4">

                                                <!-- <label class="float-label">Set Paper Time</label> -->
                                                <input type="text" id="time" placeholder="Time" name="duration">
                                            </div>

                                            <!--<div class="col-md-6">  
                                                <div class="form-group form-default">
                                                    <label class="float-label">Images</label>
                                                    <input type="file" name="image" class="form-control" id="">
                                                    <span class="form-bar"></span>

                                                </div>
                                            </div> -->

                                            <div class="col-md-12">
                                                <button type="button" class="btn btn-primary" id="Submit">Submit</button>
                                                <a href="" class="btn btn-fix" style="background-color:gray;">Back</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Zero config.table start -->
                            <div class="card" style="margin-top:30px ; padding:0 20px">
                                <h5 style="margin-top:20px;">Subject List</h5>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive" style="margin-top:20px ;">
                                        <table id="myDataTable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Course_Name</th>
                                                    <th>Chapter_Name</th>

                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Zero config.table end -->
                        </div>
                    </div>

                </div>

            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->

            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/template.js"></script>
    <script src="../../js/settings.js"></script>
    <script src="../../js/todolist.js"></script>

    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <!-- endinject -->
</body>



<script>
    $(document).ready(function() {

        // fetch data from courses
        $('#courses').change(function() {
            var courcesID = $(this).val();
            // alert(courcesID);
            if (courcesID) {
                $.ajax({
                    type: "GET",
                    url: "{{ url('/quizs/getSubjectList') }}",
                    data: {
                        data: courcesID
                    },
                    success: function(res) {
                        console.log(res);
                        if (res) {
                            $("#subject_name").empty();
                            $("#subject_name").append('<option>Select Section</option>');
                            $.each(res, function(key, value) {
                                $("#subject_name").append(`<option value="${value.id}">${ value.subject_name }</option`);
                            });
                        } else {
                            $("#subject_name").empty();
                        }
                    }
                });
            }
        });
    });
    $('#Submit').on('click', function() {
        // var form_data = $(this).serialize();
        var getids = [];
        $(".checkbox").each(function() {

            if ($(this).is(":checked")) {
                getids.push($(this).val());

            }
        });
        var remove_Item = 'on';
        getids = $.grep(getids, function(value) {
            return value != remove_Item;
        });
        var getquiz = getids.toString();

        var courses = $('#courses').val();
        // console.log(courses);
        var subject = $('#subject_name').val();

        var duration = $('#time').val();


        $.ajax({
            type: "POST",
            url: "{{ url('/quiz/store') }}",
            data: {

                'courses': courses,
                'sub': subject,
                'get': getquiz,
                'duration': duration,


            },

            success: function(res) {
                $('.alert-success').removeClass('d-none');

                $("#cform")[0].reset();
                console.log(res);
                // var get = $getids,
                //  console.log(getids)

            }
        });
    });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script>
    var timepicker = new TimePicker('time', {
        lang: 'en',
        theme: 'dark'
    });
    
    timepicker.on('change', function(evt) {

        var value = (evt.hour || '00') + ':' + (evt.minute || '00');
        evt.element.value = value;

    });
</script>





</html>