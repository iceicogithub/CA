@include('includes/head')
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="{{ url('/') }}" class="logo d-flex align-items-center">
            <img src="/img/ca-junior.png" alt="" />
            <!-- <span>FlexStart</span> -->
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="{{ url('/') }}">Home</a></li>
                <li class="dropdown">
                    <a href="#"><span>Courses</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route('products.list') }}">Shop</a></li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#"><span>Free Resources</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Blog</a></li>

                        <li><a href="{{ url('/quez')}}">Quiz</a></li>
                        <li><a href="#">Asks Your Doubts Here</a></li>
                        <li><a href="#">Targets</a></li>
                        <li><a href="#">Important Links</a></li>
                    </ul>
                </li>

                <li>
                    <a class="nav-link scrollto" href="#portfolio">Contact US</a>
                </li>

                <li class="dropdown">
                    <a href="#"><span>Sell With US</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ url('instructor-registration') }}">Instructor Registration</a></li>

                    </ul>
                </li>
                <li class="dropdown">
                    <?php
                    use Illuminate\Support\Facades\DB;
                    $student = DB::table('students')
                        ->where('id', '=', session('LoggedUser'))
                        ->first();
                    ?>
                    @if (session()->has('LoggedUser'))
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            {{ $student->name }}
                        </a>
                        <ul>
                            <li> <a class="dropdown-item">
                                    <i class="ti-settings text-primary"></i>
                                    Settings
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('student_auth.logout') }}">
                                    <i class="ti-power-off text-primary"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                </li>
            @else
                <li class="dropdown">
                    <ul>

                        <li><a href="{{ url('/student/login') }}">Login</a></li>
                        <li><a href="{{ url('/student/register') }}">Student Registration</a></li>

                    </ul>

                </li>
                @endif
                <!-- <li>
              <a class="getstarted scrollto" href="#about">Get Started</a>
            </li> -->
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
    </div>
</header>
