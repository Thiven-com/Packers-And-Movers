@extends('layout.mainlayout')

@section('content')

<div class="page-wrapper">
    <div class="content">
    <div class="page-header d-flex justify-content-between align-items-center">
        <h4 class="fw-bold">Edit Gallery</h4>

        <a href="{{ route('admin.galleries.all') }}"
           class="btn btn-secondary">
            Back
        </a>
    </div>

    <div class="card">
        <div class="card-body">

            <form action="{{ route('admin.galleries.update', $gallery->id) }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text"
                           name="title"
                           value="{{ old('title', $gallery->title) }}"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Slug</label>
                    <input type="text"
                           name="slug"
                           value="{{ old('slug', $gallery->slug) }}"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="file" name="image" class="form-control">

                    @if($gallery->image)
                        <img src="{{ asset($gallery->image) }}"
                             width="120"
                             class="mt-2 img-thumbnail">
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">
                    Update Gallery
                </button>

            </form>

        </div>
    </div>

</div>

</div>

@endsection
