@extends('procurement_team.procurment_team_dashboard')
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header text-center">
            <h2>Create Tender</h2>
            <div class="d-flex justify-content-end">
                <a href="{{ route('procurmentteam.show') }}" class="btn btn-secondary">Tender Detail View<span>&#8594;</span></a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('postnews.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="row">
                    <div class="col-sm-8 ">
                        <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}"  autocomplete="title" autofocus  id="title" >

                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-select @error('category') is-invalid @enderror"  autocomplete="category" autofocus  name="category" aria-label="Default select example">
                                <option selected disabled>select option</option>
                                @foreach ($category as $category)
                                    <option value="{{ $category->id }}">{{ $category->type }}</option>
                                @endforeach
                            </select>
                            @error('category')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="form-control @error('description') is-invalid @enderror"  autocomplete="description" autofocus  id="description">{{ old('description') }}</textarea>

                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="mb-3">
                        <label for="deadline" class="form-label">Dead Line</label>
                        <input type="date" name="deadline" class="form-control @error('deadline') is-invalid @enderror" value="{{ old('deadline') }}"  autocomplete="deadline" autofocus  id="deadline" >

                        @error('deadline')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="mb-3">
                        <label for="biddoc" class="form-label">Bid Document</label>
                        <input type="file" name="biddoc" class="form-control @error('biddoc') is-invalid @enderror" value="{{ old('biddoc') }}"  autocomplete="biddoc" autofocus  id="biddoc" >

                        @error('biddoc')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                        </div>
                    </div>
                    <div>
                        <button type="reset" class="btn btn-primary col-sm-5">Cancel</button>
                        <button type="submit" class="btn btn-success col-sm-5">Publish</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
