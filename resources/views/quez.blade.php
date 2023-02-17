
<!DOCTYPE html>
<html lang="en">

@include('includes/head')

<style>
    .image {
        width: 317px;
        height: 200px;

    }

    body {
        font-family: "Open Sans", sans-serif;
        color: #444444;
        margin-top: 204px;
        
    }
</style>

<body>
    <!-- ======= Header ======= -->
    @include('includes/navbar')
    <!-- End Header -->

    <main id="main">
        <!-- ======= About Section ======= -->

        <section id="about" class="about mt-5">
            <div class="container" data-aos="fade-up">
                <div class="row gx-0 justify-content-between">

                    <div class="col-md-4">
                        <div class="form-group form-default">
                            <label>Cources </label>
                            <select class="form-control js-example-basic-single" name="" id="courses">
                                <option value="">-select option </option>
                                @foreach($cource as $c)
                                <option value="{{ $c->id }}">{{ $c->cource }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div><br>
                    <div class="col-md-4">
                        <div class="form-group form-default">
                            <label class="float-label">- Select subject</label>
                            <select class="form-control js-example-basic-single" id="subject_name" name="">
                            </select>
                        </div>
                    </div>
                    <div id="questionIds" class="col-md-12">
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->
    </main>
    <!-- End #main -->
    <!-- ======= Footer ======= -->
   <footer id="footer" class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <img src="/img/logo.png" alt="" />
                            <span>caJuniors</span>
                        </a>
                        <p>
                            Cras fermentum odio eu feugiat lide par naso tierra. Justo eget
                            nada terra videa magna derita valies darta donna mare fermentum
                            iaculis eu non diam phasellus.
                        </p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li>
                                <i class="bi bi-chevron-right"></i> <a href="#">Home</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i> <a href="#">About us</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i> <a href="#">Services</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <a href="#">Terms of service</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <a href="#">Privacy policy</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li>
                                <i class="bi bi-chevron-right"></i> <a href="#">Web Design</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <a href="#">Web Development</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <a href="#">Product Management</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i> <a href="#">Marketing</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <a href="#">Graphic Design</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contact Us</h4>
                        <p>
                            A108 Adam Street <br />
                            New York, NY 535022<br />
                            United States <br /><br />
                            <strong>Phone:</strong> +1 5589 55488 55<br />
                            <strong>Email:</strong> info@example.com<br />
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>cajuniors.com</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
    <!-- Designed by <a href="">ICEICO Techonlogies pvt Ltd</a> -->
    
    </div>
    </div>
    </footer>
    <!-- End Footer -->

    <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

    <!-- Vendor JS Files -->
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
</body>
<script>
    $(document).ready(function() {

        // fetch data from courses
        $('#courses').change(function() {
            var courcesID = $(this).val();
            // alert(courcesID);
            if (courcesID) {
                $.ajax({
                    type: "GET",
                    url: "{{ url('/chapter/getSubjectList') }}",
                    data: {
                        data: courcesID
                    },
                    success: function(res) {
                        console.log(res);
                        if (res) {
                            $("#subject_name").empty();
                            $("#subject_name").append('<option>Select Section</option>');
                            $.each(res, function(key, value) {
                                $("#subject_name").append(`<option value="${value.id}">${ value.subject_name }</option`);
                            });
                        } else {
                            $("#subject_name").empty();
                        }
                    }
                });
            }
        });
    });

    $('#subject_name').change(function() {
        var courcesID = $(this).val();

        if (courcesID) {
            $.ajax({
                type: "GET",
                url: "{{ url('/quez/getQizs') }}",
                data: {
                    data: courcesID
                },
                success: function(res) {
                    console.log(res);
                    if (res) {
                        $("#questionIds").append(`<a class="btn btn-primary" href="{{ url('/getquiz/${res}' )}}" style="margin-top:20px;">Start Quiz</a>`);

                    } else {
                        $("#questionIds").empty();
                        dd(QuestionIds);
                    }
                }
            })
        };
    })
</script>



</html>