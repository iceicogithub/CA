<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('path/head')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
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
</style>


<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        @include('path/navbar')       
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="ti-settings"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close ti-close"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>
            <div id="right-sidebar" class="settings-panel">
                <i class="settings-close ti-close"></i>
                <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
                    </li>
                </ul>
                <div class="tab-content" id="setting-content">
                    <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
                        <div class="add-items d-flex px-3 mb-0">
                            <form class="form w-100">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                                    <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                                </div>
                            </form>
                        </div>
                        <div class="list-wrapper px-3">
                            <ul class="d-flex flex-column-reverse todo-list">
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Team review meeting at 3.00 PM
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Prepare for presentation
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Resolve all the low priority tickets due today
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked>
                                            Schedule meeting for next week
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked>
                                            Project review
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                            </ul>
                        </div>
                        <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
                        <div class="events pt-4 px-3">
                            <div class="wrapper d-flex mb-2">
                                <i class="ti-control-record text-primary mr-2"></i>
                                <span>Feb 11 2018</span>
                            </div>
                            <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
                            <p class="text-gray mb-0">The total number of sessions</p>
                        </div>
                        <div class="events pt-4 px-3">
                            <div class="wrapper d-flex mb-2">
                                <i class="ti-control-record text-primary mr-2"></i>
                                <span>Feb 7 2018</span>
                            </div>
                            <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                            <p class="text-gray mb-0 ">Call Sarah Graves</p>
                        </div>
                    </div>
                    
                    <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                            <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
                        </div>
                        <ul class="chat-list">
                            <li class="list active">
                                <div class="profile"><img src="../../images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Thomas Douglas</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">19 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../../images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                                <div class="info">
                                    <div class="wrapper d-flex">
                                        <p>Catherine</p>
                                    </div>
                                    <p>Away</p>
                                </div>
                                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                                <small class="text-muted my-auto">23 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../../images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Daniel Russell</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">14 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../../images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                                <div class="info">
                                    <p>James Richardson</p>
                                    <p>Away</p>
                                </div>
                                <small class="text-muted my-auto">2 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../../images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Madeline Kennedy</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">5 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../../images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                                <div class="info">
                                    <p>Sarah Graves</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">47 min</small>
                            </li>
                        </ul>
                    </div>
                    <!-- chat tab ends -->
                </div>
            </div> 
            <!-- partial -->
            <!-- partial:../../partials/_sidebar.html -->
            @include('path/sidebar')
            <!-- partial -->

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <h5 style="margin-top:18px; margin-left:10px">Add Quetions</h5>
                                @if(Session::get('success'))
                                @endif
                                


                                <div class="card-block" style="margin:10px ;">
                                    <form class="form-material" id="" method="POST" action="{{ url('/question/store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group form-default">
                                                    <label>Course-name</label>
                                                    <select class="form-control js-example-basic-single" name="course">
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group form-default">
                                                    <label>Subject-name</label>
                                                    <select class="form-control js-example-basic-single" name="subject">
                                                        
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-default">
                                                    <label>Chapter-name</label>
                                                    <select class="form-control js-example-basic-single" name="chapter_name">
                                                        @foreach($chapter as $s)
                                                        <option value="{{$s->id}}">{{$s->chapter_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group form-default">
                                                    <label>Import File</label>
                                                    <input type="file" name="" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-default">
                                                    <label>Deficulty Level</label>
                                                    <select class="form-control js-example-basic-single" onchange="abc(this)" name="difficulty">
                                                        <option value="">-Select types- </option>
                                                        <option value="easy" id="">Easy</option>
                                                        <option value="medium" id="">Medium</option>
                                                        <option value="hard" id="">Hard</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group form-default">
                                                    <label>Type list</label>
                                                    <select class="form-control js-example-basic-single" onchange="abc(this)" name="question_type">
                                                        <option value="" href="#tables">-Select types- </option>
                                                        <option value="Single_Type_MCQs" id="mcq">-Single Type MCQs-</option>

                                                        <option value="True_false" id="sub">-True or false-</option>
                                                        <option value="subj_ective" id="tf">-subjective-</option>
                                                        <option value="Multiple_Type_MCQs" id="mul">-Multiple Type MCQs-</option>

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group form-default">
                                                    <label>asign Marks</label>
                                                    <input type="number" name="marks" class="form-control">

                                                </div>
                                            </div>

                                            <!-- mcqs -->
                                            <div class="col-md-6" id="add" style="display:none;">
                                                <div class="form-group" id="Tables">
                                                    <label class="float-label">Add Questions</label>
                                                    <input type="text" name="add_question" class="form-control position-relative" id=""><br>
                                                    <!-- <span class=" position-absolute"><i class="fa fa-plus position-absolute" aria-hidden="true" style="left:220px; bottom:15px;"></i></span> -->
                                                    <div class="row">
                                                        <div class="col-md-6">

                                                            <label class="float-label">1.</label><input type="checkbox" name="right_ans" value="option_one" id="flexCheckDefault1"><br>
                                                            <input type="text" name="option_one" class="form-control position-relative" id="option_one">

                                                            <label class="">2.</label><input type="checkbox" name="right_ans" value="option_two" id="flexCheckDefault2">
                                                            <input type="text" name="option_two" class="form-control" id="">
                                                        </div>
                                                        <div class="col-md- 6">
                                                            <label class="float-label">3.</label><input type="checkbox" name="right_ans" value="option_three" id="flexCheckDefault3">
                                                            <input type="text" name="option_three" class="form-control" id="">
                                                            <label class="float-label">4.</label><input type="checkbox" name="right_ans" value="option_four" id="flexCheckDefault4">
                                                            <input type="text" name="option_four" class="form-control" id="opt4">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="float-lable">explanation</label>
                                                            <textarea class="form-controller" rows="7" cols="50" name="explanation"></textarea>

                                                        </div>
                                                    </div>
                                                    <!-- <span class="form-bar"></span> -->
                                                </div>
                                            </div>
                                            <div class="col-md-6" id="subj" style="display:none;">
                                                <div class="form-group">
                                                    <label class="float-label">Add Questions</label>
                                                    <input type="text" name="" class="form-control position-relative" id=""><br>
                                                    <!-- <span class=" position-absolute"><i class="fa fa-plus position-absolute" aria-hidden="true" style="left:220px; bottom:15px;"></i></span> -->
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label class="float-label">A</label>
                                                            <input type="text" name="option_true" class="form-control position-relative" id="">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="float-label">B</label>
                                                            <input type="text" name="option_false" class="form-control" id="">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <label class="float-label">Explanation</label>

                                                            <textarea class="form-control" rows="3" cols="10"></textarea>
                                                        </div>

                                                    </div>
                                                    <!-- <span class="form-bar"></span> -->
                                                </div>
                                            </div>
                                            <div class="col-md-6" id="JECT" style="display:none;">
                                                <div class="form-group">
                                                    <label class="float-label">Add Questions</label>
                                                    <input type="text" name="" class="form-control position-relative" id=""><br>
                                                    <!-- <span class=" position-absolute"><i class="fa fa-plus position-absolute" aria-hidden="true" style="left:220px; bottom:15px;"></i></span> -->

                                                    <!-- <span class="form-bar"></span> -->
                                                </div>
                                            </div>
                                            <div class="col-md-6" id="mul" style="display:none;">
                                                <div class="form-group">
                                                    <label class="float-label">Add Questions</label>
                                                    <input type="text" name="" class="form-control position-relative" id=""><br>
                                                    <!-- <span class=" position-absolute"><i class="fa fa-plus position-absolute" aria-hidden="true" style="left:220px; bottom:15px;"></i></span> -->
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label class="float-label">sadasds</label>
                                                            <textarea name="" id="" cols="30" rows="10"></textarea>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="float-label"></label>
                                                            <input type="text" name="" class="form-control" id="">
                                                        </div>


                                                    </div>
                                                    <!-- <span class="form-bar"></span> -->
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <a href="{{ url('/questionList')}}" class="btn btn-primary">Question List</a>
                                            </div>
                                        </div>
                            
                                   
                                    </form> 
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- <div class="col-sm-12"> -->
                        <!-- Zero config.table start -->
                        <!-- <div class="card" style="margin-top:30px ; padding:0 20px">
                                <h5 style="margin-top:20px;">Subject List</h5>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive" style="margin-top:20px ;">
                                        <table id="myDataTable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>subject_name</th>
                                                    <th>Chapter_name</th>
                                                    <th>Quetion Type</th>
                                                    <th>deficulty</th>
                                                    <th>Marks</th>
                                                    <th>status</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div> -->
                        <!-- Zero config.table end -->
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
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- endinject -->
</body>
<script>
    $(document).ready(function() {
        $('#myDataTable').DataTable();
        $('#flexCheckDefault1').click(function() {
            $opt1 = $("#option_one").val();
            console.log($opt1);
        })

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


        if (select.value == 'subj_ective') {
            document.getElementById('add').style.display = 'none';
            document.getElementById('subj').style.display = 'none';
            document.getElementById('JECT').style.display = 'block';
        }


        if (select.value == 'Multiple_Type_MCQs') {
            document.getElementById('add').style.display = 'none';
            document.getElementById('subj').style.display = 'none';
            document.getElementById('JECT').style.display = 'block';

        }














    }
</script>


</html>