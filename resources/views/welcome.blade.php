
@extends('layouts.app')

@section('content')
<body id="page-top">
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-uppercase">Kotebe Metropolian University</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Most features are disabled for non-logged-in users. Please log in or register to gain more access.</h2>
                    <a class="btn btn-info" href="">Last Tender News</a>
                    <a class="btn btn-success" href="{{ route('register') }}">Register</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="about-section text-center" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-white mb-4">About K.M.U Tender System</h2>
                    <p class="text-white-50">
                        K.M.U has been set up by eCom Advertising (incorporated as Ebiz Online Solutions PLC in 2014)
                        to provide integrated information and online bidding on Kotebe metropolian University business.
                        As a shopper has to find a smart route and good guide to go to K.M.U and shop there,
                        K.M.U  will serve as a smart route and good guide to business in Kotebe metropolian University.
                        It contains virtually every important information a businessperson or a potential investor needs
                        while doing business in Ethiopia or trading with businesses located in Ethiopia.
                    </p>
                </div>
            </div>
            <img class="img-fluid mb-5" src="{{asset('image/7.jpg')}}" alt="..." />
        </div>
    </section>
    <section class="how-section padding-top padding-bottom pos-rel text-white" style="background-color: rgb(48, 48, 48)">
        <div class="container">
            <div class="section-header text-lg-left">
                <h2 class="title">How it works</h2>
                <p>Easy 3 steps to win</p>
            </div>
            <div class="row justify-content-center mb--40">
                <div class="col-md-6 col-lg-4">
                    <div class="how-item">
                        <div class="how-thumb">
                            <img src="{{ asset('image/how1.png') }}" alt="how">
                        </div>
                        <div class="how-content">
                            <h4 class="title">Sign Up</h4>
                            <p>No Credit Card Required</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="how-item">
                        <div class="how-thumb">
                            <img src="{{ asset('image/how2.png') }}" alt="how">
                        </div>
                        <div class="how-content">
                            <h4 class="title">Bid</h4>
                            <p>Bidding is free Only pay if you win</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="how-item">
                        <div class="how-thumb">
                            <img src="{{ asset('image/how3.png') }}" alt="how">
                        </div>
                        <div class="how-content">
                            <h4 class="title">Win</h4>
                            <p>Fun - Excitement - Great deals</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-->
    <section class="contact-section bg-black" id="contact">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Address</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50"><a href="https://goo.gl/maps/JSCN3pPRf7wqNbZg6">2RQQ+FC3, Sub City Wo. 11, Addis Ababa</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50"><a href="#!">info@kmu.edu.et</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Phone</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">011 660 0921</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social d-flex justify-content-center">
                <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                <a class="mx-2" href="https://www.facebook.com/www.kmu.edu.et/"><i class="fab fa-facebook-f"></i></a>
                <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; K.M.U 2022</div></footer>
    <!-- Bootstrap core JS-->



</body>

@endsection
