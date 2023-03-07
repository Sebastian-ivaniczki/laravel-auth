@extends('layouts.app')

@section('title', 'projects')

@section('content')
    <header>
        <h1 class="my-5 text-center">Projects</h1>
    </header>

    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Created</th>
                <th scope="col">Modified</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($projects as $project)
                <tr>
                    <th scope="row">{{ $project->id }}</th>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->created_at }}</td>
                    <td>{{ $project->updated_at }}</td>
                    <td><a class="btn btn-small btn-primary"
                            href="{{ route('admin.projects.show', $project->id) }}">details</a></td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Ther are no projects</td>
                </tr>
            @endforelse


        </tbody>
    </table>
@endsection
