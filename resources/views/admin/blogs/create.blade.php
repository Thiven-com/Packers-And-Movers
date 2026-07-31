@extends('layout.mainlayout')

@section('content')

<div class="page-wrapper">
    <div class="content">
    <div class="page-header d-flex justify-content-between align-items-center">
        <div class="page-title">
            <h4 class="fw-bold">Add Blog</h4>
            <h6>Create blog details</h6>
        </div>

        <a href="{{ route('admin.blogs.all') }}" class="btn btn-secondary">
            Back
        </a>
    </div>

    <div class="card">
        <div class="card-body">

            <form action="{{ route('admin.blogs.store') }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Slug</label>
                        <input type="text" name="slug" class="form-control">
                    </div>

                    <div class="col-12 mb-3">
                        <label class="form-label">Short Description</label>
                        <textarea name="short_description" rows="3" class="form-control"></textarea>
                    </div>

                    <div class="col-12 mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description" rows="5" class="form-control"></textarea>
                    </div>

                    <div class="col-12 mb-3">
                        <label class="form-label">Information</label>
                        <textarea name="information" rows="5" class="form-control"></textarea>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Type</label>
                        <input type="text" name="type" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Tags</label>
                        <input type="text" name="tags" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Banner</label>
                        <input type="file" name="banner" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-select">
                            <option value="show">Show</option>
                            <option value="hide">Hide</option>
                        </select>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary">
                    Save Blog
                </button>

            </form>

        </div>
    </div>

</div>

</div>

@endsection
