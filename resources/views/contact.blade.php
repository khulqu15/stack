<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stack That Sale | Home</title>
    <link rel="shortcut icon" href="{{ asset('img/fav.png') }}" type="image/x-icon">
    <!-- framework bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- font awesome icon open source -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <!-- slick slider -->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <!-- slick slider theme -->
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="w-100">

    <div class="container-fluid p-0 img-studies position-relative overflow-hidden pb-5">
        <div class="img-study position-absolute"></div>
        <header>
            <nav class="navbar navbar-expand-md position-relative navbar-light bg-transparent px-md-5 px-2 pt-4 w-100">
                <a class="navbar-brand pl-md-5 ml-md-3 ml-0 pl-0" href="#"><h5 class="font-weight-bold">Stack <br> ThatSale</h5></a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item mMenu mx-md-2 mx-0">
                            <a class="nav-link px-md-3 primary-color" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item mMenu mx-md-2 mx-0">
                            <a class="nav-link px-md-3" href="{{ url('services') }}">Our Services</a>
                        </li>
                        <li class="nav-item mMenu mx-md-2 mx-0 active-nav">
                            <a class="nav-link px-md-3" href="{{ url('projects') }}">Our Projects</a>
                        </li>
                        <li class="nav-item mMenu mx-md-2 mx-0">
                            <a class="nav-link px-md-3" href="{{ url('/') }}">Blog</a>
                        </li>
                        <li class="nav-item mMenu mx-md-2 mx-0">
                            <a class="nav-link px-md-3" href="{{ url('contact') }}">Contact Us</a>
                        </li>
                    </ul>
                    <div class="d-inline mr-md-5 pr-md-5">
                        <button class="btn-white mr-md-5 btn px-3 shadow-sm primary-color">Call us now</button>
                    </div>
                </div>
            </nav>
        </header>

        <div class="header position-relative pt-5 mt-5 pb-5 text-center">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h1>Contact Us</h1>
                    <p class="montserrat mb-5" style="font-size: .8rem;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, at voluptatibus magni possimus repellat molestias? Lorem ipsum dolor sit amet consectetur.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="position-relative container" style="top: -90px;">
        <div class="row">
            <div class="col-md-10 offset-md-1 p-4 shadow position-relative bg-white" style="border-radius: 15px;">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                          <input type="text" name="name" id="name" class="form-control form-control-lg p-4" style="font-size: .8rem;" placeholder="Your name">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                          <input type="email" name="email" id="email" class="form-control form-control-lg p-4" style="font-size: .8rem;" placeholder="Your email">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <textarea name="msg" id="msg" class="form-control form-control-lg p-4" style="font-size: .8rem; resize: none;" placeholder="Your Message" rows="3"></textarea>
                        </div>
                        <div class="text-center">
                            <button class="btn primary-bg px-4 py-2 primary-shadow text-white" style="font-size: .8rem;">Send message</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-light py-4">
        <div class="container text-center py-4">
            <div class="row">
                <div class="col-4">
                    <h1 class="mb-3"><i class="fas fa-phone primary-color"></i></h1>
                    <p class="montserrat mb-0" style="font-size: .8rem;">085645027785</p>
                </div>
                <div class="col-4">
                    <h1 class="mb-3"><i class="fas fa-envelope primary-color"></i></h1>
                    <p class="montserrat mb-0" style="font-size: .8rem;">khusnul.ninno15@gmail.com</p>
                </div>
                <div class="col-4">
                    <h1 class="mb-3"><i class="fas fa-map-marker-alt primary-color"></i></h1>
                    <p class="montserrat mb-0" style="font-size: .8rem;">Purwosari, Pasuruan</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-md-12 p-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.2078049186716!2d112.74621741435644!3d-7.767775079200021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7d3c5631acbf5%3A0xa71d9f205034b481!2sSMK%20Negeri%201%20Purwosari!5e0!3m2!1sid!2sid!4v1595705160792!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>

    <footer class="container-fluid pt-5">
        <div class="container mb-2">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="font-weight-bold">Stack <br> ThatSale</h2>
                    <p class="mt-2 montserrat" style="font-size: .8rem;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, dolorem.</p>
                    <p class="mt-3 icons-social" style="font-size: 1.6rem;">
                        <i class="mr-2 fab fa-facebook" style="color: #39579a;"></i>
                        <i class="mr-2 fab fa-twitter" style="color: #69ace0;"></i>
                        <i class="mr-2 fab fa-instagram" style="color: #ef96b4;"></i>
                        <i class="mr-2 fab fa-linkedin" style="color: #007bb5;"></i>
                    </p>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-3">
                            <ul style="list-style: none;" class="lato">
                                <li class="mb-4 font-weight-bold">Resource</li>
                                <li class="mb-2">Home</li>
                                <li class="mb-2">Services</li>
                                <li class="mb-2">Projects</li>
                                <li class="mb-2">Blog</li>
                                <li class="mb-2">About Us</li>
                            </ul>
                        </div>
                        <div class="col-md-5">
                            <ul style="list-style: none;" class="lato">
                                <li class="mb-4 font-weight-bold">Services</li>
                                <li class="mb-2">Website & Mobile App Design</li>
                                <li class="mb-2">Digital Marketing Information</li>
                                <li class="mb-2">Web Analytics Audit</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul style="list-style: none;" class="lato">
                                <li class="mb-4 font-weight-bold">Company</li>
                                <li class="mb-2">Add 5666 Barret Rd, Los Angeles</li>
                                <li class="mb-2">CA 90032</li>
                                <li class="mb-2">Tel: 085645027785</li>
                                <li class="mb-2">Email: khusnul.ninno15@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center bg-secondary py-3">
                <p class="mb-0 text-white">@2020 SideScript Developer & Mohammad Khusnul Khuluq</p>
            </div>
        </div>
    </footer>


    <!-- jquery lib -->
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <!-- framework bootstrap -->
    <!-- <script src="js/bootstrap.bundle.min.js"></script> -->
    <!-- font awesome icon open source -->
    <script src="{{ asset('js/all.min.js') }}"></script>
    <script src="{{ asset('js/fontawesome.min.js') }}"></script>
    <!-- slick slider -->
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <!-- typeit javascript -->
    <script src="{{ asset('js/typeit.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
