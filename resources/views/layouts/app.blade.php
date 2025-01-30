<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>IDEAS Project | Student Management System</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link rel="shortcut icon" href="https://ideasproject.gov.ng/wp-content/uploads/2019/12/IDEAS-Logo-White.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <!-- Navbar Start -->
    <div class="shadow-sm container-fluid sticky-top bg-dark bg-light-radial">
        <nav class="container navbar navbar-expand-lg bg-dark bg-light-radial navbar-dark">
            <a href="#" class="navbar-brand">
                 <img src="https://ideasproject.gov.ng/wp-content/uploads/2022/06/ideas-logo1.jpg" alt="" width="60px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="py-0 navbar-nav ms-auto">
                    <a href="#" class="nav-item nav-link">Dashboard</a>
                    <a href="#" class="nav-item nav-link">Projects</a>
                    <a href="#" class="nav-item nav-link">Students</a>
                    <a href="#" class="nav-item nav-link">Interns</a>
                    <a href="#" class="nav-item nav-link">Newsletters</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container my-4 text-center page-header">
        <h1 class="mb-3 display-3 text-uppercase">
            Students
        </h1>
        <div class="d-inline-flex">
            <h6 class="m-0 text-uppercase"><a href="#" class="text-decoration-none" style="color: #387c46">Home</a></h6>
            <h6 class="px-3 m-0">/</h6>
            <h6 class="m-0 text-uppercase">Students</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    {{-- @yield('content') --}}
    @yield('content')

    <!-- Footer Start -->
    <div class="py-5 footer container-fluid position-relative text-white-50">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3">
                    <img src="https://ideasproject.gov.ng/wp-content/uploads/2019/12/IDEAS-Logo-White.png" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <div class="row g-5">
                        <div class="col-sm-6">
                            <h4 class="mb-4 text-white text-uppercase footer-subtext">Contact Information</h4>
                            <div class="d-flex flex-column justify-content-start">
                                <div class="gap-3 mb-3 d-flex align-items-center">
                                    <i class="text-white fa-solid fa-location-dot fs-5"></i>
                                    <span>245, Samuel Adesujo Ademulegun Street, Central business District, Abuja FCT</span>
                                </div>
                                <div class="gap-3 mb-3 d-flex align-items-center">
                                    <i class="text-white fa-solid fa-phone-flip fs-5"></i>
                                    <span>09085257160</span>
                                </div>
                                <div class="gap-3 mb-3 d-flex align-items-center">
                                    <i class="text-white fa-solid fa-phone-flip fs-5"></i>
                                    <span>07080880057</span>
                                </div>
                                <div class="gap-3 d-flex align-items-center">
                                    <span class="text-white fw-bolder fs-4">@</span>
                                    <span>info@ideasproject.gov.ng</span>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h4 class="mb-4 text-white text-uppercase footer-subtext">Quick Links</h4>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="mb-2 text-white-50" href="#"><i class="fa fa-angle-right me-2"></i>IDEAS Project</a>
                                <a class="mb-2 text-white-50" href="#"><i class="fa fa-angle-right me-2"></i>Innovation Grant</a>
                                <a class="mb-2 text-white-50" href="#"><i class="fa fa-angle-right me-2"></i>News</a>
                                <a class="mb-2 text-white-50" href="#"><i class="fa fa-angle-right me-2"></i>Informal Sector</a>
                                <a class="mb-2 text-white-50" href="#"><i class="fa fa-angle-right me-2"></i>Upcoming Events</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h4 class="mb-4 text-white text-uppercase footer-subtext">Follow us</h4>
                    <div class="gap-3 d-flex text-white-50">
                        <a href="#" class="text-white-50 fs-3">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="#" class="text-white-50 fs-3">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-white border-white container-fluid border-top footer">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-between">
                <div class="py-4 text-center text-md-start">
                    <p class="mb-0">Copyright &copy; {{ date('Y') }} IDEAS Project</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    @session('message')
        <div id="notification" class="p-4 shadow notification position-fixed d-flex align-items-center" style="">
            <span class="text-dark">{{ session('message') }}</span>
            <button id="closeBtn" class="ms-3 btn btn-sm text-danger close-notification" style="">
                &times;
            </button>
        </div>
    @endsession

    @if ($errors->any())
        <div id="notification" class="p-4 shadow notification position-fixed d-flex align-items-center">
            <ul class="p-0 m-0 d-flex flex-column justify-content-center" style="list-style-type: none">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button id="closeBtn" class="ms-3 btn btn-sm text-danger close-notification" style="">
                &times;
            </button>
        </div>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

