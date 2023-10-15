@extends('layouts.app')

@section('page-title', 'Index di Teacher')

@section('main-content')
    <h1 class="text-center text-warning my-4">Index di Teacher</h1>
    <div class="container">
        <div class="row row-gap-3">
            @foreach ($teachers as $teacher)
                <div class="col-12 col-md-3 col-sm-4">
                    <div class="card mb-4 h-100">
                        <img src="/storage/{{$teacher->photo  }}" class="card-img-top" alt="...">
                        <div class="card-body my-card-slug bg-light">
                            <h5 class="card-title">{{ $teacher->user->first_name }} {{ $teacher->user->last_name }}</h5>
                            <p class="card-text">{{ $teacher->bio }}</p>
                            <a href="{{ route('admin.teachers.show', ['teacher' => $teacher]) }}" class="btn btn-primary">Show</a>
                            <a href="{{ route('admin.teachers.edit', ['teacher' => $teacher]) }}" class="btn btn-warning">Edit</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
