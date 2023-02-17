
<head>
    @include('path/head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .question ul {
            list-style: none;
        }

        .question .color {
            color: #50a6e5;
            font-weight: bold
        }
    </style>
</head>
<div class="">
    <div >

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-block" style="margin:10px ;">
                        <form action="">
                            @foreach ($paper as $p)
                                <div class="row">

                                    <div class="col-md-4">
                                        <h5>PAPER NAME: <span>{{ $p->paper_Name }}</span></h5>
                                    </div>
                                    <div class="col-md-4">
                                        @php
                                            $getsub = DB::table('subject')
                                                ->where('id', $p->subject_id)
                                                ->get();
                                            
                                        @endphp
                                        @foreach ($getsub as $sub)
                                            <h5>SUBJECT: <span>{{ $sub->subject_name }}</span></h5>
                                        @endforeach
                                    </div>
                                    <div class="col-md-4">
                                        @php
                                            
                                        @endphp
                                        <h5>STUDENT NAME : <SPan></SPan></h5>
                                    </div>
                                    <div class="col-md-4">
                                        <h5>Marks: <span>{{ $p->total_mark }}</span></h5>
                                    </div>
                                    <div class="col-md-4">
                                        <h5>TIME LEFT: <SPan>{{ $p->Duration }}</SPan></h5>
                                    </div>

                                </div>
                                <hr>
                                <div class="row question">
                                    @php
                                        $ids = preg_split('/\,/', $p->question_ids);
                                        $question = DB::table('questions_models')
                                            ->whereIn('id', $ids)
                                            ->get();
                                    @endphp
                                    @foreach ($question as $i=>$que)
                                  
                                    
                                    <?php
                                    $q=1+ $i;
                                   
                                    ?>
                                        @if($que->Question_type != 'sub_jective')
                                         <h5>Question <span>{{ ++$i }}{!! $que->Add_question !!}</span></h5>
                                        @endif

                                        @if ($que->Question_type == 'Single_Type_MCQs')
                                            <ul>
                                                <li class='m-3'><span class="color">A)</span>
                                                    <input  type="radio" name="radio-{{$q}}" class="singleans" id="opt1" onclick="getCheck('{{$que->Option_one}}','{{$que->Question_type}}','{{$que}}')" > <span class="p-3">
                                                        {{ $que->Option_one }}</span>
                                                </li>
                                                <li class='m-3'><span class="color">B)</span>
                                                    <input type="radio"  name="radio-{{$q}}" class="singleans" id="opt2" > <span
                                                        class="p-3">{{ $que->Option_two }}</span>
                                                </li>
                                                <li class='m-3'><span class="color">C)</span>
                                                    <input type="radio"  name="radio-{{$q}}" class="singleans" id="opt3"  > <span
                                                        class="p-3">{{ $que->Option_three }}</span>

                                                </li>
                                                <li class='m-3'><span class="color">D)</span>
                                                    <input type="radio"  name="radio-{{$q}}" class="singleans" id="opt4"  > <span
                                                        class="p-3">{{ $que->Option_four }}</span>

                                                </li>
                                                <li><input type="text" value="{{$que->Right_answer}}" class="rightans"></li>
                                                 </ul>
                                                 
                                        @elseif ($que->Question_type == 'Multiple_Type_MCQs')
                                            <ul>
                                                <li class='m-3'><span class="color">A)</span>
                                                    <input type="checkbox" class="multians"> <span
                                                        class="p-3">{{ $que->Option_ones }}</span>

                                                </li>
                                                <li class='m-3'><span class="color">B)</span>
                                                    <input type="checkbox" class="multians"   > <span
                                                        class="p-3">{{ $que->Option_twos }}</span>
                                                    </p>
                                                </li>
                                                <li class='m-3'><span class="color">C)</span>
                                                    <input type="checkbox" class="multians" > <span
                                                        class="p-3">{{ $que->Option_threes }}</span>
                                                    </p>
                                                </li>
                                                <li class='m-3'><span class="color">D)</span>
                                                    <input type="checkbox" class="multians"> <span
                                                        class="p-3">{{ $que->Option_fours }}</span>
                                                    </p>
                                                </li>   
                                            </ul>
                                        @elseif ($que->Question_type == 'True_false')
                                            <ul>
                                                <li class='m-3'><span class="color">A)</span>
                                                    <input type="radio"  name="radio-{{$q}}" class=""  > <span
                                                        class="p-3">{{ $que->Trues }}</span>
                                                </li>
                                                <li class='m-3'><span class="color">B)</span>
                                                    <input type="radio"  name="radio-{{$q}}" class="" > <span
                                                        class="p-3">{{ $que->Falses }}</span>
                                                </li>
                                            </ul>
                                          @endif
                                        <hr>
                                    @endforeach
                                </div>
                            @endforeach
                            <button type="button" id="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
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
   function getCheck(que, type , opt){
       console.log(que);
    }
</script>