@extends('procurement_team.procurment_team_dashboard')
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header text-center">
            <h2>ADD Category</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-10 ">
                        <div class="mb-3">
                        <label for="type" class="form-label">Category Type</label>
                        <input type="text" name="type" class="form-control @error('type') is-invalid @enderror" value="{{ old('type') }}"  autocomplete="type" autofocus  id="type" >

                        @error('type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                        </div>
                    </div>

                    <div>
                        <button type="reset" class="btn btn-primary col-sm-5">Cancel</button>
                        <button type="submit" class="btn btn-success col-sm-5">Submit</button>
                    </div>
                </div>
            </form>
            <div>
                <a href="{{ route('categories.index') }}">categories list <span>&#8594;</span></a>
            </div>
        </div>
    </div>
</div>
@endsection
