@extends('admin.dashboard')
@section('title')
    K.M.U Bidding | Account List page
@endsection

@section('content')
<div class="container-fluid col-11">
    <table class="table table-hover mt-5">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Full Name</th>
            <th scope="col">Email</th>
            <th scope="col">User Name</th>
            <th scope="col">User Type</th>
            <th scope="col">Phone Number</th>
            <th scope="col">City</th>
            <th scope="col" class="text-center" colspan="3">Action</th>

        </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td scope="col">{{ $user->fullname }}</td>
                <td scope="col">{{ $user->email }}</td>
                <td scope="col">{{ $user->username }}</td>
                <td scope="col">{{ $user->usertype }}</td>
                <td scope="col">{{ $user->phonenumber }}</td>
                <td scope="col">{{ $user->city }}</td>
                <td><abbr title="Edit"><a href="{{ route('admin.edit',$user) }}" class="btn btn-success" ><i class="fas fa-edit"></i></a></abbr></td>
                <form action="{{ route('admin.destroy',$user) }}" method="post">
                    @method('delete')
                    @csrf
                    <td><abbr title="Delete"><button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button></abbr></td>
                </form>
                <td>
                    @if ($user->active == '0')

                            <a href="{{ route('admin.ban',$user) }}" type="submit" class="btn btn-primary">Block</a>

                    @elseif ($user->active == '1')

                            <a href="{{ route('admin.ban',$user) }}" type="submit" class="btn btn-danger">unblock</a>

                    @endif
                </td>
            </tr>
            @endforeach

        </tbody>

    </table>
</div>
@endsection
