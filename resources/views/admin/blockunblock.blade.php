@extends('admin.dashboard')
@section('content')

    <div class="card col-7 mt-5 ms-5" id="mycard">
        <div class="card-dialog">
        <div class="card-content">

            <!-- card Header -->
            <div class="card-header">
            <h4 class="card-title">Block or Unblock</h4>
            </div>
            <form action="{{ route('admin.editban', $user) }}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
            <!-- card body -->
            <div class="card-body">
                <div class="col-sm-4">
                    <div class="mb-3">
                        <select class="form-select form-control @error('active') is-invalid @enderror" aria-label="Default select example" id="active" name="active" required autocomplete="active" autofocus>
                            <option selected disabled>Open this select menu</option>
                            <option value="1">Block</option>
                            <option value="0">Unblock</option>
                        </select>

                        @error('active')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>


            <!-- card footer -->
            <div class="card-footer d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        </div>
        </div>
    </div>

@endsection
