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
            
            <h2> <a href="{{url('/objectivetest')}}"><i class="bi bi-caret-left-fill"></i></a>Test Series</h2>
            
            <div class="row">
                <div class="col-sm-12">
                    <!-- Zero config.table start -->
                    <div class="card" style="margin-top:30px ; padding:0 20px">
                        <h5 style="margin-top:20px;"></h5>
                        <div class="card-block">
                            <div class="dt-responsive table-responsive" style="margin-top:20px ;">
                                <table id="myDataTable" class="table table-striped table-bordered nowrap">
                                    <thead class="tabletest">
                                        <tr>
                                            <th>Sr no.</th>
                                            <th>Name</th>
                                            <th>Duration</th>
                                            <th>Marks</th>
                                            <th>Validity</th>
                                            <th>Action</th>
                                            </tr>
                                    </thead>
                                    <tbody id=tbody>
                                        @foreach($paper as $ids)
                                         <tr>
                                            <td>{{$ids->id}}</td>
                                            <td>{{$ids->paper_Name}}</td>
                                            <td>{{$ids->Duration}}</td>
                                            <td>{{$ids->total_mark}} </td>
                                            <td></td>
                                            <td><a href="{{ url('/subtestaction',$ids->id)}}" class="right"><i class="bi bi-arrow-right"></i></a></td>
                                            
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