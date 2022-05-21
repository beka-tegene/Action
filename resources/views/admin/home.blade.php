@extends('admin.dashboard')
@section('title')
    K.M.U Bidding | Home page
@endsection
@section('content')
<div class="container-fluid px-3">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="card mt-3">
          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif

            {{ __('You are logged in!') }}
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-5 text-center">
      <div class="col-md-4">
        <div class="card mt-3">
          <div class="card-header"><h2>{{ __('Supplier') }}</h2></div>

          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif
            <h3>{{ __('257') }}</h3>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mt-3">
          <div class="card-header"><h2>{{ __('Procurment Approving') }}</h2></div>

          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif
            <h3>{{ __('12') }}</h3>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mt-3">
          <div class="card-header"><h2>{{ __('Procurment Team') }}</h2></div>

          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif
            <h3>{{ __('20') }}</h3>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mt-3">
          <div class="card-header"><h2>{{ __('Finance') }}</h2></div>

          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif
            <h3>{{ __('10') }}</h3>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mt-3">
          <div class="card-header"><h2>{{ __('Admin') }}</h2></div>

          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif
            <h3>{{ __('2') }}</h3>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
