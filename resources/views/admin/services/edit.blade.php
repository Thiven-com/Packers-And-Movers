@extends('layout.mainlayout')

@section('content')

<div class="page-wrapper">
    <div class="content">
    <div class="page-header d-flex justify-content-between align-items-center">
        <div class="page-title">
            <h4 class="fw-bold">Edit Service</h4>
            <h6>Update your service details</h6>
        </div>

        <a href="{{ route('services.all') }}" class="btn btn-secondary">
            <i class="ti ti-arrow-left me-1"></i> Back
        </a>
    </div>

    <div class="card">
        <div class="card-body">

            <form action="{{ route('services.update', $service->id) }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">

                    {{-- Service Type --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Service Type</label>
                        <input type="text"
                               name="type"
                               class="form-control"
                               value="{{ old('type', $service->type) }}"
                               placeholder="House Shifting">
                    </div>

                    {{-- Title --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Title</label>
                        <input type="text"
                               name="title"
                               class="form-control"
                               value="{{ old('title', $service->title) }}"
                               placeholder="Safe & Secure House Shifting Services">
                    </div>

                    {{-- Slug --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Slug</label>
                        <input type="text"
                               name="slug"
                               class="form-control"
                               value="{{ old('slug', $service->slug) }}"
                               placeholder="house-shifting">
                    </div>

                    {{-- Status --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Status</label>
                        <select name="status" class="form-select">
                            <option value="show"
                                {{ old('status', $service->status) == 'show' ? 'selected' : '' }}>
                                Show
                            </option>

                            <option value="hide"
                                {{ old('status', $service->status) == 'hide' ? 'selected' : '' }}>
                                Hide
                            </option>
                        </select>
                    </div>

                    {{-- Short Description --}}
                    <div class="col-12 mb-3">
                        <label class="form-label fw-semibold">Short Description</label>
                        <textarea name="short_description"
                                  rows="3"
                                  class="form-control"
                                  placeholder="Enter short description...">{{ old('short_description', $service->short_description) }}</textarea>
                    </div>

                    {{-- Description --}}
                    <div class="col-12 mb-3">
                        <label class="form-label fw-semibold">Description</label>
                        <textarea name="description"
                                  rows="6"
                                  class="form-control"
                                  placeholder="Enter full service description...">{{ old('description', $service->description) }}</textarea>
                    </div>

                    {{-- Service Image --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Service Image</label>
                        <input type="file"
                               name="image"
                               class="form-control"
                               accept="image/*">

                        @if($service->image)
                            <div class="mt-2">
                                <img src="{{ asset($service->image) }}"
                                     alt="Service Image"
                                     width="120"
                                     class="img-thumbnail">
                            </div>
                        @endif
                    </div>

                    {{-- Banner Image --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Banner Image</label>
                        <input type="file"
                               name="banner"
                               class="form-control"
                               accept="image/*">

                        @if($service->banner)
                            <div class="mt-2">
                                <img src="{{ asset($service->banner) }}"
                                     alt="Banner Image"
                                     width="120"
                                     class="img-thumbnail">
                            </div>
                        @endif
                    </div>

                    {{-- Feature 1 --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Feature 1</label>
                        <input type="text"
                               name="feature_1"
                               class="form-control"
                               value="{{ old('feature_1', $service->feature_1) }}"
                               placeholder="Premium Packing Materials">
                    </div>

                    {{-- Feature 2 --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Feature 2</label>
                        <input type="text"
                               name="feature_2"
                               class="form-control"
                               value="{{ old('feature_2', $service->feature_2) }}"
                               placeholder="Experienced Moving Team">
                    </div>

                    {{-- Feature 3 --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Feature 3</label>
                        <input type="text"
                               name="feature_3"
                               class="form-control"
                               value="{{ old('feature_3', $service->feature_3) }}"
                               placeholder="GPS Vehicle Tracking">
                    </div>

                    {{-- Feature 4 --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Feature 4</label>
                        <input type="text"
                               name="feature_4"
                               class="form-control"
                               value="{{ old('feature_4', $service->feature_4) }}"
                               placeholder="Door-to-Door Delivery">
                    </div>

                </div>

                <div class="d-flex justify-content-end gap-2 mt-4">
                    <a href="{{ route('services.all') }}"
                       class="btn btn-light">Cancel</a>

                    <button type="submit" class="btn btn-primary">
                        <i class="ti ti-device-floppy me-1"></i>
                        Update Service
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>

</div>

@endsection
