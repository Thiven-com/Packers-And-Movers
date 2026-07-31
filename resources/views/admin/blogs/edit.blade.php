@extends('layout.mainlayout')

@section('content')

<div class="page-wrapper">
    <div class="content">
    <div class="page-header d-flex justify-content-between align-items-center">
        <div class="page-title">
            <h4 class="fw-bold">Edit Blog</h4>
            <h6>Update blog details</h6>
        </div>

        <a href="{{ route('admin.blogs.all') }}" class="btn btn-secondary">
            Back
        </a>
    </div>

    <div class="card">
        <div class="card-body">

            <form action="{{ route('admin.blogs.update', $blog->id) }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Title</label>
                        <input type="text"
                               name="title"
                               value="{{ old('title', $blog->title) }}"
                               class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Slug</label>
                        <input type="text"
                               name="slug"
                               value="{{ old('slug', $blog->slug) }}"
                               class="form-control">
                    </div>

                    <div class="col-12 mb-3">
                        <label class="form-label">Short Description</label>
                        <textarea name="short_description"
                                  rows="3"
                                  class="form-control">{{ old('short_description', $blog->short_description) }}</textarea>
                    </div>

                    <div class="col-12 mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description"
                                  rows="5"
                                  class="form-control">{{ old('description', $blog->description) }}</textarea>
                    </div>

                    <div class="col-12 mb-3">
                        <label class="form-label">Information</label>
                        <textarea name="information"
                                  rows="5"
                                  class="form-control">{{ old('information', $blog->information) }}</textarea>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Type</label>
                        <input type="text"
                               name="type"
                               value="{{ old('type', $blog->type) }}"
                               class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Tags</label>
                        <input type="text"
                               name="tags"
                               value="{{ old('tags', $blog->tags) }}"
                               class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" name="image" class="form-control">

                        @if($blog->image)
                            <img src="{{ asset($blog->image) }}"
                                 width="100"
                                 class="mt-2 img-thumbnail">
                        @endif
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Banner</label>
                        <input type="file" name="banner" class="form-control">

                        @if($blog->banner)
                            <img src="{{ asset($blog->banner) }}"
                                 width="100"
                                 class="mt-2 img-thumbnail">
                        @endif
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-select">
                            <option value="show"
                                {{ $blog->status == 'show' ? 'selected' : '' }}>
                                Show
                            </option>

                            <option value="hide"
                                {{ $blog->status == 'hide' ? 'selected' : '' }}>
                                Hide
                            </option>
                        </select>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary">
                    Update Blog
                </button>

            </form>

        </div>
    </div>

</div>

</div>

@endsection
