@extends('procurement_team.procurment_team_dashboard')
@section('content')
<section class="featured-auction-section padding-bottom mt--240 mt-lg--440 pos-rel">
    <div class="container mt-5">
        <div class="section-header cl-white mw-100 left-style">
            <h3 class="title">Department Request !!!</h3>
        </div>
        <hr>

        <table class="table table-hover mt-5">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Item Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Status</th>
                <th scope="col">Requer Date</th>

            </tr>
            </thead>

            <tbody>
                @foreach ($requests as $requests)
                <tr>
                    <th scope="row">{{ $requests->id }}</th>
                    <td scope="col">{{ $requests ->itemname}}</td>
                    <td scope="col">{{ $requests ->Quantity}}</td>
                    <td>878</td>
                    <td>656</td>
                </tr>
                @endforeach

            </tbody>

        </table>

    </div>
</section>
@endsection
