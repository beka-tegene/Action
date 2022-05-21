@extends('supplier.supplier_dashboard')
@section('content')
<section class="featured-auction-section padding-bottom mt--240 mt-lg--440 pos-rel">
    <div class="container mt-5">
        <div class="section-header cl-white mw-100 left-style">
            <h3 class="title">Letest Tender News !!!</h3>
        </div>
        <hr>
        <div class="row mb-30-none justify-content-around mt-5 p-4">
            <div class="col-lg-10 card">
                <div class="auction-item-2">
                    <div class="auction-thumb">
                        <h3 class="title text-upercase"><a href="">{{ $postNews ->title }}</a></h3>
                        <p>{!! $postNews ->description !!}</p>
                        <hr>
                        <div class="row">
                            <div class="col-lg-8">
                                <p>start date : <strong>{{ $postNews ->created_at->diffForHumans()}}</strong></p>
                                <p>dead line : <strong>{{ $postNews ->deadline}}</strong></p>
                            </div>
                            <div class="col-lg-4">
                                <a href="{{ route('supplier.checkout') }}" class="btn btn-warning"><i class="fa-solid fa-cart-shopping"></i>buy bid document</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
