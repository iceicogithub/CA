<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
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

    .float-label {
        font-size: 10px;
    }

    .checkbox.checked {
        background-color: green;
    }

    .modal-content {
        width: 1000px;
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
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="card p-3">
                                <h5 style="margin-top:18px; margin-left:10px">Add Prdoucts</h5>
                                <div class="col-md-12">
                                    <button class="btn btn-primary float-right" data-toggle="modal" type="button"
                                        data-target="#exampleModal">Add Sub-Product</button>
                                </div>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="form-material" id="Product" method="" action=""
                                                    enctype="multipart/form-data">

                                                    <div class="alert alert-success d-none">
                                                        <strong>Product Added successfully</strong>
                                                    </div>
                                                    @csrf
                                                    <input type="hidden" name="" value="">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group form-default">
                                                                <label class="float-label">Product Name</label>
                                                                @php
                                                                    $product = DB::table('products')->get();
                                                                @endphp
                                                                <select name="" id=""
                                                                    class="form-control">
                                                                    <option value="">-Select Option-</option>
                                                                    @foreach ($product as $pro)
                                                                        <option value="">{{ $pro->product_name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group form-default">
                                                                <label class="float-label">Add Sub-Product</label>
                                                                <input type="text" name=""
                                                                    class="form-control" id="product_price">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group form-default">
                                                                <label class="float-label">Price</label>
                                                                <input type="text" name="price"
                                                                    class="form-control" id="product_price">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group form-default">
                                                                <label class="float-label">Description</label>
                                                                <input type="text" name="description"
                                                                    class="form-control" id="description">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group form-default">
                                                                <label class="float-label">Images</label>
                                                                <input type="file" name="product_image"
                                                                    class="form-control" id="product_image">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group form-default">
                                                                <label>Status <span class="required"><i
                                                                            class="bi bi-asterisk"></i></span></label>
                                                                <select class="form-control js-example-basic-single"
                                                                    name="status" id="status">
                                                                    <option value="">-Select status- </option>
                                                                    <option value="1">-Publish-</option>
                                                                    <option value="0">-Unpublished-</option>
                                                                </select>

                                                            </div>
                                                        </div>


                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <p>Select Paper</p>
                                                                </div>
                                                                @foreach ($getppr as $ppr)
                                                                    <div class="col-md-4">
                                                                        <input type="checkbox"
                                                                            value="{{ $ppr->id }}" name="pprids"
                                                                            id="paper" class="checkbox">
                                                                        <span
                                                                            class="m-3">{{ $ppr->paper_Name }}</span>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <button type="button" class="btn btn-primary"
                                                            id="productUpload">Submit</button>
                                                        <a href="" class="btn btn-fix"
                                                            style="background-color:gray;">Back</a>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Send message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="card-block" style="margin:10px ;">
                                    <form class="form-material" id="Product" method="" action=""
                                        enctype="multipart/form-data">

                                        <div class="alert alert-success d-none">
                                            <strong>Product Added successfully</strong>
                                        </div>
                                        @csrf
                                        <input type="hidden" name="" value="">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group form-default">
                                                    <label class="float-label">Product Name</label>
                                                    <input type="text" name="name" class="form-control"
                                                        id="product_name">


                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-default">
                                                    <label class="float-label">Price</label>
                                                    <input type="text" name="price" class="form-control"
                                                        id="product_price">


                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-default">
                                                    <label class="float-label">Description</label>
                                                    <input type="text" name="description" class="form-control"
                                                        id="description">
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-default">
                                                    <label class="float-label">Images</label>
                                                    <input type="file" name="product_image" class="form-control"
                                                        id="product_image">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group form-default">
                                                    <label>Status <span class="required"><i
                                                                class="bi bi-asterisk"></i></span></label>
                                                    <select class="form-control js-example-basic-single"
                                                        name="status" id="status">
                                                        <option value="">-Select status- </option>
                                                        <option value="1">-Publish-</option>
                                                        <option value="0">-Unpublished-</option>
                                                    </select>

                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <p>Select subject</p>
                                                <div class="row">
                                                    <?php
                                                    $uniqueArray = collect($getppr)->unique('subject_id')->values()->all();
                                                 
                                                    ?>
                                                    @foreach ($uniqueArray as $s)
                                                        <?php
                                                        $subject = DB::table("subject")->where('id',$s->subject_id)->first();
                                                    
                                                        ?>
                                                        @if($subject)
                                                        <div class="col-md-3" style="border:1px solid #dad0d0; border-collapse:collapse; padding:5px 50px; text-align:center; font-size:26px">
                                                            <input type="checkbox"  class="checkbox" id="chk" name="chk" size="20px" style="height:13px; margin:10px" value='{{$subject->id}}'>{{$subject->subject_name}}
                                                         </div>
                                                        @endif
                                                    @endforeach


                                                </div>

                                            </div>
                                        </div>
                                </div>

                                <div class="col-md-12">
                                    <button type="button" class="btn btn-primary" id="productUpload">Submit</button>
                                    <a href="" class="btn btn-fix" style="background-color:gray;">Back</a>
                                </div>
                                </form>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <!-- Zero config.table start -->
                        <div class="card" style="margin-top:30px ; padding:0 20px">
                            <h5 style="margin-top:20px;">Product List</h5>
                            <div class="card-block">
                                <div class="dt-responsive table-responsive" style="margin-top:20px ;">
                                    <table id="myDataTable" class="table table-striped table-bordered nowrap">
                                        <thead>
                                            <tr>
                                                <th>Product_Name</th>
                                                <th>Product_Price</th>
                                                <th>Paper Name</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php use Illuminate\Support\Facades\DB;
                                            $product = DB::table('products')->get();
                                            
                                            ?>

                                            @foreach ($product as $p)
                                                <tr>
                                                    <td>{{ $p->product_name }}</td>
                                                    <td>{{ $p->product_price }}</td>
                                                    <td>{{ $p->paper_alloted }}</td>
                                                    <td>{{ $p->description }}</td>
                                                    <td><input data-id="{{ $p->id }}" class="toggle-class"
                                                            type="checkbox" data-onstyle="success"
                                                            data-offstyle="danger" data-toggle="toggle"
                                                            data-on="Active" data-off="InActive"
                                                            {{ $p->status ? 'checked' : '' }}>
                                                        <a class="active"> <?php if ($p->status == 1) { ?>
                                                            Publish
                                                            <?php } else { ?>
                                                            Unpublish
                                                        </a>

                                                        <?php } ?>


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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <!-- endinject -->
</body>

<script>
    $(function() {
        $('.toggle-class').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var id = $(this).data('id');
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '/publishpaper',
                data: {
                    'status': status,
                    'id': id
                },
                success: function(data) {
                    alert(data.success)
                    location.reload(true);
                    // if($(this).is(':checked')){
                    //     $(".active").text("Active");
                    // }else{
                    //     $(".active").text("Inactive");
                    // }
                }
            })
        });
    })
</script>
<script>
    $(document).ready(function() {

        $("#productUpload").on('click', function() {

            let formData = new FormData(document.getElementById("Product"));

            var getppr = [];
            $(".checkbox").each(function() {
                if ($(this).is(":checked")) {
                    getppr.push($(this).val());
                }
            })
            var remove_Item = 'on';
            getppr = $.grep(getppr, function(value) {
                return value != remove_Item;
            });



            var pprids = getppr.toString();
            formData.append('pprids', pprids);
            var product_name = $("#product_name").val();
            var product_price = $("#product_price").val();
            var descrip = $("#description").val();
            var status = $("#status").val();


            $.ajax({
                type: 'POST',
                url: "{{ url('/storeproduct') }}",
                data: formData,
                processData: false,
                contentType: false,
                success: function(res) {

                }
            })
        })


    });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
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
