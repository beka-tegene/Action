@extends('finance.finance_dashboard')
@section('content')
<div class="container-fluid col-11">
    <table class="table table-hover mt-5">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Receipt</th>
            <th scope="col">Guarantee</th>
            <th scope="col">status</th>
            <th scope="col">Full Name</th>
            <th scope="col" class="text-center" colspan="2">Action</th>

        </tr>
        </thead>

        <tbody>
            @foreach ($userpaymentinfo as $userpaymentinfo )
            <tr>
                <th scope="row">{{ $userpaymentinfo->id }}</th>
                <td scope="col"><a class="btn btn-outline-info" href="{{ asset('Receipt/'.$userpaymentinfo->receipt) }}">Receipt</a></td>
                <td scope="col"><a class="btn btn-outline-info" href="{{ asset('Bank_Guarantee/'.$userpaymentinfo->guarantee) }}">Bank Guarantee</a></td>
                <td scope="col">{{ $userpaymentinfo->status }}</td>
                <td scope="col">{{ $userpaymentinfo->user->fullname }}</td>
                <td>
                    <a href="{{ route('approval' , $userpaymentinfo) }}" type="submit" class="btn btn-primary">Approve</a>
                </td>
                <td>
                    <a href="{{ route('pending' , $userpaymentinfo) }}" type="submit" class="btn btn-danger">Pending</a>
                </td>
            </tr>
            @endforeach

        </tbody>

    </table>
</div>
@endsection
