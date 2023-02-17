@include('includes/head')

@include('includes/navbar')

<?php



?>


<main id="main">
    <!-- ======= About Section ======= -->

    </div>
    <section id="about" class="about" style="margin-top:90px ;">
        <div class="container" data-aos="fade-up">


            <?php

            use Illuminate\Support\Facades\DB;

            $show = DB::table('quizs')->where('id', '15')->get();

            ?>
            @foreach($show as $s)

            <div>
                {{$s->duration}}
            </div>
            @endforeach


            <div class="" style="float:right">
                <label>Total_Marks</label>
                <input type="text" id="totalmark" readonly>

            </div>
            @foreach ($quiz as $i => $sltt)
            <div class="col-12 mb-5" style="border-bottom: 2px solid rgb(151, 146, 146);">
                <label class="" for="">Question:{{++$i}}
                    <!-- <h5>{{$sltt->duration}}</h5> -->
                    <p>{!!$sltt->Add_question!!}</p>
                </label>

                <div class="">
                    <input type="text" value="{{$sltt->Marks}}" readonly class="editmarks" style="float:right" size="2">
                </div>

                <div>
                    <span>
                        @if ($sltt->Question_type == 'Single_Type_MCQs')
                        <div class="col-sm-12">
                            <ul class='d-flex'>
                                <div class="form-group">
                                    <p>
                                        <li class="m-3" style="list-style: none;">
                                            <div class="form-check">c)<input class="form-check-input" type="radio" name="exampleRadios" id="" value="option1">
                                                <label class="form-check-label" for="exampleRadios1">
                                                    {{ $sltt->Option_one }}
                                                </label>
                                            </div>
                                        </li>
                                    </p>
                                    <p>
                                        <li class="m-3" style="list-style: none;">
                                            <div class="form-check">c)<input class="form-check-input" type="radio" name="exampleRadios1" id="" value="option1">
                                                <label class="form-check-label" for="exampleRadios1">
                                                    {{ $sltt->Option_two }}
                                                </label>
                                            </div>
                                        </li>
                                    </p>
                                    <p>
                                        <li class="m-3" style="list-style: none;">
                                            <div class="form-check">c)<input class="form-check-input" type="radio" name="exampleRadios" id="" value="option1">
                                                <label class="form-check-label" for="exampleRadios1">
                                                    {{ $sltt->Option_three }}
                                                </label>
                                            </div>
                                        </li>
                                    </p>
                                    <p>
                                        <li class="m-3" style="list-style: none;">
                                            <div class="form-check">c)<input class="form-check-input" type="radio" name="exampleRadios" id="" value="option1">
                                                <label class="form-check-label" for="exampleRadios1">
                                                    {{ $sltt->Option_four }}
                                                </label>
                                            </div>
                                        </li>
                                    </p>
                                </div>
                            </ul>
                        </div>
                        @elseif ($sltt->Question_type == 'Multiple_Type_MCQs')
                        <div class="col-sm-12">
                            <ul class='d-flex text-bold'>
                                <p>a)<input type="checkbox" style="margin: 4px;">
                                    <li class="m-3" style="list-style: none;">{{ $sltt->Option_ones }}</li>
                                </p>
                                <p>b)<input type="checkbox" style="margin: 4px;">
                                    <li class="m-3" style="list-style: none;">{{ $sltt->Option_twos }}</li>
                                </p>
                            </ul>
                        </div>

                        <div class="col-sm-12">
                            <ul class='d-flex'>
                                <p>
                                    c)<input type="checkbox" style="margin: 4px;">
                                    <li class="m-3" style="list-style: none;">{{ $sltt->Option_threes }}</li>
                                </p>
                                <p>
                                    d)<input type="checkbox" style="margin: 4px;">
                                    <li class="m-3" style="list-style: none;">{{ $sltt->Option_fours }}</li>
                                </p>
                            </ul>
                        </div>
                        @elseif ($sltt->Question_type == 'True_false')
                        <ul class='d-flex m-2'>
                            <div class="form-group">
                                <p>
                                    <li class="m-3" style="list-style: none;">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="true" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">
                                                {{$sltt->Trues}}
                                            </label>

                                        </div>
                                    </li>
                                </p>
                                <p>
                                    <li class="m-3" style="list-style: none;">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="false" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">
                                                {{$sltt->Falses}}
                                            </label>
                                        </div>
                                    </li>
                                </p>
                            </div>

                        </ul>
                        @elseif ($sltt->Question_type == 'sub_jective')
                        <textarea class="form-control"></textarea>
                        @endif
                        <ul class='d-flex'>
                            <!-- <input type="checkbox"><li class="m-3"  style="list-style: none;"> {{ $sltt->Question_type }}</li>
                        <input type="checkbox"><li class="m-3"  style="list-style: none;"> {{ $sltt->Difficulty_level }}</li> -->
                        </ul>
                    </span>
                </div>
            </div>
            @endforeach

            <div class="col-sm-8">
                <button type="buttton" class="btn btn-primary" id="submit-form">Submit</button>

            </div>
        </div>


    </section>



    <!-- End About Section -->

</main>



<script src="/vendors/purecounter/purecounter_vanilla.js"></script>
<script src="/vendors/aos/aos.js"></script>
<script src="/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/vendors/glightbox/js/glightbox.min.js"></script>
<script src="/vendors/isotope-layout/isotope.pkgd.min.js"></script>
<script src="/vendors/swiper/swiper-bundle.min.js"></script>
<script src="/vendors/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="/js/main.js"></script>

<!-- <script src="https://code.jquery.com/jquery-3.6.3.slim.min.js" integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script> -->
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>



<script>
    $(document).ready(function() {

        var changemark = []
        $('.editmarks').each(function() {
            changemark.push($(this).val());
        });
        console.log(changemark)
        var total = 0;
        for (var i = 0; i < changemark.length; i++) {
            total += changemark[i] << 0;
        }

        $('#totalmark').val(total);
        // var mark = changemark.toString();

        // if (!findMark) {

        //     totalMarks.push({
        //         id: question_id,
        //         mark: mark
        //     });
        // } else {
        //     let index = totalMarks.findIndex(function(value, index) {
        //         return value.id == question_id;
        //     })
        //     totalMarks.splice(index, 2);
        // }
        // $('#totalmark').text(totalMarks.reduce((n, {
        //     mark
        // }) => n + mark, 0));

        var time = json($time);
        console.log(time);

        $('.time').text(time[0] + ':' + time[1] + ':00 Left time');

        var seconds = 60;
        var hours = time[0];
        var minutes = time[1];

        setInterval(() => {
            if (seconds <= 0) {
                minute--;
                seconds = 60;
            }
            $('.time').text(hours + ':' + minutes + ':' + seconds + ' Left time');



            seconds--;



        }, 1000);



    });
    $(document).ready(function() {
        $("#submit-form").on('click', function() {
            var get_true = $("#true").text();
            var get_false = $("#false").text();
            dd($get_true,$get_false);
            var get_false = $("#").text();
            var get_false = $("#").text();
        });
    });
</script>
