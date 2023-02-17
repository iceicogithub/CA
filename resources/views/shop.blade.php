<!DOCTYPE html>
<html lang="en">

@include('includes/head')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<style>
    .image {
        width: 317px;
        height: 200px;

    }
</style>

<body>
    <!-- ======= Header ======= -->
    @include('includes/navbar')
    <!-- End Header -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about" style="margin-top:55px ;">

            <div class="container" data-aos="fade-up">
                <div class="row justify-content-end">
                    <div class="col-lg-3 float-right btn btn-primary ">
                        <a href="{{ route('cart.list') }}" class="">
                            <i class="bi bi-cart-check-fill"></i>{{ Cart::getTotalQuantity()}}
                        
                           </a>
                    </div>
                </div>
                <div class="row gx-0">
                   
                    <?php
                    
                    use Illuminate\Support\Facades\DB;
                    
                    $show = DB::table('products')->where('status', 1)->get();
                   
                    ?>
                    @foreach ($show as $s)
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="col-4 mt-3">
                                <div class="card" style="width: 20rem;height: 400px;" onclick="myFunction(this)">
                                    <img class="card-img-top image" src="productImage/{{ $s->product_image }}"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $s->product_name }}</h5>
                                        <p><i class="fa fa-inr" aria-hidden="true"></i>{{ $s->product_price }}</p>
                                        <p class="card-text">{{ $s->description }}</p>
                                    </div>
                                    <div class="card-footer">
                                        <form action="{{ route('cart.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" value="{{ $s->id }}" name="id">
                                            <input type="hidden" value="{{ $s->product_name }}" name="name">
                                            <input type="hidden" value="{{ $s->product_price }}" name="price">
                                            <input type="hidden" value="{{ $s->description }}" name="description">
                                            <input type="hidden" value="{{ $s->product_image }}" name="image">
                                            <input type="hidden" value="1" name="quantity">
                                                <button type="submit" class="btn btn-primary"><i class="bi bi-cart"></i>Add To
                                                    Cart</button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    @endforeach
                    


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
                Designed by <a href="">ICEICO Techonlogies pvt Ltd</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

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
    <script>
        function myFunction(a) {
          a.parentNode.getElementsByClassName('dropdown-content')[0].classList.toggle("show");
        }
      </script>
</body>

</html>
