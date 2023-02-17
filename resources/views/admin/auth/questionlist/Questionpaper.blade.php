<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('path/head');
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    #chapter_name {
        display: none;
    }

    .fetch_div {
        display: none;
    }

    .upload_div {
        display: flex;
    }

    .goole_div {
        display: none;
    }

    .upload {
        display: none;
    }

    .save {
        display: none;
    }

    .paper-status1 {
        display: none;
    }
    .link-google-div{
        display: inline-block;
    }
</style>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        @include('path/admin_nav')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
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
                        <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab"
                            aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab"
                            aria-controls="chats-section">CHATS</a>
                    </li>
                </ul>
                <div class="tab-content" id="setting-content">
                    <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel"
                        aria-labelledby="todo-section">
                        <div class="add-items d-flex px-3 mb-0">
                            <form class="form w-100">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                                    <button type="submit" class="add btn btn-primary todo-list-add-btn"
                                        id="add-task">Add</button>
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
                        <div class="events pt-4 px-3">Comment
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
                            <small
                                class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See
                                All</small>
                        </div>
                        <ul class="chat-list">
                            <li class="list active">
                                <div class="profile"><img src="" alt="image"><span class="online"></span>
                                </div>
                                <div class="info">
                                    <p>Thomas Douglas</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">19 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="" alt="image"><span
                                        class="offline"></span></div>
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
                                <div class="profile"><img src="" alt="image"><span class="online"></span>
                                </div>
                                <div class="info">
                                    <p>Daniel Russell</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">14 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="" alt="image"><span
                                        class="offline"></span></div>
                                <div class="info">
                                    <p>James Richardson</p>
                                    <p>Away</p>
                                </div>
                                <small class="text-muted my-auto">2 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="" alt="image"><span class=""></span>
                                </div>
                                <div class="info">
                                    <p>Madeline Kennedy</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">5 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="" alt="image"><span class=""></span>
                                </div>
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
            <!-- partial:partials/_sidebar.html -->
            @include('path/admin_sidebar')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">

                    <div class="row">
                        <div class="col-md-12">

                            <div class="card">
                                <h5 style="margin-top:18px; margin-left:10px">Add Question Paper</h5>
                                <div class="row text-center ml-1">
                                    <div class="col-md-3 mx-1 upload_btn bg-primary p-2 text-white">Upload</div>
                                    <div class="col-md-3 mx-1 goole_btn  bg-primary p-2 text-white">Link</div>

                                    <div class="col-md-3 mx-1 fetch_btn bg-primary p-2 text-white">Fetch</div>
                                </div>
                                <div class="card-block">

                                    <div class="row goole_div">
                                    <form class="form-material" id="form" method="POST" action=""
                                    enctype="multipart/form-data">
                                    @csrf
                                            <div class="col-md-6 link-google-div">
                                                <div class="form-group form-default">
                                                    <label>Select Subject</label>
                                                    <select class="form-control js-example-basic-single"
                                                        name="subject" id="subject">
                                                        <option value="">-select select-</option>
                                                        @foreach ($subject as $s)
                                                            <option value="{{ $s->id }}">{{ $s->subject_name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 link-google-div">
                                                <div class="form-group form-default">
                                                    <label class="float-label">Google Form Link</label>
                                                    <input type="url" name="link" class="form-control"
                                                        id="google_link">
                                                </div>
                                            </div>
                                            <div class="col-md-5 link-google-div">
                                                <div class="form-group form-default">
                                                    <label class="float-label">Paper Name</label>
                                                    <input type="text" name="ppr_name" class="form-control"
                                                        id="ppr_name">
                                                </div>
                                            </div>
                                            <div class="col-md-5 link-google-div">
                                                <div class="form-group form-default">
                                                    <label>Status</label>
                                                    <select class="form-control js-example-basic-single"
                                                        name="status" id="status">
                                                        <option value="">-- select status -- </option>
                                                        <option value="1">Approved </option>
                                                        <option value="0">Rejected </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 link-google-div">
                                                <div class="form-group form-default">
                                                    <label>Paper Type</label>
                                                    <select class="form-control js-example-basic-single "
                                                        name="ppr_type" id="ppr_type">
                                                        <option value="">-- select type -- </option>
                                                        <option value="Subjective">Subjective</option>
                                                        <option value="Objective">Objective</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 link-google-div">
                                                <div class="form-group form-default">
                                                    <label class="float-label">Set Paper Time</label>
                                                    <input type="time" name="paper_time" class="form-control"
                                                        id="ppr_time">
                                                </div>
                                            </div>
                                            <div class="col-md-3  link-google-div">
                                                <label class="float-label">Total Marks:</label>
                                                <input type="text" name="total_mark" class="form-control"
                                                    id="mark" placeholder="Enter Total Mark Here">
                                            </div>
                                            <div class="col-md-12 mt-3 link-google-div">
                                                <button type="button" class="btn btn-primary"
                                                    id="proceed">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="fetch_div">
                                    <form class="form-material" id="form" method="POST" action=""
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row p-3">
                                            <div class="col-md-4">
                                                <div class="form-group form-default">
                                                    <label>Cources </label>
                                                    <select class="form-control js-example-basic-single"
                                                        name="cource" id="courses">
                                                        <option value="">-select option </option>
                                                        <?php
                                                        
                                                        use Illuminate\Support\Facades\DB;
                                                        
                                                        $cource = DB::table('cources')->get();
                                                        ?>
                                                        @foreach ($cource as $c)
                                                            <option value="{{ $c->id }}">{{ $c->cource }}
                                                            </option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-default">
                                                    <label class="float-label">Select-subject</label>
                                                    <select class="form-control js-example-basic-single"
                                                        name="Subject_id" id="subject_name">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row" id="chapterbody">


                                                </div>
                                            </div>
                                            <table class="table">
                                                <tbody id="chapterbody">

                                                </tbody>
                                            </table>

                                            <div class="col-md-12 mt-3">
                                                <button type="button" class="btn btn-primary"
                                                    id="submit">Save</button>

                                                <div id="chapterId" class="d-none"></div>
                                                <div id="paperid" class="d-none"></div>
                                                <div id="statusid" class="d-none"></div>
                                                <div id="typeid" class="d-none"></div>
                                                <div id="subjectid" class="d-none"></div>
                                                <div id="courceids" class="d-none">
                                                </div>
                                                <button type="button" id="pro"
                                                    class="btn btn-success msg d-none">Proceed</button>
                                            </div>


                                        </div>
                                    </form>
                                </div>


                                <form action="{{ route('fileUpload') }}" method="post" enctype="multipart/form-data"
                                    class="upload_div">

                                    @csrf

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group form-default">
                                                <label>Select Subject</label>
                                                <select class="form-control js-example-basic-single"
                                                    name="subject" id="subject">
                                                    <option value="">-select select-</option>
                                                    @foreach ($subject as $s)
                                                        <option value="{{ $s->id }}">{{ $s->subject_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="float-label">Upload Question Sheet</label>
                                            <input type="file" name="quefile" id="chooseFile"
                                                class="form-control">

                                        </div>

                                        <div class="col-sm-4">
                                            <label class="float-label">Upload Answer Sheet</label>
                                            <input type="file" name="ansfile" id="chooseFile"
                                                class="form-control">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="float-label">Paper Name</label>
                                            <input type="text" name="paper_name" class="form-control"
                                                id="paper_name">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-default">
                                                <label>Paper Type</label>
                                                <select class="form-control js-example-basic-single "
                                                    name="paper_type" id="paper_type">
                                                    <option value="">-- select type -- </option>
                                                    <option value="Subjective">Subjective</option>
                                                    <option value="Objective">Objective</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-default">
                                                <label class="float-label">Set Paper Time</label>
                                                <input type="time" name="paper_time" class="form-control"
                                                    id="paper_time">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="float-label">Total Marks:</label>
                                            <input type="text" name="total_mark" class="form-control"
                                                id="storeMarks" placeholder="Enter Total Mark Here">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-default">
                                                <label>Status</label>
                                                <select class="form-control js-example-basic-single" name="status"
                                                    id="status">
                                                    <option value="">-- select status -- </option>
                                                    <option value="1">Approved </option>
                                                    <option value="0">Rejected </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <button type="submit" name="submit" class="btn btn-primary  mt-4"
                                                style="border-collapse: collapse;">
                                                Save
                                            </button>

                                            @if ($message = Session::get('success'))
                                                <div class="alert alert-success">
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                            @endif
                                            @if (count($errors) > 0)
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    {{-- <script type="text/javascript">
        $(document).ready(function() {
            $('#select_all').on('click', function() {
                if (this.checked) {
                    $('.checkbox').each(function() {
                        this.checked = true;
                    });
                } else {
                    $('.checkbox').each(function() {
                        this.checked = false;
                    });
                }
            });

            $('.checkbox').on('click', function() {
                if ($('.checkbox:checked').length == $('.checkbox').length) {
                    $('#select_all').prop('checked', true);
                } else {
                    $('#select_all').prop('checked', false);
                }
            });
        });
    </script> --}}
    <script>
        $(document).ready(function() {
            // var p_type = $("#p-type").val();
            // console.log(p_type);
            // if(p_type == 2){
            //       $("#chapter_name").css("display", "block");

            //     }

            $('#courses').change(function() {
                var courcesID = $(this).val();
                // alert(courcesID);
                if (courcesID) {
                    $.ajax({
                        type: "GET",
                        url: "{{ url('/questionpaper/getSubjectList') }}",
                        data: {
                            data: courcesID
                        },
                        success: function(res) {
                            console.log(res);
                            if (res) {
                                $("#subject_name").empty();
                                $("#subject_name").append('<option>Select Section</option>');
                                $.each(res, function(key, value) {
                                    $("#subject_name").append(
                                        `<option value="${value.id}">${ value.subject_name }</option`
                                    );
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
                        url: "{{ url('/questionPaper/getchapterlist') }}",
                        data: {
                            data: courcesID
                        },
                        success: function(res) {
                            console.log(res);
                            if (res) {
                                $("#chapterbody").empty();
                                $("#chapterbody").append(
                                    '<div class="col-md-12"<h6>select Chapter</h6></div>');
                                $.each(res, function(key, value) {

                                    $("#chapterbody").append(`<div class="col-md-4" style="border:1px solid #dad0d0; border-collapse:collapse; padding:5px 50px; text-align:center; font-size:26px"><input type="checkbox"  class="checkbox" id="chk" name="chk" size="20px" style="height:13px; margin:10px" value='${value.id}'>${value.chapter_name}
                                   <span class="upto d-none">${value.id}</span>
                                   </div>`);
                                });
                            } else {
                                $("#chapter_name").empty();
                            }
                        }
                    });
                }
            });
            // $('#fetch').on('click', function() {
            //     $('#tbody').empty();
            //     // var s_type = $(".s-type").val();

            //     var subject = $(".subject").val();
            //     $.ajax({
            //         type: "GET",
            //         url: "{{ url('/questionPaper/getQuestionPaperList') }}",
            //         data: {
            //             // "s_type": s_type,
            //             // "p_type": p_type,
            //             "subject": subject,
            //         },
            //         success: function(res) {

            //             $.each(res, function(key, value) {
            //                 $('#tbody').append(`
        //               <tr>
        //               <td><input type="checkbox"  class="checkbox" value='${value.id}'></td>
        //               <td>${ value.Marks }</td>
        //               <td>${ value.Question_type }</td>
        //               <td>${ value.Add_question }</td>
        //               <td>${ value.Option_one }</td>
        //               <td>${ value.Option_two }</td>
        //               <td>${ value.Option_three }</td>
        //               <td>${ value.Option_four }</td>
        //               <td>${ value.Right_answer }</td>
        //               <td>${ value.optcheck_1 }</td>
        //               <td>${ value.optcheck_2 }</td>
        //               <td>${ value.optcheck_3 }</td>
        //               <td>${ value.optcheck_4 }</td>
        //               <td>${ value.Trues }</td>
        //               <td>${ value.Falses }</td>
        //               <td>${ value.Explan }</td>
        //               </tr>`)
            //             });
            //         }
            //     });
            // });
        });
    </script>
    <script>
        $(document).ready(function(e) {
            e.preventDefault
            // $("#subject_name").on('change', function(){
            //     var getC = $(".upto").text();
            //     console.log(getC);
            // });
            $('#submit').on('click', function() {


                // var chapterName = [];
                var chapter_Name = [];
                $('.checkbox').each(function() {
                    if ($(this).is(":checked")) {
                        chapter_Name.push($(this).val());
                    }
                });
                var remove_Item = 'on';
                chapter_Name = $.grep(chapter_Name, function(value) {
                    return value != remove_Item;
                });
                var chapterName = chapter_Name.toString();
                var cource = $("#courses").val();
                var subject = $("#subject_name").val()
                $.ajax({
                    type: "GET",
                    url: "{{ url('/storequestionpaper') }}",
                    data: {

                        "subject": subject,
                        "cource": cource,
                        "chapterName": chapterName,

                    },

                    success: function(res) {
                        $(".msg").removeClass("d-none");
                        $(".msg").addClass("d-inline");
                        setTimeout(function() {
                            $("#form")[0].reset();
                        }, 5000);
                        var cor = res[0]
                        var suj = res[1];
                        var chpid = res[2];

                        $("#courceids").text(cor);
                        $("#subjectid").text(suj);
                        $("#chapterId").text(chpid);

                    }
                });


                $('#pro').on('click', function() {
                    var crsId = $("#courceids").text();
                    var subId = $("#subjectid").text();
                    var getId = $("#chapterId").text();

                    $.ajax({
                        type: "GET",
                        url: "{{ url('/fetchquestion/paper') }}",
                        data: {
                            'crsId': crsId,
                            'subId': subId,
                            'ids': getId
                        },
                        success: function(resp) {
                            var getcrs = resp[0];
                            var getsub = resp[1];
                            var getchp = resp[2];
                            window.location.href = "/getQuestionId?getcrs=" + getcrs +
                                "&getsub=" + getsub + "&getchp=" + getchp;

                        }
                    });
                });
            });
            $('#proceed').on('click', function() {
                var subject = $("#subject").val();
                var link = $("#google_link").val();
                var ppr_name = $("#ppr_name").val();
                var ppr_type = $("#ppr_type").val();
                var status = $("#status").val();
                var ppr_time = $("#ppr_time").val();
                var mark = $("#mark").val();

                
                $.ajax({
                    type: "GET",
                    url: "{{ url('/storelink') }}",
                    data: {
                        'subject': subject,
                        'link': link,
                        'ppr_name': ppr_name,
                        'ppr_type': ppr_type,
                        'status': status,
                        'ppr_time': ppr_time,
                        'mark': mark,
                    },
                    success: function(resp) {


                    }
                });
            });

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

        });
    </script>

    <script>
        function block(select) {
            if (select.value == '2') {
                document.getElementById('chapter_name').style.display = 'block';
            }
            if (select.value == '1' || select.value == '') {
                document.getElementById('chapter_name').style.display = 'none';
            }
        }
    </script>
    <script>
        $(document).ready(function(e) {
            $('.goole_btn').on('click', function() {
                $(".goole_div").css("display", "block");
                $(".upload_div").css("display", "none");
                $(".fetch_div").css("display", "none");
                $(".save").css("display", "block");
                $(".upload").css("display", "none");
                $(".paper-status1").css("display", "flex");

            });
            $('.fetch_btn').on('click', function() {
                $(".fetch_div").css("display", "block");
                $(".goole_div").css("display", "none");
                $(".upload_div").css("display", "none");
                $(".upload").css("display", "none");
                $(".save").css("display", "block");
                $(".paper-status1").css("display", "flex");

            });
            $('.upload_btn').on('click', function(e) {
                $(".upload_div").css("display", "block");
                $(".goole_div").css("display", "none");
                $(".fetch_div").css("display", "none");
                $(".save").css("display", "none");
                $(".upload").css("display", "block");
                $(".paper-status1").css("display", "none");
                e.preventDefault();
                //           $.ajax({
                //     type : 'POST',
                //     url : 'url',
                //     data : $('#upload_div').serialize()
                // });

            });
        });
    </script>
</body>

</html>
