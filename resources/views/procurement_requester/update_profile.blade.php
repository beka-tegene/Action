@extends('procurement_requester.procurmant_requester')
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header text-center">
            <h2>Edit account</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('requests.updateprofile',auth()->user()) }}" method="POST" enctype="multipart/form-data">

                @method('put')
                @csrf
                <div class="row">
                    <div class="col-sm-5 ">
                        <div class="mb-3">
                        <label for="fullname" class="form-label">Full Name</label>
                        <input type="text" name="fullname" class="form-control @error('fullname') is-invalid @enderror" value="{{ auth()->user()->fullname }}"  autocomplete="fullname" autofocus  id="fullname" >

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
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ auth()->user()->email }}"  autocomplete="email" autofocus  id="email" >

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
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" value="{{ auth()->user()->username }}"  autocomplete="username" autofocus  id="username">

                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="mb-3">
                        <label for="phonenumber" class="form-label">Phone Number</label>
                        <input type="tel" name="phonenumber" class="form-control @error('phonenumber') is-invalid @enderror" value="{{ auth()->user()->phonenumber }}"  autocomplete="phonenumber" autofocus  id="phonenumber">

                        @error('phonenumber')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-10">
                        <div class="mb-3">
                            <label for="city" class="col-md-4 col-form-label">{{ __('Your City') }}</label>
                            <select class="form-select form-control @error('city') is-invalid @enderror" aria-label="Default select example" id="city" name="city" required autocomplete="city" autofocus>
                                <option value="{{ auth()->user()->city }}">{{ auth()->user()->city }}</option>
                                <option value="Addis Ababa">Addis Ababa</option>
                                <option value="Mekelle">Mekelle</option>
                                <option value="Gondar">Gondar</option>
                                <option value="Adama">Adama</option>
                                <option value="Awassa">Awassa</option>
                                <option value="Bahir Dar">Bahir Dar</option>
                                <option value="Dire Dawa">Dire Dawa</option>
                                <option value="Sodo">Sodo</option>
                                <option value="Dessie">Dessie</option>
                                <option value="Jimma">Jimma</option>
                                <option value="Jijiga">Jijiga</option>
                                <option value="Shashamane">Shashamane</option>
                                <option value="Bishoftu">Bishoftu</option>
                                <option value="Arba Minch">Arba Minch</option>
                                <option value="Hosaena">Hosaena</option>
                                <option value="Harar">Harar</option>
                                <option value="Dilla">Dilla</option>
                                <option value="Nekemte">Nekemte</option>
                                <option value="Debre Birhan">Debre Birhan</option>
                                <option value="Asella">Asella</option>
                                <option value="Debre Mark'os">Debre Mark'os</option>
                                <option value="Kombolcha">Kombolcha</option>
                                <option value="Debre Tabor">Debre Tabor</option>
                                <option value="Adigrat">Adigrat</option>
                                <option value="Weldiya">Weldiya</option>
                                <option value="Areka">Areka</option>
                                <option value="Sebeta">Sebeta</option><option value="Mekelle">Mekelle</option>
                                <option value="Burayu">Burayu</option>
                                <option value="Shire">Shire</option>
                                <option value="Ambo">Ambo</option>
                            </select>

                            @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div>
                    <button type="reset" class="col-sm-5 btn btn-primary">Cancel</button>
                    <button type="submit" class="col-sm-5 btn btn-success">Update</button>

                </div>


            </form>
        </div>
    </div>
</div>
@endsection
