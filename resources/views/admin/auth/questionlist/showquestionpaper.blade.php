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
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Instruction</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="instruction"
                                    placeholder="Enter Instruction Here">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            id="close">Close</button>
                        <button type="button" class="btn btn-primary" id="Submit">Proceed</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_settings-panel.html -->
        <!-- partial -->
        <!-- partial:../../partials/_sidebar.html -->
        @include('path/admin_sidebar')
        <!-- partial -->

        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <h5 style="margin-top:18px; margin-left:10px">Add Cources</h5>
                            <div class="card-block" style="margin:10px ;">
                                <form class="form-material" id="" method="POST" action=""
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group form-default">
                                                <label class="float-label">Paper Name</label>
                                                <input type="text" name="cource" class="form-control"
                                                    id="paper_name">
                                                <span class="form-bar"></span>

                                            </div>
                                        </div>
                                        <div class="col-md-4">
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
                                        <div class="col-md-4">
                                            <div class="form-group form-default">
                                                <label>Paper Type</label>
                                                <select class="form-control js-example-basic-single " name="status"
                                                    id="paper_type">
                                                    <option value="">-- select type -- </option>
                                                    <option value="Subjective">Subjective</option>
                                                    <option value="Objective">Objective</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group form-default">
                                                <label class="float-label">Set Paper Time</label>
                                                <input type="time" name="paper_time" class="form-control"
                                                    id="paper_time">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <label class="float-label">Total Marks:</label>
                                            <input type="text" name="Total Marks" class="form-control"
                                                id="storeMarks">
                                        </div>
                                        <form action="{{ url('/getQuestionId')}}" method="GET">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Search Here</label>
                                                <input type="search" name="search" class="form-control" placeholder="Search here by name or email" value="{{$search}}">
                                                
                                            </div>
                                        </div>
                                        <div class="col-ms-2">
                                            <a href=""><button class="btn btn-primary mt-4" type="button">Search</button></a>
                                        </div>
                                    </form>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <?php
                                                $getCount = count($qus);
                                                ?>
                                                <div class="card-block">
                                                    <div class="row">
                                                        <div class="col-md-12 mt-3" id="quesids">
                                                            <h3>Suggested Question<span
                                                                    style="color: rgb(227, 72, 72)">(<?php echo $getCount; ?>)</span>
                                                            </h3>
                                                            @foreach ($qus as $i => $ques)
                                                                <div style='border:1px solid #a68b8b; padding:10px'>
                                                                    <h3><input type="checkbox" class='checkbox'
                                                                            onClick="check({{ $ques->id }} , {{ $ques->Marks }})"
                                                                            name='question' style='height: 20px;'
                                                                            value="{{ $ques->id }}">
                                                                    </h3>
                                                                    <span>
                                                                        <h4>Question {{ ++$i }}</h4>
                                                                    </span>
                                                                    <h1> {!! $ques->Add_question !!}</h1>
                                                                    @if ($ques->Question_type == 'Single_Type_MCQs')
                                                                        <ul class='d-flex'>
                                                                            <li class='m-3'>
                                                                                <h4>{{ $ques->Option_one }}</h4>
                                                                            </li>
                                                                            <li class='m-3'>
                                                                                <h4>{{ $ques->Option_two }}</h4>
                                                                            </li>
                                                                            <li class='m-3'>
                                                                                <h4>{{ $ques->Option_three }}
                                                                                </h4>
                                                                            </li>
                                                                            <li class='m-3'>
                                                                                <h4>{{ $ques->Option_four }}
                                                                                </h4>
                                                                            </li>
                                                                        </ul>
                                                                    @elseif ($ques->Question_type == 'Multiple_Type_MCQs')
                                                                        <ul class='d-flex m-2 text-bold'>
                                                                            <li class='m-3'>
                                                                                <h4>{{ $ques->Option_ones }}
                                                                                </h4>
                                                                            </li>
                                                                            <li class='m-3'>
                                                                                <h4>{{ $ques->Option_twos }}
                                                                                </h4>
                                                                            </li>
                                                                            <li class='m-3'>
                                                                                <h4>{{ $ques->Option_threes }}
                                                                                </h4>
                                                                            </li>
                                                                            <li class='m-3'>
                                                                                <h4>{{ $ques->Option_fours }}
                                                                                </h4>
                                                                            </li>
                                                                        </ul>
                                                                    @elseif ($ques->Question_type == 'True_false')
                                                                        <ul class='d-flex m-2'>
                                                                            <li class='m-3'>
                                                                                <h4>{{ $ques->Trues }}</h4>
                                                                            </li>
                                                                            <li class='m-3'>
                                                                                <h4>{{ $ques->Falses }}</h4>
                                                                            </li>
                                                                        </ul>
                                                                    @endif
                                                                    <ul class='d-flex m-2'>
                                                                        <li class='m-3'>
                                                                            <h5>{{ $ques->Question_type }}</h5>
                                                                        </li>
                                                                        <li class='m-3'>
                                                                            <h5>{{ $ques->Difficulty_level }}
                                                                            </h5>
                                                                        </li>
                                                                        <li id='marks' class='mks m-3'
                                                                            name='marks' class=''>
                                                                            <h5>{{ $ques->Marks }}</h5>
                                                                        </li>
                                                                    </ul>


                                                                </div>
                                                            @endforeach
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div id="questionid" class="d-none"></div>

                                                        </div>
                                                        <div class="col-md-12 mt-3">
                                                            <button type="button" class="btn btn-primary"
                                                                data-toggle="modal" data-target="#exampleModal"
                                                                data-whatever="@getbootstrap">Save</button>
                                                            <a href="{{ url('/admin/questionpaper') }}"
                                                                class="btn btn">Back</a>
                                                            <div id="ids"></div>
                                                            <div id='sub' class='d-none'> {{ $getsub }}
                                                            </div>
                                                            <div id='crs' class='d-none'> {{ $getcrs }}
                                                            </div>
                                                            <div id='chp' class='d-none'> {{ $getchp }}
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                </form>
                            </div>


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

        function check(question_id, mark) {
            console.log(question_id, mark);
            let findMark = totalMarks.find(function(value, index) {
                return value.id == question_id;
            });
            if (!findMark) {
                totalMarks.push({
                    id: question_id,
                    mark: mark
                });
            } else {
                let index = totalMarks.findIndex(function(value, index) {
                    return value.id == question_id;
                })
                totalMarks.splice(index, 1);
            }
            // console.log(totalMarks);
            // console.log(totalMarks.reduce((n, {mark}) => n + mark, 0));
            $('#storeMarks').val(totalMarks.reduce((n, {
                mark
            }) => n + mark, 0));
        }
    </script>
    <script>
        // $("#sort_type").on('change', function() {
        //     var type = $(this).val();
        //     if (type) {
        //         $.ajax({
        //             type: "GET",
        //             url: "{{ url('/getQuestionId') }}",
        //             data: {
        //                 'data': type,
        //             },

        //             success: function(response) {
        //                 $.each(response, function(key, value) {
        //                     $("#quesids").append(`
        //                     <div style="border:1px solid #a68b8b; padding:10px">
        //                         <input type="checkbox" class="checkbox" name="question"  value="${value.id}">`;   
                                
        //                         if(${value.Question_type} == "Single_Type_MCQs") {
        //                             `<ul class="d-flex">
        //                                 <li class="m-3">
        //                                     <h4>${ value.Option_one }</h4>
        //                                 </li>
        //                                 <li class="m-3">
        //                                     <h4>${value.Option_two }</h4>
        //                                 </li>
        //                                 <li class="m-3">
        //                                     <h4>${ value.Option_three }</h4>
        //                                 </li>
        //                                 <li class="m-3">
        //                                     <h4>${ value.Option_four }</h4>
        //                                 </li>
        //                             </ul>`;
        //                         }
        //                         elseif($ { value.Question_type } == "Multiple_Type_MCQs") {
        //                             `<ul class="d-flex m-2 text-bold">
        //                                <li class="m-3">
        //                                  <h4>${ value.Option_ones }</h4>
        //                                 </li>
        //                                 <li class="m-3">
        //                                     <h4>${ value.Option_twos }</h4>
        //                                 </li>
        //                                 <li class="m-3">    
        //                                     <h4>${ value.Option_threes }</h4>
        //                                 </li>
        //                                 <li class="m-3">
        //                                     <h4>${ value.Option_fours }</h4>
        //                                 </li>
        //                             </ul>`;
        //                         }
        //                         elseif($ {value.Question_type } == "True_false"){
        //                             `<ul class="d-flex m-2">
        //                                 <li class="m-3">
        //                                     <h4>${ value.Trues }</h4>
        //                                 </li>
        //                                 <li class="m-3">
        //                                     <h4>${ value.Falses }</h4>
        //                                  </li>
        //                             </ul>`;
        //                         }
        //                         `<ul class="d-flex m-2">
        //                             <li class="m-3">
        //                                 <h5>${ value.Question_type }</h5>
        //                             </li>
        //                             <li class="m-3">
        //                                 <h5>${ value.Difficulty_level }</h5>
        //                             </li>
        //                             <li id="marks" class="mks m-3" name="marks" >
        //                                 <h5>${ value.Marks }</h5>
        //                              </li>
        //                             </ul>


        //                     </div>
                                                               
        //             `)
        //                 })


        //             }
        //         });
        //     }
        // })
    </script>
    <script>
        $('#Submit').on('click', function() {
            var quesids = [];

            $('.checkbox').each(function() {
                if ($(this).is(":checked")) {
                    quesids.push($(this).val());
                }
            });
            var remove_Item = 'on';
            quesids = $.grep(quesids, function(value) {
                return value != remove_Item;
            });
            var paper_name = $("#paper_name").val();
            var status = $("#status").val();
            var paper_type = $("#paper_type").val();
            var paper_time = $("#paper_time").val();
            var total_mark = $("#storeMarks").val();
            var sub = $("#sub").text();
            var crs = $("#crs").text();
            var chp = $("#chp").text();
            var quesid = quesids.toString();
            var instruction = $("#instruction").val();

            $.ajax({
                type: "GET",
                url: "{{ url('/fetchingquestion/paper') }}",
                data: {

                    'ppr': paper_name,
                    'st': status,
                    'pty': paper_type,
                    'ptime': paper_time,
                    'tmark': total_mark,
                    'sub': sub,
                    'crs': crs,
                    'chp': chp,
                    'id': quesid,
                    'instruction': instruction
                },
                success: function(resp) {

                    var getppr = resp[0];
                    var getst = resp[1];
                    var getpty = resp[2];
                    var getptime = resp[3];
                    var gettmark = resp[4];
                    var getcrs = resp[5];
                    var getsub = resp[6];
                    var getchp = resp[7];
                    var getid = resp[8];
                    var getinst = resp[9];
                    console.log(getinst)

                    window.location.href = "/getfinalpaper?getppr=" + getppr + "&getst=" + getst +
                        "&getpty=" + getpty + "&getptime=" + getptime + "&gettmark=" + gettmark +
                        "&getcrs=" + getcrs + "&getsub=" + getsub + "&getchp=" + getchp + "&getid=" +
                        getid + "&getinst=" + getinst;

                }
            });

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


        });
    </script>
</body>



</html>
