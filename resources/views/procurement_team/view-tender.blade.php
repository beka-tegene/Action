@extends('procurement_team.procurment_team_dashboard')
@section('content')
<section class="featured-auction-section padding-bottom mt--240 mt-lg--440 pos-rel">
    <div class="container mt-5">
        <div class="section-header cl-white mw-100 left-style">
            <h3 class="title">Latest Tender Detail !!!</h3>
            <div class="d-flex justify-content-end">
                <a href="{{ route('procurmentteam.create') }}" class="btn btn-secondary">Post Tender Detail<span>&#8594;</span></a>
            </div>
        </div>
        <hr>
        <table class="table table-hover mt-5">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Started date</th>
                <th scope="col">Deadline</th>
                <th scope="col" class="text-center" colspan="2">Action</th>

            </tr>
            </thead>

            <tbody>
                @foreach ($postNews as $postNews)
                <tr>
                    <th scope="row">{{ $postNews->id }}</th>
                    <td scope="col">{{ $postNews ->title }}</td>
                    <td scope="col">{{ $postNews ->created_at->diffForHumans()}}</td>
                    <td scope="col">{{ $postNews ->deadline}}</td>
                    @if (auth()->user()->id === $postNews->user->id)
                    <td><a href="{{ route('postnews.edit',$postNews) }}" class="btn btn-success" >Edit</a></td>
                    <form action="{{ route('postnews.destroy',$postNews) }}" method="post">
                        @method('delete')
                        @csrf
                        <td><button class="btn btn-danger">Delete</button></td>
                    </form>
                    @endif
                </tr>
                @endforeach

            </tbody>

        </table>


    </div>
</section>
@endsection
