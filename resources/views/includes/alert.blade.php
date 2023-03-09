@if (session('message'))
    <div class="alert alert-{{ session('type') }}">
        {{ session('msg') }}
    </div>
@endif
