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
    .required{
        color: red;
        font-size: 10px
    }
</style>


<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        @include('path/admin_nav')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
            @include('path/admin_sidebar')
            <!-- partial -->

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-block" style="margin:10px ;">
                                    <h5>Add Chapters</h5>
                                    <form class="form-material" id="" method="" action="">
                                        @csrf
                                        <input type="hidden" name="" value="">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group form-default">
                                                    <label>Select Course <span class="required"><i class="bi bi-asterisk"></i></span></label>
                                                    <select class="form-control js-example-basic-single"
                                                        name="cource" id="courses">
                                                        <option value="">-select option </option>
                                                        @foreach ($cource as $c)
                                                            <option value="{{ $c->id }}">{{ $c->cource }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                   <span class="cource_err"></span>

                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group form-default">
                                                    <label class="float-label">Select Subject <span class="required"><i class="bi bi-asterisk"></i></span></label>
                                                    <select class="form-control js-example-basic-single"
                                                        id="subject_name" name="subject_name"></select>
                                                        
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group form-default">
                                                    <label class="float-label">Add-chapter <span class="required"><i class="bi bi-asterisk"></i></span></label>
                                                    <input type="text" name="chapter_name" class="form-control"
                                                        id="chapter_name">
                                                        <span class="chapter_name_err"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group form-default">
                                                    <label>Status <span class="required"><i class="bi bi-asterisk"></i></span></label>
                                                    <select class="form-control js-example-basic-single"
                                                        name="status" id="status">
                                                        <option value="">-Select status- </option>
                                                        <option value="1">-Active-</option>
                                                        <option value="0">-Inactive-</option>
                                                    </select>
                                                   
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <button type="button" class="btn btn-primary"
                                                    id="Submit">Submit</button>
                                                <a href="" class="btn btn">Back</a>
                                            </div>

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
                                                    <th>course</th>
                                                    <th>Subject_name</th>
                                                    <th>Add Chapter</th>
                                                    <th>status</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                
                                                use Illuminate\Support\Facades\DB;
                                                
                                                $show = DB::table('chapters')->get();
                                                ?>
                                                @foreach ($show as $s)
                                                    <?php
                                                    $course = DB::table('cources')
                                                        ->where('id', $s->cource_id)
                                                        ->first();
                                                    $subjects = DB::table('subject')
                                                        ->where('id', $s->subject_id)
                                                        ->first();
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            @if ($course)
                                                                {{ $course->cource }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($subjects)
                                                                {{ $subjects->subject_name }}
                                                            @endif
                                                        </td>
                                                        <td>{{ $s->chapter_name }}</td>
                                                        <td>{{ $s->status }}</td>
                                                        <td> <a href="{{ url('/chapter/edit', $s->id) }}"
                                                                class="btn btn-success">Edit</a>
                                                            <a href="{{ url('/chapter/delete', $s->id) }}"
                                                                onclick="return myConfirm()"
                                                                class="btn btn-danger">Delete</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
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

        // fetch data from courses
        $('#courses').change(function() {
            var courcesID = $(this).val();
            // alert(courcesID);
            if (courcesID) {
                $.ajax({
                    type: "GET",
                    url: "{{ url('/chapter/getSubjectList') }}",
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
                            });
                        } else {
                            $("#subject_name").empty();
                        }
                    }
                });
            }
        });


       
        $('#Submit').on('click', function() {
            // var form_data = $(this).serialize();
          var _token =  $("input[name='_token']").val();
            var courses = $('#courses').val();
            var subject = $('#subject_name').val();
            var chapter_name = $('#chapter_name').val();
            var status = $('#status').val();
           
            $.ajax({
                type: "POST",
                url: "{{ url('/chapter/store') }}",
                data: {
                "_token" : _token,
                "courses": courses,
                "subject": subject,
                "chapter_name": chapter_name,
                "status": status,
                },
                success: function(data) {
                    if($.isEmptyObject(data.error)){
                        alert(data.success);
                    }else{
                        printErrorMsg(data.error);
                    }
                    
                }
            });

        });
      
         function printErrorMsg(msg)
{
    $.each(msg,function(key, value){
        console.log(key);
    });
}

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
