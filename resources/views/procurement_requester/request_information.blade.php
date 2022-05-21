@extends('procurement_requester.procurmant_requester')
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
                <th scope="col" class="text-center" colspan="2">Action</th>

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
                    <td><a href="{{ route('requests.edit',$requests) }}" class="btn btn-success" >Edit</a></td>
                    <form action="{{ route('requests.destroy',$requests) }}" method="post">
                        @method('delete')
                        @csrf
                        <td><button class="btn btn-danger">Delete</button></td>
                    </form>
                </tr>
                @endforeach

            </tbody>

        </table>

    </div>
</section>
@endsection
