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
                                {{-- <div class="col-md-12">
                                    <a href="{{url('/sub_product')}}"><button class="btn btn-primary float-right" data-toggle="modal" type="button"
                                        data-target="#exampleModal">Add Sub-Product</button></a>
                                </div> --}}

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
                                                    <label class="float-label">Select Product</label>

                                                    <select name="" id="product" class="form-control">
                                                        <option value="">Select Product</option>
                                                        @foreach ($products as $p)
                                                            <option value="{{ $p->id }}">{{ $p->product_name }}
                                                            </option>
                                                        @endforeach
                                                    </select>


                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-default">
                                                    <label class="float-label">Select Category</label>
                                                    <select name="" id="sub_product"
                                                        onchange="changeCategory(this)" class="form-control">
                                                        <option value="">Select Category</option>
                                                        <option value="Group">Group</option>
                                                        <option value="Subject">Subject</option>
                                                        <option value="Per_Paper">Per Paper</option>
                                                    </select>


                                                </div>
                                            </div>
                                            <div class="col-md-6" style="display:none" id="group">
                                                <div class="form-group form-default">
                                                    <label class="float-label">Select Group</label>
                                                    <select name="" id="slt_group" class="form-control ">
                                                        <option value="">Select Group</option>
                                                        <option value="Group 1">Group 1</option>
                                                        <option value="Group 2">Group 2</option>
                                                        <option value="Group 3">Group 3</option>
                                                        <option value="Group 4">Group 4</option>
                                                        <option value="Group 5">Group 5</option>
                                                        <option value="Group 6">Group 6</option>
                                                        <option value="Group 7">Group 7</option>
                                                        <option value="Group 8">Group 8</option>
                                                        <option value="Group 9">Group 9</option>
                                                        <option value="Group 10">Group 10</option>
                                                    </select>


                                                </div>
                                            </div>

                                            <div class="col-md-12" id="sub_row">
                                                <p>Select subject</p>
                                                <div class="row p-3">

                                                    @foreach ($array as $s)
                                                        <?php
                                                        $subject = DB::table('subject')
                                                            ->where('id', $s)
                                                            ->first();
                                                        ?>
                                                        @if ($subject)
                                                            <div class="col-md-3"
                                                                style="border:1px solid #dad0d0; border-collapse:collapse; padding:5px 50px; text-align:center; font-size:26px">
                                                                <div>
                                                                    <input type="checkbox" class="checkbox_sub"
                                                                        id="chk" name="chk" size="20px"
                                                                        style="height:13px; margin:10px"
                                                                        value='{{ $subject->id }}'>{{ $subject->subject_name }}
                                                                </div>

                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <p>Select Paper</p>
                                                <div class="row getpaper"></div>

                                            </div>
                                            <div class="col-md-12" style="display:none" id="per_ppr">
                                                <p>Select Paper</p>
                                                <div class="row">
                                                    @foreach ($products as $pdct)
                                                        <?php
                                                        $ppr_ids = preg_split('/\,/', $pdct->paper_alloted);
                                                        
                                                        $ppr = DB::table('question_paper')
                                                            ->whereIn('id', $ppr_ids)
                                                            ->get();
                                                        ?>
                                                        @foreach ($ppr as $id)
                                                            <div class="col-md-3"
                                                                style="border:1px solid #dad0d0; border-collapse:collapse; padding:5px 50px; text-align:center; font-size:26px">
                                                                <input type="checkbox" class="getppr" id="chk"
                                                                    name="chk" size="20px"
                                                                    style="height:13px; margin:10px"
                                                                    value='{{ $id->id }}'>
                                                                {{ $id->paper_Name }}
                                                            </div>
                                                        @endforeach
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group form-default">
                                                    <label class="float-label">Price</label>
                                                    <input type="text" name="price" class="form-control"
                                                        id="pro_price">


                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-default">
                                                    <label class="float-label">Package Details</label>
                                                    <input type="text" name="pacg-details" class="form-control"
                                                        id="pacg_details">
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

                                        </div>
                                </div>

                                <div class="col-md-12">
                                    <button type="button" class="btn btn-primary"
                                        id="sub_product_upload">Submit</button>
                                    <a href="" class="btn btn-fix" style="background-color:gray;">Back</a>
                                </div>
                                </form>
                            </div>
                            </form>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <!-- endinject -->
</body>
<script>
    function changeCategory(select) {
        if (select.value == 'Group') {
            document.getElementById('group').style.display = 'block';
        }
        if (select.value == 'Per_Paper') {
            document.getElementById('sub_row').style.display = 'none';
            document.getElementById('per_ppr').style.display = 'block';
        }
    }
</script>
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
    $(".checkbox_sub").click(function() {
        if ($(this).is(":checked")) {
            var getsub = $(this).val();
            $.ajax({
                type: "GET",
                url: "{{ url('/product/paperids') }}",
                data: {
                    'sub': getsub,
                },

                success: function(res) {
                    // console.log(response)
                    $.each(res, function(key, value) {

                        $(".getpaper").append(`<div class="col-md-4" style="border:1px solid #dad0d0; border-collapse:collapse; padding:5px 50px; text-align:center; font-size:26px"> <input type="checkbox"  class="getppr" id="chk" name="chk" size="20px" style="height:13px; margin:10px"  value='${value.id}'>
                ${value.paper_Name}</div>`)
                    })

                }
            });
        } else {

        }
    });








    $(document).ready(function() {
        $("#sub_product_upload").on('click', function() {
            var product = $("#product").val();
            var sub_product = $("#sub_product").val();
            var group = $("#slt_group").val();

            var getsub = [];
            $(".checkbox_sub").each(function() {
                if ($(this).is(":checked")) {
                    getsub.push($(this).val());
                }
            })
            var remove_Item = 'on';
            getsub = $.grep(getsub, function(value) {
                return value != remove_Item;
            });

            var getppr = [];
            $(".getppr").each(function() {
                if ($(this).is(":checked")) {
                    getppr.push($(this).val());
                }
            })
            var remove_Item = 'on';
            getppr = $.grep(getppr, function(value) {
                return value != remove_Item;
            });
            console.log(getppr)
            var sub = getsub.toString();
            var ppr = getppr.toString();
            var sub_pro_price = $("#pro_price").val();
            var pack_details = $("#pacg_details").val();
            var status = $("#status").val();

            $.ajax({
                type: "POST",
                url: "{{ url('/store/sub_product') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    'product': product,
                    'sub_product': sub_product,
                    'group': group,
                    'sub': sub,
                    'ppr': ppr,
                    'price': sub_pro_price,
                    'pack_detail': pack_details,
                    'status': status,
                },

                success: function(response) {

                }
            });
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
