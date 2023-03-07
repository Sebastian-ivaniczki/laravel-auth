@extends('layouts.app')

@section('title', $project->title)

@section('content')

    <header>
        <h1 class="my-5 text-center">{{ $project->title }}</h1>
    </header>

    <div class="clearfix">
        @if ($project->image)
            <img class="float-start me-3" src="{{ $project->image }}" alt="{{ $project->slug }}">
        @endif
        <p>{{ $project->content }}</p>
    </div>
    <div class="d-flex justify-content-end">
        <a class="btn btn-secondary" href="{{ route('admin.projects.index') }}">Back</a>
    </div>
@endsection
