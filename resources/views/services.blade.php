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
                        <li class="nav-item mMenu mx-md-2 mx-0 active-nav">
                            <a class="nav-link px-md-3" href="{{ url('services') }}">Our Services</a>
                        </li>
                        <li class="nav-item mMenu mx-md-2 mx-0">
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
            <h1>Case studies</h1>
            <p class="montserrat mb-5" style="font-size: .8rem;">
                <span class="font-weight-bold mx-2">All</span>
                <span class="mx-2">Real Estate</span>
                <span class="mx-2">Leisure</span>
                <span class="mx-2">E-commerce</span>
                <span class="mx-2">Travel & Transportation</span>
            </p>
        </div>
    </div>

    <div class="container position-relative" style="top: -100px;">
        <div class="row">
            <div class="col-md-6 mb-md-4 mb-5">
                <div class="card border-0 shadow overflow-hidden" style="border-radius: 13px !important;">
                    <img class="card-img-top" src="{{ asset('img/discuss.png') }}" alt="">
                    <div class="card-body px-4">
                        <span class="badge badge-secondary p-2 px-3 montserrat">Digital Marketing</span>
                        <span class="badge badge-secondary p-2 px-3 montserrat">SEO</span>
                        <h4 class="card-title pt-2">Tarrin Company</h4>
                        <div class="row pt-1 pb-4">
                            <div class="col-6">
                                <h1 class="primary-color mb-0 montserrat" style="font-size: 2.5rem;">258%</h1>
                                <p class="mb-0 montserat" style="font-size: .7rem;">Organic traffic increased</p>
                            </div>
                            <div class="col-6">
                                <h1 class="primary-color mb-0 montserrat" style="font-size: 2.5rem;">1,398</h1>
                                <p class="mb-0 montserat" style="font-size: .7rem;">Lead increased</p>
                            </div>
                        </div>
                        <p class="card-text montserrat" style="font-size: .7rem;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, voluptate qui porro praesentium aliquam dolorum magni, odio perferendis, accusantium iste veniam et officiis optio eos?</p>
                        <div class="text-right">
                            <button class="btn btn-white primary-border px-4 py-3 montserrat" style="font-size: .7rem; border-radius: 10px;">Read more</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-md-4 mb-5">
                <div class="card border-0 shadow overflow-hidden" style="border-radius: 13px !important;">
                    <img class="card-img-top" src="{{ asset('img/discuss.png') }}" alt="">
                    <div class="card-body px-4">
                        <span class="badge badge-secondary p-2 px-3 montserrat">Digital Marketing</span>
                        <span class="badge badge-secondary p-2 px-3 montserrat">SEO</span>
                        <h4 class="card-title pt-2">Tarrin Company</h4>
                        <div class="row pt-1 pb-4">
                            <div class="col-6">
                                <h1 class="primary-color mb-0 montserrat" style="font-size: 2.5rem;">258%</h1>
                                <p class="mb-0 montserat" style="font-size: .7rem;">Organic traffic increased</p>
                            </div>
                            <div class="col-6">
                                <h1 class="primary-color mb-0 montserrat" style="font-size: 2.5rem;">1,398</h1>
                                <p class="mb-0 montserat" style="font-size: .7rem;">Lead increased</p>
                            </div>
                        </div>
                        <p class="card-text montserrat" style="font-size: .7rem;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, voluptate qui porro praesentium aliquam dolorum magni, odio perferendis, accusantium iste veniam et officiis optio eos?</p>
                        <div class="text-right">
                            <button class="btn btn-white primary-border px-4 py-3 montserrat" style="font-size: .7rem; border-radius: 10px;">Read more</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-md-4 mb-5">
                <div class="card border-0 shadow overflow-hidden" style="border-radius: 13px !important;">
                    <img class="card-img-top" src="{{ asset('img/discuss.png') }}" alt="">
                    <div class="card-body px-4">
                        <span class="badge badge-secondary p-2 px-3 montserrat">Digital Marketing</span>
                        <span class="badge badge-secondary p-2 px-3 montserrat">SEO</span>
                        <h4 class="card-title pt-2">Tarrin Company</h4>
                        <div class="row pt-1 pb-4">
                            <div class="col-6">
                                <h1 class="primary-color mb-0 montserrat" style="font-size: 2.5rem;">258%</h1>
                                <p class="mb-0 montserat" style="font-size: .7rem;">Organic traffic increased</p>
                            </div>
                            <div class="col-6">
                                <h1 class="primary-color mb-0 montserrat" style="font-size: 2.5rem;">1,398</h1>
                                <p class="mb-0 montserat" style="font-size: .7rem;">Lead increased</p>
                            </div>
                        </div>
                        <p class="card-text montserrat" style="font-size: .7rem;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, voluptate qui porro praesentium aliquam dolorum magni, odio perferendis, accusantium iste veniam et officiis optio eos?</p>
                        <div class="text-right">
                            <button class="btn btn-white primary-border px-4 py-3 montserrat" style="font-size: .7rem; border-radius: 10px;">Read more</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-md-4 mb-5">
                <div class="card border-0 shadow overflow-hidden" style="border-radius: 13px !important;">
                    <img class="card-img-top" src="{{ asset('img/discuss.png') }}" alt="">
                    <div class="card-body px-4">
                        <span class="badge badge-secondary p-2 px-3 montserrat">Digital Marketing</span>
                        <span class="badge badge-secondary p-2 px-3 montserrat">SEO</span>
                        <h4 class="card-title pt-2">Tarrin Company</h4>
                        <div class="row pt-1 pb-4">
                            <div class="col-6">
                                <h1 class="primary-color mb-0 montserrat" style="font-size: 2.5rem;">258%</h1>
                                <p class="mb-0 montserat" style="font-size: .7rem;">Organic traffic increased</p>
                            </div>
                            <div class="col-6">
                                <h1 class="primary-color mb-0 montserrat" style="font-size: 2.5rem;">1,398</h1>
                                <p class="mb-0 montserat" style="font-size: .7rem;">Lead increased</p>
                            </div>
                        </div>
                        <p class="card-text montserrat" style="font-size: .7rem;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, voluptate qui porro praesentium aliquam dolorum magni, odio perferendis, accusantium iste veniam et officiis optio eos?</p>
                        <div class="text-right">
                            <button class="btn btn-white primary-border px-4 py-3 montserrat" style="font-size: .7rem; border-radius: 10px;">Read more</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="text-right">
                <p class="montserrat primary-color pt-4" style="font-size: .7rem;">
                    <span class="p-2 primary-border rounded"><i class="fas fa-angle-double-left"></i></span>
                    <span class="p-2 primary-border rounded">1</span>
                    <span class="p-2 primary-border rounded">2</span>
                    <span class="p-2 primary-border rounded">...</span>
                    <span class="p-2 primary-border rounded"><i class="fas fa-angle-double-right"></i></span>
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-light position-relative overflow-hidden">
        <div class="teams-img py-5 position-absolute w-100 text-center" style="height: 200px;">
        </div>
        <div class="pt-5 pb-3 text-center position-relative">
            <h2>Get free digital check list</h2>
            <p class="montserrat" style="font-size: .8rem;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod eligendi sapiente sequi enim tempore iste.</p>
        </div>
        <div class="position-relative container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="w-100 bg-white shadow mb-5 p-4" style="border-radius: 10px;">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group m-0">
                                  <input type="text" name="name" id="name" class="form-control form-control-lg p-4" style="font-size: .8rem;" placeholder="Your name">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group m-0">
                                  <input type="email" name="email" id="email" class="form-control form-control-lg p-4" style="font-size: .8rem;" placeholder="Your email">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button class="w-100 btn py-2 primary-bg primary-shadow text-white" style="font-size: .8rem;">Send messages</button>
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
