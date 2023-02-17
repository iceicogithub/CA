<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('path/head')
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
        crossorigin="anonymous"></script>

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
                            <small
                                class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See
                                All</small>
                        </div>
                        <ul class="chat-list">
                            <li class="list active">
                                <div class="profile"><img src="../../images/faces/face1.jpg" alt="image"><span
                                        class="online"></span></div>
                                <div class="info">
                                    <p>Thomas Douglas</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">19 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../../images/faces/face2.jpg" alt="image"><span
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
                                <div class="profile"><img src="../../images/faces/face3.jpg" alt="image"><span
                                        class="online"></span></div>
                                <div class="info">
                                    <p>Daniel Russell</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">14 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../../images/faces/face4.jpg" alt="image"><span
                                        class="offline"></span></div>
                                <div class="info">
                                    <p>James Richardson</p>
                                    <p>Away</p>
                                </div>
                                <small class="text-muted my-auto">2 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../../images/faces/face5.jpg" alt="image"><span
                                        class="online"></span></div>
                                <div class="info">
                                    <p>Madeline Kennedy</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">5 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../../images/faces/face6.jpg" alt="image"><span
                                        class="online"></span></div>
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
                            <div class="card p-3">
                                <div class="card-block" style="margin:10px ;">
                                    <form action="">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h3>Paper Name: <span id="paper_name">{{ $getppr }}</span></h3>
                                            </div>
                                            <div class="col-md-3">
                                                <?php
                                                $subjects = DB::table('subject')
                                                    ->where('id', $getsub)
                                                    ->first();
                                                ?>
                                                <h3>Subject:
                                                    <span id="sub">{{ $subjects->subject_name }}</span>
                                                    <span id="sub_id" class="d-none">{{ $subjects->id }}</span>
                                                </h3>
                                            </div>
                                            <div class="col-md-6 float-right d-flex">
                                                <div class="m-5 p-3" style="border: 1px solid #a79696; ">
                                                    <?php
                                                    $getCount = count($sques);
                                                    ?>
                                                    <h4 style="font-weight:bold">Question:
                                                        <span>{{ $getCount }}</span>
                                                    </h4>
                                                </div>
                                                <div class="m-5 p-3" style="border: 1px solid #a79696">
                                                    <h4 style="font-weight:bold">Total Marks:
                                                        <span id="totalmark">{{ $getmark }}</span>
                                                    </h4>
                                                </div>
                                                <div class="m-5 p-3" style="border: 1px solid #a79696">
                                                    <h4 style="font-weight:bold">Time:
                                                        <span id="time">{{ $gettime }}</span>
                                                    </h4>
                                                </div>
                                            </div>

                                            @foreach ($sques as $i => $sltt)
                                                <div class="col-12 mb-5"
                                                    style="border-bottom: 2px solid rgb(151, 146, 146);">
                                                    <label class="" for="">Question:</label>
                                                    <input type="text" id="changequesno" value="{{++$i}}">
                                                     <span>{{ strip_tags($sltt->Add_question) }}</span>


                                                    <span class="float-right">
                                                        <input type="text" name="changemark" id="changemark"
                                                            class="editmark" value="{{ $sltt->Marks }}"
                                                            onblur="changeMark({{ $sltt->id }})">Marks
                                                    </span>
                                                    <div>
                                                        <span>
                                                            @if ($sltt->Question_type == 'Single_Type_MCQs')
                                                                <ul class='d-flex'>
                                                                    <li class='m-3'>{{ $sltt->Option_one }}</li>
                                                                    <li class='m-3'>{{ $sltt->Option_two }}</li>
                                                                    <li class='m-3'>{{ $sltt->Option_three }}</li>
                                                                    <li class='m-3'>{{ $sltt->Option_four }}</li>
                                                                </ul>
                                                            @elseif ($sltt->Question_type == 'Multiple_Type_MCQs')
                                                                <ul class='d-flex text-bold'>";
                                                                    <li class='m-3'>{{ $sltt->Option_ones }} </li>
                                                                    <li class='m-3'> {{ $sltt->Option_twos }}</li>
                                                                    <li class='m-3'>{{ $sltt->Option_threes }}</li>
                                                                    <li class='m-3'>{{ $sltt->Option_fours }}</li>
                                                                </ul>
                                                            @elseif ($sltt->Question_type == 'True_false')
                                                                <ul class='d-flex m-2'>
                                                                    <li class='m-3'>{{ $sltt->Trues }}</li>
                                                                    <li class='m-3'>{{ $sltt->Falses }}</li>
                                                                </ul>
                                                            @endif
                                                            <ul class='d-flex'>
                                                                <li class='m-3'> {{ $sltt->Question_type }}</li>
                                                                <li class='m-3'>{{ $sltt->Difficulty_level }}</li>
                                                            </ul>
                                                        </span>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="btn btn-primary" id="save">Save</div>

                                        <div id="status" class="d-none"> {{ $getst }} </div>
                                        <div id="paper_type" class="d-none"> {{ $getpty }} </div>
                                        <div id="crs" class="d-none"> {{ $getcrs }} </div>
                                        <div id="chp" class="d-none"> {{ $getchp }} </div>
                                        <div id="quesid" class="d-none"> {{ $getid }} </div>
                                        <div id="inst" class="d-none"> {{ $getinst }} </div>
                                    </form>
                                </div>

                            </div>
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
    <script>
        var totalMarks = [];

        function changeMark(question_id) {
            let findMark = totalMarks.find(function(value, index) {
                return value.id == question_id;
            });

            var changemark = []
            $('.editmark').each(function() {
                changemark.push($(this).val());
            });
        
            var total = 0;
            for (var i = 0; i < changemark.length; i++) {
                total += changemark[i] << 0;
            }

            $('#totalmark').text(total);

            // var mark = changemark.toString();

            // if (!findMark) {

            //     totalMarks.push({
            //         id: question_id,
            //         mark: mark
            //     });
            // } else {
            //     let index = totalMarks.findIndex(function(value, index) {
            //         return value.id == question_id;
            //     })
            //     totalMarks.splice(index, 2);
            // }
            // $('#totalmark').text(totalMarks.reduce((n, {
            //     mark
            // }) => n + mark, 0));

        }
    </script>
    <script>
        $('#save').on('click', function() {
            var paper_name = $("#paper_name").text();
            var status = $("#status").text();
            var paper_type = $("#paper_type").text();
            var sub = $("#sub_id").text();
            var crs = $("#crs").text();
            var chp = $("#chp").text();
            var ids = $("#quesid").text();
            var totalmark = $("#totalmark").text();
            var changequesno = $("#changequesno").text();
            var instruction = $("#inst").text();
            var changemark = [];
            $('.editmark').each(function() {
                changemark.push($(this).val());
            });
            var changemk = changemark.toString();
            console.log(changemk)
            var time = $("#time").text();
            $.ajax({
                type: "GET",
                url: "{{ url('/storefinalquestionpaper') }}",
                data: {

                    'ppr': paper_name,
                    'st': status,
                    'pty': paper_type,
                    'sub': sub,
                    'crs': crs,
                    'chp': chp,
                    'id': ids,
                    "total_mark": totalmark,
                    "changed_mark": changemk,
                    "changed_quesno": changequesno,
                    "instruction": instruction,
                    'time': time,

                },
                success: function(response) {
                   

                }
            });

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


        });
    </script>
    <script></script>
</body>



</html>
