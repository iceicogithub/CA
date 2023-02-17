<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
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
        @include('path/navbar')
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
                                    <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
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
            @include('path/sidebar')
            <!-- partial -->

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <h5>Add Subject</h5>
                                <div class="card-block" style="margin:10px ;">
                                    <div class="card-block" style="margin:10px ;">
                                        <form class="form-material" id="" method="GET" action="" enctype="multipart/form-data">
                                            @if(Session::get('success'))
                                            <div class="alert alert-success" role="alert">
                                                {{Session::get('success')}}
                                            </div>
                                            @endif

                                            @if(Session::get('fail'))
                                            <div class="alert alert-fail"></div>
                                            {{Session::get('fail')}}
                                            @endif
                                            @csrf
                                            <input type="hidden" name="" value="">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group form-default">
                                                        <label>Cources </label>
                                                        <select class="form-control js-example-basic-single" name="cource" id="courses">
                                                            <option value="">-select option </option>
                                                            <?php

                                                            use Illuminate\Support\Facades\DB;

                                                            $cource = DB::table('cources')->get();
                                                            ?>
                                                            @foreach($cource as $c)
                                                            <option value="{{ $c->id }}">{{ $c->cource }}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group form-default">
                                                        <label class="float-label">Select-subject</label>
                                                        <select class="form-control js-example-basic-single" name="Subject_id" id="subject_name">
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group form-default">
                                                        <label class="float-label">Select-chapter</label>
                                                        <select class="form-control js-example-basic-single" name="Chapter_id" id="chapter_name">
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <button type="button" class="btn btn-primary" id="getQuestionList">search</button>
                                                    <!-- <a href="" class="btn btn-fix" style="background-color:gray;">Back</a> -->
                                                </div>
                                                <div class="col-md-12">
                                                    <p id="getIds"></p>                                                   
                                                </div>
                                            </div>
                                        </form>
                                    </div>


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
                                                    <td>cource_name</td>
                                                    <td>Subject_name </td>
                                                    <td>Chapter_name </td>
                                                    <td>Difficulty_level </td>
                                                    <td>Marks</td>
                                                    <td>Negative_Mark</td>
                                                    <td>question_type </td>
                                                    <td>Add_questions </td>
                                                    <td>Option_one</td>
                                                    <td>Option_two </td>
                                                    <td>Option_three </td>
                                                    <td>Option_four </td>
                                                    <td>Right_answer </td>
                                                    <td>optcheck_1 </td>
                                                    <td>optcheck_2 </td>
                                                    <td>optcheck_3 </td>
                                                    <td>optcheck_4 </td>
                                                    <td>Trues </td>
                                                    <td>Falses </td>
                                                    <td>Right_Tf </td>
                                                    <td>Subjective_Ans</td>
                                                    <td>Explan </td>
                                                    <td>Author</td>
                                                    <td>status </td>

                                                </tr>`
                                            </thead>
                                            <tbody id=tbody>



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
        $('#myDataTable').DataTable();
    });
</script>

<script>
    // fetch data from courses
    $('#courses').change(function() {
        var courcesID = $(this).val();
        // alert(courcesID);
        if (courcesID) {
            $.ajax({
                type: "GET",
                url: "{{ url('/unit/getSubjectList') }}",
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
                            // $("#chapter_name").append(`<option value="${value.id}">${ value.chapter_name }</option`);
                        });
                    } else {
                        $("#subject_name").empty();
                    }
                }
            });
        }
    });

    $('#subject_name').change(function() {
        var courcesID = $(this).val();
        // alert(courcesID);
        if (courcesID) {
            $.ajax({
                type: "GET",
                url: "{{ url('/unit/getchapterlist') }}",
                data: {
                    data: courcesID
                },
                success: function(res) {
                    console.log(res);
                    if (res) {
                        $("#chapter_name").empty();
                        $("#chapter_name").append('<option>Select Section</option>');
                        $.each(res, function(key, value) {

                            $("#chapter_name").append(`<option value="${value.id}">${ value.chapter_name }</option`);
                        });
                    } else {
                        $("#chapter_name").empty();
                    }
                }
            });
        }
    });



    $(document).ready(function() {
        $('#getQuestionList').on('click', function() {
            $('#tbody').empty();
            $('#tbody').append(' ');
            var course = $('#courses').val();
            var subject = $('#subject_name').val();
            var chapter = $('#chapter_name').val();
            // alert(chapter);
            $.ajax({
                type: "GET",
                url: "{{ url('/question/getQuestionList') }}",
                data: {
                    'chapter': chapter,
                    'subject': subject,
                    'course': course
                },
                success: function(res) {
                    // var res1 = res[0];
                    // var res2 = res[1];
                    // var getId = res[1][0];
                    // var getId = res[1][1];
                    // var getId = res[1][2];
                    // var getId = res[1][3];
                    // var getIds = getId.id;

                    console.log(res);
                    // $.each(res2, function(key, value){
                    //     var quesid = value.id;
                    //     // console.log(quesid);
                    //     $('#getIds').append(`<input type="text" id="getIds" value="${ quesid }">`)
                    // });

                    // var fetchId = $('#getIds').val();
                    // console.log(fetchId);


                    $.each(res, function(key, value) { 
                        console.log(res);                 
                        $('#tbody').append(`
                        <tr>
                        <td>${ value.cource }</td>
                        <td>${ value.subject_name }</td>
                        <td>${ value.chapter_name }</td>
                        <td>${ value.Difficulty_level }</td>
                        <td>${ value.Marks }</td>
                        <td>${ value.Negative_mark }</td>
                        <td>${ value.Question_type }</td>
                        <td>${ value.Add_question }</td>
                        <td>${ value.Option_one }</td>
                        <td>${ value.Option_two }</td>
                        <td>${ value.Option_three }</td>
                        <td>${ value.Option_four }</td>
                        <td>${ value.Right_answer }</td>
                        <td>${ value.optcheck_1 }</td>
                        <td>${ value.optcheck_2 }</td>
                        <td>${ value.optcheck_3 }</td>
                        <td>${ value.optcheck_4 }</td>
                        <td>${ value.Trues }</td>
                        <td>${ value.Falses }</td>
                        <td>${ value.Right_tf }</td>
                        <td>${ value.subjective_answer }</td>
                        <td>${ value.Explan }</td>
                        <td>${ value.author }</td>
                        <td>${ value.status }</td>
                        
                        @if(Auth::guard('admin')->check())
                        <td>
                            <a href="{{ url('/unit/edit/${ value.id }')}}" class="btn btn-success">Edit</a>
                            <a href="{{ url('/unit/delete/${ value.id }')}}" onclick="return myConfirm()" class="btn btn-danger">Delete</a>
                        </td>
                        @endif
                        </tr>`)
                    });
                }
            });
        });
    });
</script>

<script>
    function myConfirm() {
        var result = confirm("Want to delete?");
        if (result == true) {
            return true;
        } else {
            return false;
        }
    }
</script>



</html>