@extends('layout.mainlayout')

@section('content')

    <div class="page-wrapper">
        <div class="content">
            <div class="page-header d-flex justify-content-between align-items-center">
                <div class="page-title">
                    <h4 class="fw-bold">Add Service</h4>
                    <h6>Manage your service details</h6>
                </div>

                <a href="{{ route('services.all') }}" class="btn btn-secondary">
                    <i class="ti ti-arrow-left me-1"></i> Back
                </a>
            </div>

            <div class="card">
                <div class="card-body">

                    <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="row">

                            {{-- Service Type --}}
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Service Type</label>
                                <input type="text" name="type" class="form-control" placeholder="House Shifting"
                                    value="{{ old('type') }}">
                            </div>

                            {{-- Title --}}
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Title</label>
                                <input type="text" name="title" class="form-control"
                                    placeholder="Safe & Secure House Shifting Services" value="{{ old('title') }}">
                            </div>

                            {{-- Slug --}}
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Slug</label>
                                <input type="text" name="slug" class="form-control" placeholder="house-shifting"
                                    value="{{ old('slug') }}">
                            </div>

                            {{-- Status --}}
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Status</label>
                                <select name="status" class="form-select">
                                    <option value="show" selected>Show</option>
                                    <option value="hide">Hide</option>
                                </select>
                            </div>

                            {{-- Short Description --}}
                            <div class="col-12 mb-3">
                                <label class="form-label fw-semibold">Short Description</label>
                                <textarea name="short_description" rows="3" class="form-control"
                                    placeholder="Enter short description...">{{ old('short_description') }}</textarea>
                            </div>

                            {{-- Description --}}
                            <div class="col-12 mb-3">
                                <label class="form-label fw-semibold">Description</label>
                                <textarea name="description" rows="6" class="form-control"
                                    placeholder="Enter full service description...">{{ old('description') }}</textarea>
                            </div>

                            {{-- Service Image --}}
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Service Image</label>
                                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"
                                    accept=".jpg,.jpeg,.png,.webp" required>
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Banner Image --}}
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Banner Image</label>
                                <input type="file" name="banner" class="form-control @error('banner') is-invalid @enderror"
                                    accept=".jpg,.jpeg,.png,.webp">

                                @error('banner')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Feature 1 --}}
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Feature 1</label>
                                <input type="text" name="feature_1" class="form-control"
                                    placeholder="Premium Packing Materials" value="{{ old('feature_1') }}">
                            </div>

                            {{-- Feature 2 --}}
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Feature 2</label>
                                <input type="text" name="feature_2" class="form-control"
                                    placeholder="Experienced Moving Team" value="{{ old('feature_2') }}">
                            </div>

                            {{-- Feature 3 --}}
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Feature 3</label>
                                <input type="text" name="feature_3" class="form-control" placeholder="GPS Vehicle Tracking"
                                    value="{{ old('feature_3') }}">
                            </div>

                            {{-- Feature 4 --}}
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Feature 4</label>
                                <input type="text" name="feature_4" class="form-control" placeholder="Door-to-Door Delivery"
                                    value="{{ old('feature_4') }}">
                            </div>

                        </div>

                        <div class="d-flex justify-content-end gap-2 mt-4">
                            <a href="{{ route('services.all') }}" class="btn btn-light">Cancel</a>

                            <button type="submit" class="btn btn-primary">
                                <i class="ti ti-device-floppy me-1"></i>
                                Save Service
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>

    </div>

@endsection