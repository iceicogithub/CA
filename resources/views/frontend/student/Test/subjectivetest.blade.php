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
            <h2>Subjective Test Series</h2>
            <button class="subtest" id="premium"><a href="" >Premium</a></button>
            <button class="subtest" id="free"><a href="" >Free</a></button>
            <div class="row mt-5" id="">
                @foreach($paper as $p)
               <div class="col-lg-4 col-xs-6">
                    <div class="card text-center">
                        <div class="card-body">
                            <h3 class="card-title">{{$p->paper_Name}}</h3>
                            
                            <button class="test"><a href="{{ url('/premiumtest',$p->id)}}">Test<i class="bi bi-arrow-right"></i></a></button>
                        </div>
                        
                    </div>
                </div>
@endforeach
               

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


<script>

</script>

</body>

</html>