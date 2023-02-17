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
                                    <a href="{{ url('/sub_product') }}"><button class="btn btn-primary float-right"
                                            data-toggle="modal" type="button" data-target="#exampleModal">Add
                                            Sub-Product</button></a>
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
                                            <div class="col-md-12">
                                                <p>Select subject</p>
                                                <div class="row p-3">
                                                    <?php
                                                    $uniqueArray = collect($getppr)
                                                        ->unique('subject_id')
                                                        ->values()
                                                        ->all();
                                                    ?>
                                                    @foreach ($uniqueArray as $s)
                                                        <?php
                                                        $subject = DB::table('subject')
                                                            ->where('id', $s->subject_id)
                                                            ->first();
                                                        ?>
                                                        @if ($subject)
                                                            <div class="col-md-3"
                                                                style="border:1px solid #dad0d0; border-collapse:collapse; padding:5px 50px; text-align:center; font-size:26px">
                                                                <div>
                                                                    <input type="checkbox" class="checkbox"
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
                                                <div class="row getpaper p-3"></div>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group form-default">
                                                    <label class="float-label">Product Name</label>
                                                    <input type="text" name="name" class="form-control"
                                                        id="product_name">


                                                </div>
                                            </div>
                                            <div class="col-md-4">
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
                                                    <select class="form-control js-example-basic-single" name="status"
                                                        id="status">
                                                        <option value="">-Select status- </option>
                                                        <option value="1">-Publish-</option>
                                                        <option value="0">-Unpublished-</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group form-default">
                                                    <label class="float-label">Package Details</label>
                                                    <input type="text" name="pacg_details" class="form-control"
                                                        id="pacg_details">
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group form-default">
                                                    <label class="float-label">Exams</label>
                                                    <input type="text" name="exam" class="form-control"
                                                        id="exam">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-default">
                                                    <label class="float-label">Validity</label>
                                                    <input type="date" name="validity" class="form-control"
                                                        id="validity">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-default">
                                                    <label class="float-label">Format</label>
                                                    <input type="text" name="format" class="form-control"
                                                        id="pro_format">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-default">
                                                    <label class="float-label">Test Langauge</label>
                                                    <select name="test_lang" id="test_lang" class="form-control">
                                                        <option value="">-select Langauge-</option>
                                                        <option value="English">English</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-default">
                                                    <label class="float-label">Test Asseccible On</label><br>
                                                    <input type="Checkbox" name="test_assecc" class="test_assec m-1"
                                                        id="" value="Computer"> Computer
                                                    <input type="Checkbox" name="test_assecc"
                                                        class="test_assec m-1 ml-4" id="" value="Laptop">
                                                    Laptop <br>
                                                    <input type="Checkbox" name="test_assecc" class="test_assec m-1"
                                                        id="" value="Tablet"> Tablet
                                                    <input type="Checkbox" name="test_assecc" class="test_assec ml-5"
                                                        id="" value="Mobile"> Mobile
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group form-default">
                                                    <label class="float-label">Solution Available</label><br>
                                                    <input type="radio" name="solution" class="soln  m-2"
                                                        id="" value="Yes">Yes
                                                    <input type="radio" name="solution" class="sol nm-2"
                                                        id="" value="No">No
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group form-default">
                                                    <label class="float-label">Reports Available</label><br>
                                                    <input type="radio" class="m-2" name="report"
                                                        id="rpt" value="Yes">Yes
                                                    <input type="radio" class="m-2" name="report"
                                                        id="rpt" value="No">No
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

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
    $(".checkbox").click(function() {
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



        }
    });








    $(document).ready(function() {

        $("#productUpload").on('click', function() {

            let formData = new FormData(document.getElementById("Product"));

            var getsub = [];
            $(".checkbox").each(function() {
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

            var test_ass = [];
            $(".test_assec").each(function() {
                if ($(this).is(":checked")) {
                    test_ass.push($(this).val());
                }
            })
            var remove_Item = 'on';
            test_ass = $.grep(test_ass, function(value) {
                return value != remove_Item;
            });

            //  console.log(test_ass);

            var pprids = getppr.toString();
            var subids = getsub.toString();
            var test_ass = test_ass.toString();

            formData.append('pprids', pprids);
            formData.append('subids', subids);
            formData.append('test_ass', test_ass);
            var product_name = $("#product_name").val();
            var product_price = $("#product_price").val();
            var descrip = $("#description").val();
            var status = $("#status").val();
            var pack_detail = $("#pacg_details").val();
            var exam = $("#exam").val();
            var validity = $("#validity").val();
            var formattedDate = moment(validity, 'YYYY-MM-DD').format('DD-MM-YYYY');
            formData.append('formattedDate', formattedDate)
            var format = $("pro_format").val();
            var test_lang = $("#test_lang").val();
            var solution = $('input[name="solution"]:checked').val();
            var report = $('input[name="report"]:checked').val();
            formData.append('solution', solution);
            formData.append('report', report);


            //    console.log(test_lang);





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
