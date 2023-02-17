<!DOCTYPE html>
<html lang="en">

@include('includes/head')

<body>
    <!-- ======= Header ======= -->
    @include('includes/navbar')
    <!-- End Header -->

    <!-- student-Registration start -->
    <section id="hero" class="hero d-flex align-items-center mt-5">
        <div class="section-container" style="margin: 0 auto;">
            <h3 class="text-center my-2"><strong>Instructor Registration</strong> </h3>
        <div class="container" style="max-width: 763px;
        padding: 23px 42px;
        box-shadow: 2px 2px 2px 2px rgb(0 0 0 / 50%);">
   
   <form action="{{ route('auth.store')}}" method="POST">

      @if(Session::get('success'))
      <div class="alert alert-success">
        {{Session::get('success')}}
      </div>
      @endif
      
      @if(Session::get('fail'))
      <div class="alert alert-danger">
        {{Session::get('fail')}}

      </div>
      @endif
        @csrf
        - <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">First Name</label>
          <input type="text" class="form-control" name="name" id="fname" aria-describedby="emailHelp">
          <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
          <span class="text-danger">
            @error('name')
            {{$message}}
            @enderror
          </span>
        </div>

        <div class="mb-3">
            <input class="form-control" type="text" name="last_name" placeholder="enter last name">
            <span class="text-danger">
            @error('name')
            {{$message}}
            @enderror
          </span>
        </div>
        
        <div class="mb-3">
            <input class="form-control" type="email" name="email" placeholder="enter email">

            <span class="text-danger">
            @error('name')
            {{$message}}
            @enderror
          </span>
        </div>

        <div class="mb-3">
            <input class="form-control" type="pass" name="password" placeholder="enter password">
            <span class="text-danger">
            @error('name')
            {{$message}}
            @enderror
          </span>
        </div>

        
     

        
       

        <!-- <div class="mb-3">
          <label for="" class="form-label">Last Name</label>
          <input type="text" class="form-control" name="last_name" id="lname">
          <span class="text-danger">
            @error('last_name')
            {{$message}}
            @enderror
        </span>
        </div>
        
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">E-Mail</label>
          <input type="eamil" class="form-control" name="email" id="email">
          <span class="text-danger">
            @error('email')
            {{$message}}
            @enderror
        </span>
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" id="password">
          <span class="text-danger">
            @error('password')
            {{$message}}
            @enderror
        </span>
        </div> -->


        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="check">
          <label class="form-check-label" for="exampleCheck1">By signing up, I agree with the website's Terms and Conditions</label>
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
        <a href="{{ route('auth.login')}}">I already have an account, sign in</a>
      </form>
</div>
</div>
</section>
    <!-- student-Registration end -->

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
    <script src="/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="/vendor/aos/aos.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/js/main.js"></script>
</body>

</html>