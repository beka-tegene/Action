@extends('admin.dashboard')
@section('title')
    K.M.U Bidding | Create Account page
@endsection

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-center">
                <h2>create account</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-5 ">
                            <div class="mb-3">
                            <label for="fullname" class="form-label">Full Name</label>
                            <input type="text" name="fullname" class="form-control @error('fullname') is-invalid @enderror" value="{{ old('fullname') }}"  autocomplete="fullname" autofocus  id="fullname" >

                            @error('fullname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                        </div>
                        <div class="col-sm-5 ">
                            <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"  autocomplete="email" autofocus  id="email" >

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-5">
                            <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}"  autocomplete="username" autofocus  id="username">

                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="mb-3">
                                <label for="usertype" class="form-label">Role</label>
                                <select class="form-select @error('usertype') is-invalid @enderror"  autocomplete="usertype" autofocus  name="usertype" aria-label="Default select example">
                                    <option value="">select members role</option>
                                    <option value="admin">Super Admin</option>
                                    <option value="pt">Procurment Team</option>
                                    <option value="pac">Procurment Approving Commite</option>
                                    <option value="pr">Procurment Requeste</option>
                                    <option value="finance">Finance Manager</option>

                                </select>
                                @error('usertype')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-5">
                            <div class="mb-3">
                            <label for="phonenumber" class="form-label">Phone Number</label>
                            <input type="tel" name="phonenumber" class="form-control @error('phonenumber') is-invalid @enderror" value="{{ old('phonenumber') }}"  autocomplete="phonenumber" autofocus  id="phonenumber">

                            @error('phonenumber')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        </div>
                        <div class="col-sm-5 ">
                            <div class="mb-3">
                            <label for="password" class="col-md-4 col-form-label">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                    </div>

                    <div >
                        <button type="reset" class="btn btn-primary col-sm-5">Cancel</button>
                        <button type="submit" class="btn btn-success col-sm-5">Create</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
