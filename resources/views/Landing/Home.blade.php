
@extends('layouts.ly_landing')

@section('content')


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Lorem, ipsum</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>(505) 000-000</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@ganado.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        @include('Landing.nav')
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
                        <div class="container py-5">
                            <div class="row justify-content-center py-5">
                                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                                    <h1 class="display-3 text-white mb-3 animated slideInDown">Lorem ipsum, dolor sit amet, consectetur adipisicing elit 01</h1>
                                    <p class="fs-4 text-white mb-4 animated slideInDown">Lorem ipsum dolor sit amet consectetur </p>                       
                                    <p class="fs-4 text-white mb-4 animated slideInDown">TEL 0000-0000</p>                       
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
                        <div class="container py-5">
                            <div class="row justify-content-center py-5">
                                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                                    <h1 class="display-3 text-white mb-3 animated slideInDown">Lorem ipsum, dolor sit amet, consectetur adipisicing elit 02</h1>
                                    <p class="fs-4 text-white mb-4 animated slideInDown">Lorem ipsum dolor sit amet consectetur </p>                       
                                    <p class="fs-4 text-white mb-4 animated slideInDown">TEL 0000-0000</p>                       
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
                        <div class="container py-5">
                            <div class="row justify-content-center py-5">
                                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                                    <h1 class="display-3 text-white mb-3 animated slideInDown">Lorem ipsum, dolor sit amet, consectetur adipisicing elit 03</h1>
                                    <p class="fs-4 text-white mb-4 animated slideInDown">Lorem ipsum dolor sit amet consectetur </p>                       
                                    <p class="fs-4 text-white mb-4 animated slideInDown">TEL 0000-0000</p>                       
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
             
    </div>
    <!-- Navbar & Hero End -->




    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{asset('assets/landing/img/placeholder.jpg')}}" alt="" style="object-fit: cover;width: 100%;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Acerca de Nosotros</h6>
                    <h1 class="mb-4">Bienvenido a <span class="text-primary">Subastas</span></h1>
                    <p class="mb-4">Lorem Ipsum dolor sit amet consectetur.</p>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem at accusantium quisquam qui corporis maiores dicta eius unde consequatur id ipsum velit, iusto libero odit voluptates dolorem provident reprehenderit deleniti.</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Lorem ipsum, dolor</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Lorem ipsum, dolor</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Lorem ipsum, dolor</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Lorem ipsum, dolor</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Lorem ipsum, dolor</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Lorem ipsum, dolor</p>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Ventajas</h6>
                <h1 class="mb-5">Nuestros servicios te permiten mejorar eficientemente en todos los aspectos.</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5>Lorem ipsum dolor sit amet.</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, quidem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-hotel text-primary mb-4"></i>
                            <h5>Lorem ipsum dolor sit amet.</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, quidem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user text-primary mb-4"></i>
                            <h5>Lorem ipsum dolor sit amet.</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, quidem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-cog text-primary mb-4"></i>
                            <h5>Lorem ipsum dolor sit amet.</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, quidem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5>Lorem ipsum dolor sit amet.</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, quidem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-hotel text-primary mb-4"></i>
                            <h5>Lorem ipsum dolor sit amet.</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, quidem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user text-primary mb-4"></i>
                            <h5>Lorem ipsum dolor sit amet.</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, quidem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-cog text-primary mb-4"></i>
                            <h5>Lorem ipsum dolor sit amet.</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, quidem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Destination Start -->
    <div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Servicios</h6>
                <h1 class="mb-5">Lorem consectetur adipisicing. </h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{asset('assets/landing/img/placeholder.jpg')}}" alt="">                                
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Lorem ipsum</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid"src="{{asset('assets/landing/img/placeholder.jpg')}}" alt="">                                
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Lorem ipsum</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{asset('assets/landing/img/placeholder.jpg')}}" alt="">                                
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Lorem ipsum</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{asset('assets/landing/img/placeholder.jpg')}}" alt="" style="object-fit: cover;">                        
                        <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Ganado</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Destination Start -->


    <!-- Package Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Lorem Ipsum</h6>
                <h1 class="mb-5">Lorem Ipsum</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{asset('assets/landing/img/placeholder.jpg')}}" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Directo a tu negocio</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>Plazos</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>Atencion</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">Lorem Ipsum, Lorem</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{asset('assets/landing/img/placeholder.jpg')}}" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Lorem Ipsum</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>Lorem</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>Lorem</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">Lorem Ipsum, Lorem</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{asset('assets/landing/img/placeholder.jpg')}}" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Lorem Ipsum</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>Lorem</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>Lorem</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">Lorem Ipsum, Lorem</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Package End -->


    <!-- Booking Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="booking p-5">
                <div class="row g-5 align-items-center">
                    <div class="col-md-6 text-white">
                        <h6 class="text-white text-uppercase">Lorem, Lorem ipsum,  amet consectetur.</h6>
                        <h1 class="text-white mb-4">Lorem ipsum</h1>
                        <p class="mb-4">Lorem, Lorem ipsum,  amet consectetur</p>
                        <p class="mb-4">Lorem, Lorem ipsum,  amet consectetur, Lorem, Lorem ipsum,  amet consectetur</p>
                        <a class="btn btn-outline-light py-3 px-5 mt-2" href="#!">Lorem ipsum!</a>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
    <!-- Booking Start -->


    <!-- Process Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Lorem ipsum</h6>
                <h1 class="mb-5">Lorem ipsum</h1>
            </div>
            <div class="row gy-5 gx-4 justify-content-center">
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-globe fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Lorem ipsum, Lorem ipsum</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia architecto voluptate, quidem ut amet temporibus odit consequuntur soluta ducimus necessitatibus! Placeat, tenetur voluptatem porro consequuntur numquam at excepturi ratione atque.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-dollar-sign fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Lorem ipsum Lorem ipsum</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia architecto voluptate, quidem ut amet temporibus odit consequuntur soluta ducimus necessitatibus! Placeat, tenetur voluptatem porro consequuntur numquam at excepturi ratione atque.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-plane fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Lorem ipsum Lorem ipsum </h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia architecto voluptate, quidem ut amet temporibus odit consequuntur soluta ducimus necessitatibus! Placeat, tenetur voluptatem porro consequuntur numquam at excepturi ratione atque.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Process Start -->   

    @include('Landing.Footer')

@endsection