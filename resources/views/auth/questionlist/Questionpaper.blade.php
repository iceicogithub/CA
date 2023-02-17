<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('path/head')
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
</style>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        @include('path/navbar')
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
            @include('path/sidebar')
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
                                <div class="card-block" style="margin:10px ;">
                                    <form class="form-material" id="form" method="POST" action=""
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="" value="">

                                        <div class="row goole_div">
                                            <div class="col-md-6 ">

                                                <br />
                                                <div class="form-group form-default">
                                                    <label class="float-label">Google Form Link</label>
                                                    <input type="text" name="cource" class="form-control"
                                                        id="google_link">
                                                    <span class="form-bar"></span>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="fetch_div">
                                            <div class="row">

                                                <div class="col-md-4">
                                                    <div class="form-group form-default">
                                                        <label>Subject</label>
                                                        <select class="form-control js-example-basic-single subject"
                                                            name="status">
                                                            <option value="">--select option-- </option>
                                                            @foreach ($subject as $c)
                                                                <option value="{{ $c->id }}">
                                                                    {{ $c->subject_name }} </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group form-default">
                                                        <label>Paper Type</label>
                                                        <select class="form-control js-example-basic-single "
                                                            name="status" id="p-type" onchange="block(this)">
                                                            <option value="">-- select type -- </option>
                                                            <option value="1">Full Syllabus </option>
                                                            <option value="2">Chapter wise</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-4" id="chapter_name">
                                                    <div class="form-group form-default">
                                                        <label>Chater Name</label>
                                                        <select class="form-control js-example-basic-single"
                                                            name="status">
                                                            <option value="">-- select type -- </option>

                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="float-right">
                                                <button type="button" class="btn btn-primary ml-auto m-3"
                                                    id="fetch">Fetch</button>
                                            </div>
                                            <div class="dt-responsive table-responsive" style="margin-top:20px ;">
                                                <table id="myDataTable"
                                                    class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <td> <input type="checkbox" id="select_all"
                                                                    name="category[]"> </td>
                                                            <td>Marks </td>
                                                            <td>question_type </td>
                                                            <td>questions </td>
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
                                                            <td>Explanation </td>
                                                        </tr>
                                                    </thead>
                                                    <tbody id=tbody></tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row paper-status1">
                                            <div class="col-md-6">
                                                <div class="form-group form-default">
                                                    <label class="float-label">Paper Name</label>
                                                    <input type="text" name="cource" class="form-control"
                                                        id="paper_name">
                                                    <span class="form-bar"></span>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
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

                                            <div class="col-md-12">
                                                <button type="button" class="btn btn-primary"
                                                    id="submit">Save</button>
                                                <span class="text-white msg d-none p-2 bg-success mx-2"> Question Paper
                                                    Created </span>
                                                <!-- <a href="" class="btn btn-fix" style="background-color:gray;">Back</a> -->
                                            </div>

                                        </div>
                                    </form>
                                    <form action="{{ route('fileUpload') }}" method="post"
                                        enctype="multipart/form-data" class="upload_div">

                                        @csrf

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label class="float-label">Upload Question Sheet</label>
                                                <input type="file" name="quefile" id="chooseFile"
                                                    class="form-control">

                                            </div>

                                            <div class="col-sm-6">
                                                <label class="float-label">Upload Answer Sheet</label>
                                                <input type="file" name="ansfile" id="chooseFile"
                                                    class="form-control">
                                            </div>
                                            <div class="col-sm-6 my-2">
                                                <label class="float-label">Paper Name</label>
                                                <input type="text" name="paper_name" class="form-control"
                                                    id="paper_name">
                                            </div>

                                            <div class="col-md-6">
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
                                            <div class="col-md-12">
                                                <button type="submit" name="submit" class="btn btn-primary  mt-4">
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
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <script src="vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="js/dataTables.select.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <script src="js/Chart.roundedBarCharts.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript">
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
    </script>
    <script>
        $(document).ready(function() {
            // var p_type = $("#p-type").val();
            // console.log(p_type);
            // if(p_type == 2){
            //       $("#chapter_name").css("display", "block");
            //     }
            $('#fetch').on('click', function() {
                $('#tbody').empty();
                // var s_type = $(".s-type").val();

                var subject = $(".subject").val();
                $.ajax({
                    type: "GET",
                    url: "{{ url('/questionPaper/getQuestionPaperList') }}",
                    data: {
                        // "s_type": s_type,
                        // "p_type": p_type,
                        "subject": subject,
                    },
                    success: function(res) {

                        $.each(res, function(key, value) {
                            $('#tbody').append(`
                          <tr>
                          <td><input type="checkbox"  class="checkbox" value='${value.id}'></td>
                          <td>${ value.Marks }</td>
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
                          <td>${ value.Explan }</td>
                          </tr>`)
                        });
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function(e) {
            e.preventDefault
            $('#submit').on('click', function() {

                var question_papers_ids = [];
                $('.checkbox:checked').each(function() {
                    question_papers_ids.push($(this).val());
                });
                var remove_Item = 'on';
                question_papers_ids = $.grep(question_papers_ids, function(value) {
                    return value != remove_Item;
                });
                var names_str = question_papers_ids.toString();


                // var formData =new FormData(this);
                var paper_name = $("#paper_name").val();
                var status = $("#status").val();
                var google_link = $("#google_link").val();
                console.log(google_link);


                $.ajax({
                    type: "POST",
                    url: "{{ url('/storequestionpaper') }}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "google_link": google_link,
                        "names_str": names_str,
                        "paper_name": paper_name,
                        "status": status,
                    },
                    // data:formData,
                    success: function(res) {
                        $(".msg").removeClass("d-none");
                        $(".msg").addClass("d-inline");
                        setTimeout(function() {
                            $('.msg').addClass("d-none");
                            $('.msg').removeClass("d-inline");
                            $("#form")[0].reset();
                        }, 5000);

                    }
                });
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
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
