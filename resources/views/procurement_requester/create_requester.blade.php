@extends('procurement_requester.procurmant_requester')
@section('content')
<div class="container mt-5">
    <div class="card m-5">
        <div class="card-header text-center">
            <h2>Create Request</h2>
        </div>
        <div class="card-specfication ps-5 pb-5 pt-4">
            <form action="{{ route('requests.store') }}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="row">
                    <div class="col-sm-4 ">
                        <div class="mb-3">
                        <label for="department" class="form-label">Department Name</label>
                        <input type="text" name="department" class="form-control @error('department') is-invalid @enderror" value="{{ old('department') }}"  autocomplete="department" autofocus  id="department" >


                        @error('department')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                        </div>
                    </div>

                    <div class="col-sm-6 ">
                        <div class="mb-3">
                        <label for="item" class="form-label">Item Name</label>
                        <input type="text" name="itemname" class="form-control @error('item') is-invalid @enderror" value="{{ old('item') }}"  autocomplete="item" autofocus  id="item" >

                        @error('item')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" name="Quantity" class="form-control @error('quantity') is-invalid @enderror" value="{{ old('quantity') }}"  autocomplete="quantity" autofocus  id="quantity" >

                        @error('quantity')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                        </div>
                    </div>

                    <div class="col-sm-10">
                        <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="form-control @error('description') is-invalid @enderror"  autocomplete="description" autofocus  id="description">{{ old('description') }}</textarea>

                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                        </div>
                    </div>


                    <div>
                        <button type="reset" class="btn btn-primary col-sm-5">Cancel</button>
                        <button type="submit" class="btn btn-success col-sm-5">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
