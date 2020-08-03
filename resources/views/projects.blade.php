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

    <div class="position-relative h-auto">
        <div class="rect-top position-absolute" style="right: 0;">
        </div>
    </div>

    <div class="container-fluid position-relative">
        <div class="img-projects"></div>
        <header class="position-relative">
            <nav class="navbar navbar-expand-md position-relative navbar-light bg-transparent px-md-5 px-2 pt-4">
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
                        <button class="btn-white mr-md-5 btn px-3 shadow primary-color">Call us now</button>
                    </div>
                </div>
            </nav>
        </header>

        <div class="container pb-4 position-relative">
            <div class="row">
                <div class="col-md-8 py-5 my-4">
                    <h2 class="font-weight-bold">Right Partner <br> Right Solution</h2>
                    <p class="montserrat mt-3" style="font-size: .85rem;">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, nulla? Lorem ipsum <br>
                        ectetur adipisicing el
                    </p>
                    <button class="primary-bg btn px-4 text-white py-2 primary-shadow" style="font-size: .8rem;">Start your project</button>
                    <button class="btn-white primary-border btn px-4 mx-3 primary-color py-2" style="font-size: .8rem;">Start your project</button>
                </div>
                <div class="col-md-12 text-center">
                    <div class="scroll-down d-inline-block primary-border text-center">
                        <div class="circle-scroll-down primary-bg d-inline-block">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0 pb-5 position-relative">
        <div class="img-back-list">
            <img src="{{ asset('img/discuss.png') }}" alt="">
        </div>
        <img class="border-projects" src="{{ asset('img/rect-border.png') }}" alt="">
        <img class="border-projects1" src="{{ asset('img/rect-border.png') }}" alt="">
        <div class="container position-relative">
            <div class="row py-4">
                <div class="col-md-8 text-center offset-md-2">
                    <h2>What we offer</h2>
                </div>
            </div>
        </div>
        <div class="row position-relative">
            <div class="col-md-6 offset-md-4">
                <div class="w-100 bg-white px-5 pt-4 pb-2 shadow" style="border-radius: 10px;">
                    <div class="list-checklist my-4">
                        <div class="d-flex">
                            <div class="circle-check">
                                <i class="fas fa-check primary-color" style="font-size: 2rem; position: relative;"></i>
                            </div>
                            <div class="text ml-3">
                                <h6 class="poppins primary-color mb-1" style="font-size: .9rem;">Lorem ipsum dolor sit amet.</h6>
                                <h6 class="montserrat" style="font-size: .75rem;">Lorem ipsum dolor sit amet.</h6>
                            </div>
                        </div>
                    </div>
                    <div class="list-checklist my-4">
                        <div class="d-flex">
                            <div class="circle-check">
                                <i class="fas fa-check primary-color" style="font-size: 2rem; position: relative;"></i>
                            </div>
                            <div class="text ml-3">
                                <h6 class="poppins primary-color mb-1" style="font-size: .9rem;">Lorem ipsum dolor sit amet.</h6>
                                <h6 class="montserrat" style="font-size: .75rem;">Lorem ipsum dolor sit amet.</h6>
                            </div>
                        </div>
                    </div>
                    <div class="list-checklist my-4">
                        <div class="d-flex">
                            <div class="circle-check">
                                <i class="fas fa-check primary-color" style="font-size: 2rem; position: relative;"></i>
                            </div>
                            <div class="text ml-3">
                                <h6 class="poppins primary-color mb-1" style="font-size: .9rem;">Lorem ipsum dolor sit amet.</h6>
                                <h6 class="montserrat" style="font-size: .75rem;">Lorem ipsum dolor sit amet.</h6>
                            </div>
                        </div>
                    </div>
                    <div class="list-checklist my-4">
                        <div class="d-flex">
                            <div class="circle-check">
                                <i class="fas fa-check primary-color" style="font-size: 2rem; position: relative;"></i>
                            </div>
                            <div class="text ml-3">
                                <h6 class="poppins primary-color mb-1" style="font-size: .9rem;">Lorem ipsum dolor sit amet.</h6>
                                <h6 class="montserrat" style="font-size: .75rem;">Lorem ipsum dolor sit amet.</h6>
                            </div>
                        </div>
                    </div>
                    <div class="list-checklist my-4">
                        <div class="d-flex">
                            <div class="circle-check">
                                <i class="fas fa-check primary-color" style="font-size: 2rem; position: relative;"></i>
                            </div>
                            <div class="text ml-3">
                                <h6 class="poppins primary-color mb-1" style="font-size: .9rem;">Lorem ipsum dolor sit amet.</h6>
                                <h6 class="montserrat" style="font-size: .75rem;">Lorem ipsum dolor sit amet.</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5 py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 px-5">
                    <h1 class="mx-5">We're community built on talent</h1>
                </div>
                <div class="col-md-5">
                    <p class="montserrat" style="font-size: .9rem;">
                        Lorem ipsum dolor, sit amet . Error molestiae iusto beatae, ea, praesentium similique et architecto excepturi vero dolore corrupti cum commodi aliquam quam.
                    </p>
                    <button class="primary-bg btn px-4 text-white py-2 primary-shadow" style="font-size: .8rem;">Get Started</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid position-relative overflow-hidden" style="padding: 10px 0px 40px 0px !important">
        <img src="{{ asset('img/rect-border.png') }}" class="position-absolute rect-clients" alt="">
        <img src="{{ asset('img/rect-border.png') }}" class="position-absolute rect-clients1" alt="">
        <div class="container position-relative">
            <div class="row">
                <div class="col-md-6 text-center offset-md-3 pt-5 pb-3">
                    <h2>What do our client say ?</h2>
                </div>
            </div>
        </div>
        <div class="container position-relative pb-5">
            <div class="position-absolute w-50 overflow-hidden img-clients" style="border-radius: 15px;">
            <img src="{{ asset('img/woman_with_laptop.svg') }}" class="w-100 position-relative" style="top: -100px;" alt="">
            </div>
            <div class="row position-relative">
                <div class="col-md-7">
                    <div class="w-100 shadow bg-white px-5 py-4" style="border-radius: 15px;">
                        <p class="mb-0 mmontserrat">Purwosari</p>
                        <h5 class="primary-color mb-3">Lorem ipsum dolor sit company</h5>
                        <p class="mb-0 mmontserrat">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta doloribus voluptatem vero minus ab? Molestias ipsam quis quaerat ad aut minima quos accusamus voluptatem beatae.</p>
                        <div class="text-right pt-3">
                            <h6 class="mb-0 mmontserrat">Ninno - CEO</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-light py-5 position-relative overflow-hidden grow-clients">
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-center offset-md-2">
                    <h2>Its time to grow</h2>
                    <p class="montserrat" style="font-size: .75rem;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae, explicabo!</p>
                </div>
                <div class="col-md-10 offset-md-1 position-relative">
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
