@extends('supplier.supplier_dashboard')
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header text-center">
            <h2>Upload Receipt and Guarantee</h2>
        </div>
        <pre class="text-start bg-primary fs-6 pt-3 ps-3">Thank you for coming to compete in this tender first
            You must purchase the bid document to register this bid. To purchase this tender document
            Commercial Bank: <strong class="fw-bolder text-decoration-underline text-secondary">1000232323232</strong>
            Dashen Bank: <strong class="fw-bolder text-decoration-underline text-secondary">100004332332</strong>
            Awash Bank: <strong class="fw-bolder text-decoration-underline text-secondary">1447822026</strong>
    With these banking options you can pay 100 Birr. So do not forget to mention this number <strong class="fw-bolder text-decoration-underline text-secondary">@foreach ($postNews as $postNews){{ $postNews->id  }}@endforeach</strong> when making this payment.
    Also, when you bring a receipt for this payment, you are also sure to bring your bank guarantee.

    Upload a photo of your bank receipt here &#128071;&#128071; and     upload your bank guarantee here &#128071;&#128071;</pre>
        <div class="card-body mt-4 ps-5 pb-5">
            <form action="{{ route('Userpayment.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-5 ">
                        <div class="mb-3">
                        <label for="receipt" class="form-label">Bid Document Receipt</label>
                        <input type="file" name="receipt" class="form-control @error('receipt') is-invalid @enderror" value="{{ old('receipt') }}"  autocomplete="receipt" autofocus  id="receipt" >

                        @error('receipt')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="mb-3">
                        <label for="guarantee" class="form-label">Bank Guarantee</label>
                        <input type="file" name="guarantee" class="form-control @error('guarantee') is-invalid @enderror" value="{{ old('guarantee') }}"  autocomplete="guarantee" autofocus  id="guarantee">

                        @error('guarantee')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    </div>
                </div>

                <div>
                    <button type="reset" class="btn col-sm-5">Cancel</button>
                    <button type="submit" class="btn btn-success col-sm-5">Upload</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
