@extends('supplier.supplier_dashboard')
@section('content')
<section class="featured-auction-section padding-bottom mt--240 mt-lg--440 pos-rel">
    <div class="container mt-5">
        <div class="section-header cl-white mw-100 left-style">
            <h3 class="title">Letest Tender News !!!</h3>
        </div>
        <hr>
        <div class="row justify-content-center">

            @foreach ($category as $category)
            <div class="col-1">
                <a href="{{ route('supplier.show',['category'=>$category->type]) }}" class="btn btn-info">{{ $category->type }}</a>
            </div>
            @endforeach
        </div>
        <div class="row mb-30-none justify-content-around">
            @foreach ($postNews as $postNews)
            <div class="col-sm-10 col-md-6 col-lg-5 card mt-5 p-4">
                <div class="auction-item-2">
                    <div class="auction-thumb">
                        <h3 class="title text-upercase"><a href="">{{ $postNews ->title }}</a></h3>
                        <p class="ArticleBody">{!! substr(strip_tags($postNews ->description), 0, 500) !!}
                            @if (strlen(strip_tags($postNews ->description)) > 50)
                                <span id="dots">...</span>
                                <span id="more" style="display:  none;">{!! substr($postNews ->description, 500) !!}</span>
                            @endif
                        </p>
                        <button onclick="myFunction()" id="myBtn">Read more</button>
                        <hr>
                        <p>start date : <strong>{{ $postNews ->created_at->diffForHumans()}}</strong></p>
                        <p>dead line : <strong>{{ $postNews ->deadline}}</strong></p>
                        <hr>
                        @if ('pndin' == 'pending')
                            <a href="{{ route('supplier.create',$postNews) }}" class="btn btn-success disabled">Go To Register</a>
                        @elseif ('approved' == 'approved')
                            <a href="{{ route('supplier.create',$postNews) }}" class="btn btn-success">Go To Register</a>
                        @endif
                        <a href="{{ route('supplier.receipt') }}" class="btn btn-success">upload bidding Receipt</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
@endsection
@section('script')
<script type="text/javascript">
    function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }
</script>
@endsection
