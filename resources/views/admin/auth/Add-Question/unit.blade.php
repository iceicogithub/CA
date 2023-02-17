<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    @include('path/head')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">





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





    .submenu2 {
        /* position: absolute;
      left:90px ;
      width: 140PX;
      top: 0; */
        display: none;

    }

    /* show menu */

    .menu li:hover>.sub-menu {
        display: block;
        animation: slideup .3s ease;
    }

    .sub-menu li:hover>.submenu2 {
        /* display: block; */
        animation: slidefelt.3s ease;

    }

    /* animation */

    @keyframes slideup {
        0% {
            opacity: 0;
            transform: translateY(18px);

        }

        100% {
            opacity: 1;
            transform: none;
        }
    }

    @keyframes slideleft {
        0% {
            opacity: 0;
            transform: translateX(18px);

        }

        100% {
            opacity: 1;
            transform: none;
        }
    }
</style>

<style>
    .dropdown-content {
        display: none;

        background-color: #f9f9f9;
        min-width: 50px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .required {
        color: red;
        font-size: 10px
    }
</style>


<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        @include('path/admin_nav')


        <!--<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
        <!--    <div class="modal-dialog" role="document">-->
        <!--        <div class="modal-content">-->
        <!--            <div class="modal-header">-->
        <!--                <h5 class="modal-title" id="exampleModalLabel">Add Subject</h5>-->
        <!--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
        <!--                    <span aria-hidden="true">&times;</span>-->
        <!--                </button>-->
        <!--            </div>-->
        <!--            <div class="modal-body">-->
        <!--                <form class="form-material" id="" method="POST" action="{{ url('/store') }}" enctype="multipart/form-data">-->
        <!--                    @csrf-->
        <!--                    <input type="hidden" name="" value="">-->
        <!--                    <div class="row">-->
        <!--                        <div class="col-md-6">-->
        <!--                            <div class="form-group form-default">-->
        <!--                                <label class="float-label">Add cources</label>-->
        <!--                                <input type="text" name="cource" class="form-control" id="">-->
        <!--                                <span class="form-bar"></span>-->

        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="col-md-6">-->
        <!--                            <div class="form-group form-default">-->
        <!--                                <label>Status</label>-->
        <!--                                <select class="form-control js-example-basic-single" name="status">-->
        <!--                                    <option value="">-select status- </option>-->
        <!--                                    <option value="1">-Active- </option>-->
        <!--                                    <option value="0">-Inactive-</option>-->
        <!--                                </select>-->
        <!--                            </div>-->
        <!--                        </div>-->

        <!--                        <div class="col-md-12">-->
        <!--                            <button type="submit" class="btn btn-primary">Submit</button>-->
        <!--                            <a href="" class="btn btn-fix" style="background-color:gray;">Back</a>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </form>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->

        <!-- model2 -->


        <!--<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
        <!--    <div class="modal-dialog" role="document">-->
        <!--        <div class="modal-content">-->
        <!--            <div class="modal-header">-->
        <!--                <h5 class="modal-title" id="exampleModalLabel">Add Subject</h5>-->
        <!--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
        <!--                    <span aria-hidden="true">&times;</span>-->
        <!--                </button>-->
        <!--            </div>-->
        <!--            <div class="modal-body">-->
        <!--                <form class="form-material" id="" method="POST" action="{{ url('/nsert') }}" enctype="multipart/form-data">-->
        <!--                    @if (Session::get('success'))
-->
        <!--                    <div class="alert alert-success" role="alert">-->
        <!--                        {{ Session::get('success') }}-->
        <!--                    </div>-->
        <!--
@endif-->

        <!--                    @if (Session::get('fail'))
-->
        <!--                    <div class="alert alert-fail"></div>-->
        <!--                    {{ Session::get('fail') }}-->
        <!--
@endif-->
        <!--                    @csrf-->
        <!--                    <input type="hidden" name="" value="">-->
        <!--                    <div class="row">-->
        <!--                        <div class="col-md-6">-->
        <!--                            <div class="form-group form-default">-->
        <!--                                <label>Cources </label>-->
        <!--                                <select class="form-control js-example-basic-single" name="cource">-->
        <!--                                    <option value="">-select option </option>-->
        <!--                                    @foreach ($cource as $c)
-->
        <!--                                    <option value="{{ $c->id }}">{{ $c->cource }}</option>-->
        <!--
@endforeach-->
        <!--                                </select>-->
        <!--                            </div>-->
        <!--                        </div>-->

        <!--                        <div class="col-md-6">-->
        <!--                            <div class="form-group form-default">-->
        <!--                                <label> Groups</label>-->
        <!--                                <select class="form-control js-example-basic-single" name="groups">-->
        <!--                                    <option value="">-select Groups- </option>-->
        <!--                                    <option value="Group_1">-Group 1- </option>-->
        <!--                                    <option value="Group_2">-Group 2-</option>-->
        <!--                                </select>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="col-md-6">-->
        <!--                            <div class="form-group form-default">-->
        <!--                                <label class="float-label">- Subject Name</label>-->
        <!--                                <input type="text" name="subject_name" class="form-control" id="">-->
        <!--                                <span class="form-bar"></span>-->

        <!--                            </div>-->
        <!--                        </div>-->

        <!--                        <div class="col-md-6">-->
        <!--                            <div class="form-group form-default">-->
        <!--                                <label>Status</label>-->
        <!--                                <select class="form-control js-example-basic-single" name="status">-->
        <!--                                    <option value="">-select status- </option>-->
        <!--                                    <option value="1">-Active- </option>-->
        <!--                                    <option value="0">-Inactive-</option>-->
        <!--                                </select>-->
        <!--                            </div>-->
        <!--                        </div>-->

        <!--                        <div class="col-md-12">-->
        <!--                            <button type="submit" class="btn btn-primary">Submit</button>-->
        <!--                            <a href="" class="btn btn-fix" style="background-color:gray;">Back</a>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </form>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->



        <!-- modl3    -->





        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <!-- partial:../../partials/_sidebar.html -->
            @include('path/admin_sidebar')
            <!-- partial -->
            <div class="row">
                <!-- <div class="col-md-12">
                    @if ($message = Session::get('success'))
<div class="alert alert-success alert-block mt-3">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
@endif
                    @if ($message = Session::get('danger'))
<div class="alert alert-danger alert-block mt-3">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
@endif
                </div> -->
            </div>
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">


                        <div class="col-md-12">
                            <div class="card">
                                <h5 style="margin-top:18px; margin-left:10px">Add Quetions</h5>
                                <div class="card-block" style="margin:10px ;">
                                    <div class="alert alert-success d-none"> Data insert successfully </div>
                                    <form class="form-material" id="cform" method="" action=""
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="float-end">
                                            <span>
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#exampleModal" data-whatever="@mdo">Add
                                                    Course</button>
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#exampleModal2" data-whatever="@fat">Add
                                                    Subject</button>
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#exampleModal3" data-whatever="@getbootstrap">Add
                                                    Chapter</button>
                                            </span>
                                        </div>
                                        <div class="row">

                                            <div class="col-md-4">
                                                <div class="form-group form-default">
                                                    <label>Select Cources <span class="required"><i
                                                                class="bi bi-asterisk"></i></span></label>
                                                    <select class="form-control js-example-basic-single"
                                                        name="Cource_id" id="courses">
                                                        <option value="">-select option </option>
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

                                            <div class="col-md-4">
                                                <div class="form-group form-default">
                                                    <label class="float-label">Select-chapter</label>
                                                    <select class="form-control js-example-basic-single"
                                                        name="Chapter_id" id="chapter_name">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group form-default">
                                                    <label>Import File</label>
                                                    <input type="File" name="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group form-default">
                                                    <label>Deficulty Level <span class="required"><i
                                                                class="bi bi-asterisk"></i></span></label>
                                                    <select class="form-control js-example-basic-single"
                                                        onchange="abc(this)" name="Difficulty_level" id="difficulty">
                                                        <option value="">-Select types- </option>
                                                        <option value="easy" id="">Easy</option>
                                                        <option value="medium" id="">Medium</option>
                                                        <option value="hard" id="">Hard</option>
                                                    </select>
                                                    <p id="difficulty_check" style="color: red;">
                                                        The Difficulty_level field is required
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group form-default">
                                                    <label>Type list <span class="required"><i
                                                                class="bi bi-asterisk"></i></span></label>
                                                    <select class="form-control js-example-basic-single"
                                                        onchange="abc(this)" name="Question_type" id="question_type">
                                                        <option value="" href="#tables">-Select types- </option>
                                                        <option value="Single_Type_MCQs" id="">-Single Type
                                                            MCQs-</option>
                                                        <option value="True_false" id="">-True or false-
                                                        </option>
                                                        <option value="sub_jective" id="">-subjective-
                                                        </option>
                                                        <option value="Multiple_Type_MCQs" id="">-Multiple
                                                            Type MCQs-</option>

                                                    </select>
                                                    <p id="questype_check" style="color: red;">
                                                        The Type field is required
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group form-default">
                                                    <label>Status <span class="required"><i
                                                                class="bi bi-asterisk"></i></span></label>
                                                    <select class="form-control js-example-basic-single"
                                                        name="status" id="status">
                                                        <option value="">-Select status- </option>
                                                        <option value="1">-Active-</option>
                                                        <option value="0">-Inactive-</option>
                                                    </select>
                                                    <p id="status_check" style="color: red;">
                                                        The Status field is required
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-default">
                                                    <label>Add Questions <span class="required"><i
                                                                class="bi bi-asterisk"></i></span></label>
                                                    <textarea class="form-control addquestion" rows="3" cols="9" name="Add_question" id="add_question"></textarea>
                                                    <p id="question_check" style="color: red;">
                                                        The Question field is required
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-default">
                                                    <label>Explaination</label>
                                                    <textarea class="form-control addquestion" rows="3" cols="10" name="Explain" id="explain"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group form-default">
                                                    <label>asign Marks <span class="required"><i
                                                                class="bi bi-asterisk"></i></span></label>
                                                    <input type="number" name="Marks" class="form-control"
                                                        id="marks">
                                                        <p id="mark_check" style="color: red;">
                                                            The Mark field is required
                                                        </p>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-default">
                                                    <label>Negative mark</label>
                                                    <input type="text" name="Negative_mark" class="form-control"
                                                        id="Negative_mark">
                                                </div>
                                            </div>






                                            <!-- mcqs -->
                                            <div class="col-md-6" id="add" style="display:none;">
                                                <div class="form-group" id="Tables">
                                                    <label class="float-label"></label>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label class="float-label">1.</label>
                                                            <input type="checkbox" value="" id="opt1Check"
                                                                name="Right_answer"><br>
                                                            <input type="text" name="Option_one"
                                                                class="form-control" id="option_one">

                                                            <label class="">2.</label>
                                                            <input type="checkbox" value="option_two" id="opt2Check"
                                                                name="Right_answer">
                                                            <input type="text" name="Option_two"
                                                                class="form-control" id="option_two">
                                                        </div>
                                                        <div class="col-md- 6">
                                                            <label class="float-label">3.</label>
                                                            <input type="checkbox" value="" id="opt3Check"
                                                                name="Right_answer">
                                                            <input type="text" name="Option_three"
                                                                class="form-control" id="option_three">

                                                            <label class="float-label">4.</label>
                                                            <input type="checkbox" value="" id="opt4Check"
                                                                name="Right_answer">
                                                            <input type="text" name="Option_four"
                                                                class="form-control" id="option_four">
                                                        </div>
                                                    </div>
                                                    <!-- <span class="form-bar"></span> -->
                                                </div>
                                            </div>
                                            <div class="col-md-6" id="subj" style="display:none;">
                                                <div class="form-group">
                                                    <label class="float-label"></label>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label class="float-label">1.</label><input
                                                                type="checkbox" value="" id="right_true"
                                                                name="Right_tf"><br>
                                                            <input type="text" name="Trues"
                                                                class="form-control position-relative" id="opt_true">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="float-label">2</label><input type="checkbox"
                                                                value="" id="right_false" name="Right_tf"><br>
                                                            <input type="text" name="Falses" class="form-control"
                                                                id="opt_false">
                                                        </div>

                                                        <!-- <span class="form-bar"></span> -->
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6" id="JECT" style="display:none;">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <label class="float-label">Answer:-</label>
                                                            <textarea class="form-control" rows="3" cols="10" name="subjective_answer" id="subj_ans"></textarea>
                                                        </div>
                                                    </div>
                                                    <!-- <span class="form-bar"></span> -->
                                                </div>
                                            </div>

                                            <div class="col-md-6" id="mul" style="display:none;">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label class="float-label">1.</label><input
                                                                type="checkbox" value="" id="opt_1"
                                                                name="optcheck_1"><br>
                                                            <input type="text" name="Option_one"
                                                                class="form-control position-relative" id="optionone">

                                                            <label class="">2.</label><input type="checkbox"
                                                                value="option_two" id="opt_2" name="optcheck_2">
                                                            <input type="text" name="Option_two"
                                                                class="form-control" id="optiontwo">
                                                        </div>
                                                        <div class="col-md- 6">
                                                            <label class="float-label">3.</label><input
                                                                type="checkbox" value="" id="opt_3"
                                                                name="optcheck_3">
                                                            <input type="text" name="Option_three"
                                                                class="form-control" id="optionthree">

                                                            <label class="float-label">4.</label><input
                                                                type="checkbox" value="" id="opt_4"
                                                                name="optcheck_4">
                                                            <input type="text" name="Option_four"
                                                                class="form-control" id="optionfour">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <span class="form-bar"></span> -->
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="button" class="btn btn-primary"
                                                id="Submit">Submit</button>
                                            <a href="{{ url('/admin/showlist') }}"
                                                class="btn btn-success">showlist</a>

                                        </div>



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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- endinject -->
</body>


{{-- editor --}}
{{-- <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script> --}}
<script src="{{ asset('ckeditor5/ckeditor.js') }}"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#add_question'))
        .catch(error => {
            console.error(error);
        });
</script>
<script>
    ClassicEditor
        .create(document.querySelector('#explain'))
        .catch(error => {
            console.error(error);
        });
</script>




<script>
    function abc(select) {
        if (select.value == 'Single_Type_MCQs') {
            document.getElementById('add').style.display = 'block';
            document.getElementById('subj').style.display = 'none';
            document.getElementById('JECT').style.display = 'none';
            document.getElementById('mul').style.display = 'none';

        }

        if (select.value == 'True_false') {
            document.getElementById('add').style.display = 'none';
            document.getElementById('subj').style.display = 'block';
            document.getElementById('JECT').style.display = 'none';
            document.getElementById('mul').style.display = 'none';
        }


        if (select.value == 'sub_jective') {
            document.getElementById('add').style.display = 'none';
            document.getElementById('subj').style.display = 'none';
            document.getElementById('JECT').style.display = 'block';
            document.getElementById('mul').style.display = 'none';
        }

        if (select.value == 'Multiple_Type_MCQs') {
            document.getElementById('add').style.display = 'none';
            document.getElementById('subj').style.display = 'none';
            document.getElementById('JECT').style.display = 'none';
            document.getElementById('mul').style.display = 'block';
        }

    }
    $(document).ready(function() {
       
        $('#option_one').on('change', function() {
            var opt1 = $('#option_one').val();
            $('#opt1Check').val(opt1);
        })
        $('#option_two').on('change', function() {
            var opt2 = $('#option_two').val();
            $('#opt2Check').val(opt2);
        })
        $('#option_three').on('change', function() {
            var opt3 = $('#option_three').val();
            $('#opt3Check').val(opt3);
        })
        $('#option_four').on('change', function() {
            var opt4 = $('#option_four').val();
            $('#opt4Check').val(opt4);
        })

        //true false//
        $('#opt_true').on('change', function() {
            var optt = $('#opt_true').val();
            $('#right_true').val(optt);
        })
        $('#opt_false').on('change', function() {
            var optf = $('#opt_false').val();
            $('#right_false').val(optf);
        })

        //multiple///

        $('#optionone').on('change', function() {
            var optone = $('#optionone').val();
            $('#opt_1').val(optone);
        })
        $('#optiontwo').on('change', function() {
            var opttwo = $('#optiontwo').val();
            $('#opt_2').val(opttwo);
        })
        $('#optionthree').on('change', function() {
            var opttre = $('#optionthree').val();
            $('#opt_3').val(opttre);
        })
        $('#optionfour').on('change', function() {
            var optfour = $('#optionfour').val();
            $('#opt_4').val(optfour);
        })


        function checkChange() {
            var op1 = document.getElementById("option_one").value;
            document.getElementById("opt1Check").value = op1;
        }


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

                                $("#chapter_name").append(
                                    `<option value="${value.id}">${ value.chapter_name }</option`
                                );
                            });
                        } else {
                            $("#chapter_name").empty();
                        }
                    }
                });
            }
        });


        $('#Submit').on('click', function() {
            // var form_data = $(this).serialize();

            // if(!difficulty || !status){
            //     alert("difficulty and status is required" );
            //     return false;
            // }
          

            var courses = $('#courses').val();
            var subject = $('#subject_name').val();
            var chapter_name = $('#chapter_name').val();
            var file = $('#file').val();
            var difficulty = $('#difficulty').val();
            var question_type = $('#question_type').val();
            var marks = $('#marks').val();
            var status = $('#status').val();
            var negative_mark = $('#Negative_mark').val();
            var add_question = $(".ck-content").html();
            var option_one = $('#option_one').val();
            var option_two = $('#option_two').val();
            var option_three = $('#option_three').val();
            var option_four = $('#option_four').val();
            var optionone = $('#optionone').val();
            var optiontwo = $('#optiontwo').val();
            var optionthree = $('#optionthree').val();
            var optionfour = $('#optionfour').val();
            if ($('#opt1Check').is(':checked')) {
                var rightAns = $('#opt1Check').val();
                console.log(rightAns);
            }
            if ($('#opt2Check').is(':checked')) {
                var rightAns = $('#opt2Check').val();
                console.log(rightAns);
            }
            if ($('#opt3Check').is(':checked')) {
                var rightAns = $('#opt3Check').val();
                console.log(rightAns);
            }
            if ($('#opt4Check').is(':checked')) {
                var rightAns = $('#opt4Check').val();
                console.log(rightAns);
            }
            var right_answer = rightAns;

            // var optcheck_1 = $('#opt1Check').val();
            var trues = $('#opt_true').val();
            var falses = $('#opt_false').val();

            if ($('#right_true').is(':checked')) {
                var rightTF = $('#right_true').val();
                console.log(rightTF);
            }
            if ($('#right_false').is(':checked')) {
                var rightTF = $('#right_false').val();
                console.log(rightTF);
            }

            var right_tf = rightTF;

            //multiple option//

            if ($('#opt_1').is(':checked')) {
                var optcheck1 = $('#opt_1').val();
                console.log(optcheck1);
            }
            if ($('#opt_2').is(':checked')) {
                var optcheck2 = $('#opt_2').val();
                console.log(optcheck2);
            }
            if ($('#opt_3').is(':checked')) {
                var optcheck3 = $('#opt_3').val();
                console.log(optcheck3);
            }
            if ($('#opt_4').is(':checked')) {
                var optcheck4 = $('#opt_4').val();
                console.log(optcheck4);
            }

            var optcheck1 = optcheck1;
            var optcheck2 = optcheck2;
            var optcheck3 = optcheck3;
            var optcheck4 = optcheck4;

            var sub_ans = $('#subj_ans').val();

            var explan = $('#explain').val();

            $.ajax({
                type: "POST",
                url: "{{ url('/question/store') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "courses": courses,
                    "subject_name": subject,
                    "chapter_name": chapter_name,
                    "file": file,
                    "difficulty": difficulty,
                    "question_type": question_type,
                    "marks": marks,
                    "status": status,
                    "negative_mark": negative_mark,
                    "add_question": add_question,
                    "option_one": option_one,
                    "option_two": option_two,
                    "option_three": option_three,
                    "option_four": option_four,
                    "optionone": optionone,
                    "optiontwo": optiontwo,
                    "optionthree": optionthree,
                    "optionfour": optionfour,
                    "right_answer": right_answer,
                    "trues": trues,
                    "falses": falses,
                    "right_tf": right_tf,
                    "optcheck1": optcheck1,
                    "optcheck2": optcheck2,
                    "optcheck3": optcheck3,
                    "optcheck4": optcheck4,
                    "sub_ans": sub_ans,
                    "explan": explan,

                },
                success: function(response) {
                    // alert(response);
                    $('.alert-success').removeClass('d-none');
                    console.log(response);
                    $("#cform")[0].reset();
                    $(".ck-content")[0].html().reset();

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

</html>
