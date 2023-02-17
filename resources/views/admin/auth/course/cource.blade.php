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
                                <h5 style="margin-top:18px; margin-left:10px">Add Cources</h5>
                                <div class="card-block" style="margin:10px ;">
                                    <form class="form-material" id="" method="POST" action="{{url('/store')}}" enctype="multipart/form-data">
                                        

                                        @csrf
                                        <input type="hidden" name="" value="">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group form-default">
                                                    <label class="float-label">Add cources <span class="required"><i class="bi bi-asterisk"></i></span></label>
                                                    <input type="text" name="cource" class="form-control" id="">
                                                    @error('cource')
                                                    <span class="text-danger">
                                                        {{$message}}
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-default">
                                                    <label>Status <span class="required"><i class="bi bi-asterisk"></i></span></label>
                                                    <select class="form-control js-example-basic-single" name="status">
                                                        <option value="">-select status- </option>
                                                        <option value="1">-Active- </option>
                                                        <option value="0">-Inactive-</option>
                                                    </select>
                                                    @error('status')
                                                    <span class="text-danger">
                                                        {{$message}}
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary">Submit</button>
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
                                                    <th>status</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                use Illuminate\Support\Facades\DB;

                                                $show = DB::table('cources')->get();                                                                                                
                                                ?>
                                                @foreach($show as $s)
                                                <tr>
                                                    <td>{{$s->cource}}</td>
                                                    <td>
                                                        @if($s->status == 1)
                                                        <span>Active</span>
                                                        @else
                                                        <span>Inactive</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                    <a href="{{ url('/course/edit',$s->id)}}" class="btn btn-success">Edit</a>
                                                    <a href="{{ url('/course/delete',$s->id)}}" onclick="return myConfirm()" class="btn btn-danger">Delete</a>
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
    });
</script>
<script>
  function myConfirm() {
  var result = confirm("Want to delete?");
  if (result==true) {
   return true;
  } else {
   return false;
  }
}
</script>

</html>