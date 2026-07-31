<?php $page = 'videotestimonials'; ?>
@extends('layout.mainlayout')

@section('content')

<div class="page-wrapper">
    <div class="content">

        <div class="page-header">
            <div class="page-title">
                <h4>Add Videos</h4>
                <h6>Create a New Videos</h6>
            </div>

            <div class="page-btn">
                <a href="{{ route('videotestimonials.index') }}" class="btn btn-secondary">
                    <i data-feather="arrow-left"></i> Back
                </a>
            </div>
        </div>

        <form action="{{ route('videotestimonials.store') }}" method="POST">
            @csrf

            <div class="card">
                <div class="card-body">

                    <div class="row">

                        <!-- Title -->
                        <div class="col-lg-6 col-sm-12">
                            <div class="mb-3">
                                <label class="form-label">
                                    Title <span class="text-danger">*</span>
                                </label>
                                <input type="text"
                                       name="title"
                                       class="form-control @error('title') is-invalid @enderror"
                                       value="{{ old('title') }}"
                                       required>

                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Customer Name -->
                        <div class="col-lg-6 col-sm-12">
                            <div class="mb-3">
                                <label class="form-label">Customer Name</label>

                                <input type="text"
                                       name="customer_name"
                                       class="form-control"
                                       value="{{ old('customer_name') }}">
                            </div>
                        </div>

                        <!-- YouTube -->
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">
                                    YouTube Embed URL / Video ID
                                    <span class="text-danger">*</span>
                                </label>

                                <input type="text"
                                       name="youtube_video"
                                       class="form-control @error('youtube_video') is-invalid @enderror"
                                       value="{{ old('youtube_video') }}"
                                       placeholder="https://www.youtube.com/embed/XXXXXXXX or Video ID"
                                       required>

                                <small class="text-muted">
                                    Example:
                                    https://www.youtube.com/embed/aGFh2vL1S8Q
                                    <br>
                                    or simply:
                                    <strong>aGFh2vL1S8Q</strong>
                                </small>

                                @error('youtube_video')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">Description</label>

                                <textarea name="description"
                                          rows="5"
                                          class="form-control">{{ old('description') }}</textarea>
                            </div>
                        </div>

                        <!-- Sort Order -->
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Sort Order</label>

                                <input type="number"
                                       name="sort_order"
                                       class="form-control"
                                       value="{{ old('sort_order',0) }}">
                            </div>
                        </div>

                        <!-- Status -->
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Status</label>

                                <select name="status" class="form-select">
                                    <option value="1" selected>Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>

                        <!-- Buttons -->
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary me-2">
                                Save
                            </button>

                            <a href="{{ route('videotestimonials.index') }}"
                               class="btn btn-secondary">
                                Cancel
                            </a>
                        </div>

                    </div>

                </div>
            </div>

        </form>

    </div>
</div>

@endsection