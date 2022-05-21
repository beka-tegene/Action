@extends('supplier.supplier_dashboard')
@section('content')
    <div class="container mt-4">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <h5>Welcome <strong class="text-uppercase">{{ Auth::user()->fullname }}</strong> to supplier page</h5>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

            <section class="banner-section-4 bg_img oh" data-background="./assets/images/banner/banner-bg-4.png">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-10 col-lg-6 col-xl-7">
                            <div class="banner-content cl-white">
                                <h5 class="cate">Enjoy Exclusive</h5>
                                <h1 class="title">Sell or Buy Your Interest in <span class="d-xl-block">Real Time Bidding</span></h1>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <div class="banner-thumb-4">
                                <img style="width: 100%" src="{{ asset('image/6.jpg') }}" alt="banner">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </div>
    <footer class="footer bg-black small text-center text-white-50"><div class="container">Copyright &copy; K.M.U 2022</div></footer>
@endsection
