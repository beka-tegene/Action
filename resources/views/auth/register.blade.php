@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="fullname" class="col-md-4 col-form-label text-md-end">{{ __('Full Name') }}</label>

                            <div class="col-md-6">
                                <input id="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname') }}" required autocomplete="fullname" autofocus>

                                @error('fullname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('User Name') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phonenumber" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phonenumber" type="tel" class="form-control @error('phonenumber') is-invalid @enderror" name="phonenumber" value="{{ old('phonenumber') }}" required autocomplete="phonenumber" autofocus>

                                @error('phonenumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="city" class="col-md-4 col-form-label text-md-end">{{ __('Your City') }}</label>

                            <div class="col-md-6">
                                <select class="form-select form-control @error('city') is-invalid @enderror" aria-label="Default select example" id="city" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>
                                    <option selected>Open this select menu</option>
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

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
