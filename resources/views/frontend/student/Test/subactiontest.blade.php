@include('frontend/layouts/header')
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_settings-panel.html -->
    <!-- partial -->
    <!-- partial:partials/_sidebar.html -->
    @include('frontend/layouts/sidebar')

    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">

            <h2> <a href="{{ url('/objectivetest') }}"><i class="bi bi-caret-left-fill"></i></a>Test Series</h2>

            <div class="row">
                @foreach ($paper as $p)
                    <div class="col-md-6">
                        <!-- Zero config.table start -->
                        <div class="card" style="margin-top:30px ; padding:0 20px">
                            <h5 style="margin-top:20px;">CA-Foundation</h5>
                            <div class="card-block">
                                <div class="dt-responsive table-responsive" style="margin-top:20px ;">
                                    <div class="row">
                                        <table id="myDataTable" class="table table-striped table-bordered nowrap">
                                            <tr>
                                                <th>Name</th>
                                                <td>{{ $p->paper_Name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Duration</th>
                                                <td>{{$p->Duration}}</td>
                                            </tr>
                                            <tr>
                                                <th>Marks</th>
                                                <td>{{$p->total_mark}}</td>
                                            </tr>
                                            <tr>
                                                <th>Validity</th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>Dowload at</th>
                                                <td> 
                                                    <a href="../uploads/{{$p->quefile}}" class="right" target="_blank">Start Paper</a>
                                                    <form action="">
                                                    <input type="file" name="answer_sheet"  class="form-control mt-3"> 
                                                    <div class="d-none"></div>
                                                  <button class="right mt-2" type="submit"> Upload answer sheet</button>  
                                                </form>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Zero config.table end -->
                    </div>
                    <div class="col-md-6">
                        <!-- Zero config.table start -->
                        <div class="card" style="margin-top:30px ; padding:0 20px">
                            <h5 style="margin-top:20px;">CA-Foundation</h5>
                            <div class="card-block">
                                <div class="dt-responsive table-responsive" style="margin-top:20px ;">
                                    <table id="myDataTable" class="table table-striped table-bordered nowrap">
                                        <thead class="tabletest">
                                            <tr>
                                                <th>Sr no.</th>
                                                <th>Uploaded On</th>
                                                <th>Checked On</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id=tbody>



                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                @endforeach

            </div>

        </div>


        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <!-- @include('path/footer') -->
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

</html>
