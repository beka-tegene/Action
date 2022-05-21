@extends('supplier.supplier_dashboard')
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header text-center">
            <h2>Register Tender </h2>
        </div>
        <div class="card-body mt-4 ps-5 pb-5">
            <form action="{{ route('Supplierdata.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-5">
                        <a href="/download/{{ $postNews->biddocument }}" class="btn btn-primary card-link">Download Bid Document<i class="fas fa-download"></i></a>
                    </div>
                    <pre class="text-start bg-primary fs-6 mt-4 pt-3 ps-3">Once you have downloaded this document, read and fill out the information contained in it,
                split it into two parts and upload it again.</pre>
                </div>
                <div class="row">
                    <div class="col-sm-5 ">
                        <div class="mb-3">
                        <label for="technical" class="form-label">Technical Offer</label>
                        <input type="file" name="technical" class="form-control @error('technical') is-invalid @enderror" value="{{ old('technical') }}"  autocomplete="technical" autofocus  id="technical" >

                        @error('technical')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="mb-3">
                        <label for="financial" class="form-label">Financial Offer</label>
                        <input type="file" name="financial" class="form-control @error('financial') is-invalid @enderror" value="{{ old('financial') }}"  autocomplete="financial" autofocus  id="financial">

                        @error('financial')
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
