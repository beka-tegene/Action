@extends('admin.dashboard')
@section('title')
    K.M.U Bidding | Edit Account page
@endsection

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-center">
                <h2>Edit account</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.update',$user) }}" method="POST" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="row">
                        <div class="col-sm-5 ">
                            <div class="mb-3">
                            <label for="fullname" class="form-label">Full Name</label>
                            <input type="text" name="fullname" class="form-control @error('fullname') is-invalid @enderror" value="{{ $user->fullname }}"  autocomplete="fullname" autofocus  id="fullname" >

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
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $user->email }}"  autocomplete="email" autofocus  id="email" >

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
                            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" value="{{ $user->username }}"  autocomplete="username" autofocus  id="username">

                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="mb-3">
                                <label for="usertype" class="col-md-4 col-form-label">Role</label>
                                <select class="form-select form-control @error('usertype') is-invalid @enderror"  autocomplete="usertype" autofocus  name="usertype" aria-label="Default select example">
                                    <option value="{{ $user->username }}">{{ $user->usertype }}</option>
                                    <option value="admin">Super Admin</option>
                                    <option value="pt">Procurment Team</option>
                                    <option value="pac">Procurment Approving Commite</option>
                                    <option value="pr">Procurment Requeste</option>
                                    <option value="finance">Finance Manager</option>
                                    <option value="suplier">suplier</option>

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
                            <input type="tel" name="phonenumber" class="form-control @error('phonenumber') is-invalid @enderror" value="{{ $user->phonenumber }}"  autocomplete="phonenumber" autofocus  id="phonenumber">

                            @error('phonenumber')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="mb-3">
                                <label for="city" class="col-md-4 col-form-label">{{ __('Your City') }}</label>
                                <select class="form-select form-control @error('city') is-invalid @enderror" aria-label="Default select example" id="city" name="city" required autocomplete="city" autofocus>
                                    <option value="{{ $user->city }}">{{ $user->city }}</option>
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
                        <button type="reset" class="btn btn-primary col-sm-5">Cancel</button>
                        <button type="submit" class="btn btn-success col-sm-5">Update</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
