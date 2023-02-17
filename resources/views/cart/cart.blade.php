<!DOCTYPE html>
<html lang="en">

@include('includes/head')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

<body>
    <!-- ======= Header ======= -->
    @include('includes/navbar')
    <!-- End Header -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="" class="" style="margin-top:55px ;">
            <div class="container" data-aos="fade-up">
                <div class="row gx-0">
                    @if ($message = Session::get('success'))
                        <div class="p-4 mb-3 bg-green-400 rounded">
                            <p class="text-green-800">{{ $message }}</p>
                        </div>
                    @endif
                    <div class="col-md-8 m-3" style="border: 1px solid #f6f6f6; background-color:#f6f6f6; text-align:center">

                        <table class="table ">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th class="text-center">Quantity</th>
                                    <th>Price</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cartItems as $item)
                                    <tr>
                                        <td>
                                            <a href="#">
                                                <img src="{{ $item->attributes->image }}" class="w-20 rounded"
                                                    alt="Thumbnail">
                                            </a>
                                        </td>
                                        <td class="text-center p-3 ps-5">
                                            <form action="{{ route('cart.update') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $item->id }}">
                                                <input type="number" name="quantity" value="{{ $item->quantity }}"
                                                    class="">
                                                <button type="submit"
                                                    class="px-2 pb-2 ml-2 text-white bg-blue-500">update</button>
                                            </form>
                                        </td>
                                        <td>
                                            ${{ $item->price }}
                                        </td>

                                        <td>
                                            <form action="{{ route('cart.remove') }}" method="POST">
                                                @csrf
                                                <input type="hidden" value="{{ $item->id }}" name="id">
                                                <button class="px-4 py-2 text-white bg-red-600">x</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>

                    </div>
                    <div class="col-md-3" style="border: 1px solid #f6f6f6; background-color:#f6f6f6; text-align:center">
                      <div class="" >
                      <h3 class="text-dark">Total: {{ Cart::getTotal() }}</h3>
                      <a href="{{ url('/student/login') }}" class="btn btn-warning text-center" style="padding-left: 60px; padding-right:60px">Proceed to Buy</a>
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
</body>

</html>
