@extends('procurement_team.procurment_team_dashboard')
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header text-center">
            <h2>Category List</h2>
        </div>
        <div class="card-body">
            @foreach ($category as $category)
            <div class="justify-content-center d-flex">
                <p class="pe-3"><strong>{{ $category->type }}</strong></p>
                <div class="pe-2">
                    <a href="{{ route('categories.edit',$category) }}" class="btn btn-success">Edit</a>
                </div>
                <form action="{{ route('categories.destroy',$category) }}" method="post">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>
            </div>
            @endforeach
            <div>
                <a href="{{ route('categories.create') }}">Add categories<span>&#8594;</span></a>
            </div>
        </div>
    </div>
</div>
@endsection
