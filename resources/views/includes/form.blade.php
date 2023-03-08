{{-- Form --}}
@if ($project->exists)
    <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" novalidate>
        @method('PUT')
    @else
        <form action="{{ route('admin.projects.store') }}" method="POST" novalidate>
@endif


@csrf
{{-- form content --}}

<div class="row mt-5">
    <div class="col-6">
        <div class="mb-3">

            <label for="title" class="form-label">Project Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                required value="{{ old('title', $project->title) }}">
        </div>
    </div>
    <div class="col-6">
        <div class="mb-3">

            <label for="image" class="form-label">Project image</label>
            <input type="url" class="form-control @error('image') is-invalid @enderror" id="image"
                name="image" required value="{{ old('image', $project->image) }}">
        </div>
    </div>

    <div class="col-12">
        <div class="mb-3">
            <label for="content" class="form-label">Project description</label>
            <textarea class="form-control" name="content" id="content" rows="10">{{ old('content', $project->content) }}</textarea>
        </div>
    </div>
</div>

<hr>
<div class="d-flex justify-content-end">
    <button type="submit" class="btn btn-success">Salva</button>
</div>
</form>
