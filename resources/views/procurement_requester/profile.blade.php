@extends('procurement_requester.procurmant_requester')
@section('content')
<section class="Container mt-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="card card-primary card-outline">
                <div class="card-header text-center">
                    <h2>profile</h2>
                </div>
                <div class="card-body box-profile">
                    <p class="profile-username text-center">NAME: {{ auth()->user()->fullname }} </p>
                    <p class="text-muted text-center">EMAIL: {{ auth()->user()->email }}</p>
                    <p class="text-muted text-center">USERNAME: {{ auth()->user()->username }}</p>
                    <p class="text-muted text-center">PHONE NUMBER: {{ auth()->user()->phonenumber }}</p>
                    <p class="text-muted text-center">USER TYPE: {{ auth()->user()->usertype }}</p>
                    <p class="text-muted text-center">CITY: {{ auth()->user()->city }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
