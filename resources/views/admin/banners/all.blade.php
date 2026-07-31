@extends('layout.mainlayout')

@section('content')

<div class="page-wrapper">
    <div class="content">
    {{-- Page Header --}}
    <div class="page-header">
        <div class="add-item d-flex">
            <div class="page-title">
                <h4>Banners</h4>
                <h6>Manage your Website Banners</h6>
            </div>
        </div>

        <ul class="table-top-head">
            <li class="me-2">
                <a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header">
                    <i class="ti ti-chevron-up"></i>
                </a>
            </li>
        </ul>

        <div class="page-btn">
            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-banner-modal">
                <i class="ti ti-circle-plus me-1"></i>Add Banner
            </a>
        </div>
    </div>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- Banner Table --}}
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
            <div class="search-set">
                <div class="search-input">
                    <span class="btn-searchset">
                        <i class="ti ti-search fs-14 feather-search"></i>
                    </span>
                </div>
            </div>
        </div>

        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th>S.No</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Subtitle</th>
                            <th>Date</th>
                            <th class="no-sort">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php $i = 1; @endphp

                        @forelse($banners as $banner)
                            <tr>
                                <td>{{ $i }}</td>

                                <td>
                                    <img src="{{ asset($banner->image) }}"
                                         alt="Banner"
                                         class="rounded"
                                         style="width:120px;height:60px;object-fit:cover;">
                                </td>

                                <td>
                                    <div class="fw-medium text-dark">
                                        {{ $banner->title ?? '-' }}
                                    </div>
                                </td>

                                <td>
                                    {{ $banner->subtitle ?? '-' }}
                                </td>

                                <td>
                                    {{ $banner->created_at->format('d M Y') }}
                                    <br>
                                    <small class="text-muted">
                                        {{ $banner->created_at->format('h:i A') }}
                                    </small>
                                </td>

                                <td class="action-table-data">
                                    <div class="edit-delete-action">

                                        {{-- View --}}
                                        <a href="javascript:void(0);"
                                           class="me-2 p-2 view-banner"
                                           data-bs-toggle="modal"
                                           data-bs-target="#view-banner-modal"
                                           data-title="{{ $banner->title }}"
                                           data-subtitle="{{ $banner->subtitle }}"
                                           data-image="{{ asset($banner->image) }}"
                                           data-date="{{ $banner->created_at->format('d M Y h:i A') }}">
                                            <i data-feather="eye" class="feather-eye" style="color:#0d6efd;"></i>
                                        </a>

                                        {{-- Edit --}}
                                        <a href="javascript:void(0);"
                                           class="me-2 p-2 edit-banner"
                                           data-bs-toggle="modal"
                                           data-bs-target="#edit-banner-modal"
                                           data-id="{{ $banner->id }}"
                                           data-title="{{ $banner->title }}"
                                           data-subtitle="{{ $banner->subtitle }}"
                                           data-image="{{ asset($banner->image) }}"
                                           data-update="{{ route('admin.banners.update', $banner->id) }}">
                                            <i data-feather="edit" class="feather-edit" style="color:blue;"></i>
                                        </a>

                                        {{-- Delete --}}
                                        <form action="{{ route('admin.banners.destroy', $banner->id) }}"
                                              method="POST"
                                              style="display:inline-block;"
                                              onsubmit="return confirm('Are you sure you want to delete this banner?')">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="border-0 bg-transparent p-2">
                                                <i data-feather="trash-2" class="feather-trash-2" style="color:red;"></i>
                                            </button>
                                        </form>

                                    </div>
                                </td>
                            </tr>

                            @php $i++; @endphp
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-4">
                                    <div class="text-muted">
                                        No banners found.
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{-- Pagination --}}
            <div class="p-3">
                {{ $banners->links() }}
            </div>
        </div>
    </div>
</div>

{{-- Footer --}}
<div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
    <p class="mb-0">
        2026 &copy; {{ $site->site_name ?? 'Your Site' }}. All Right Reserved
    </p>

    <p>
        Designed &amp; Developed by
        <a href="javascript:void(0);" class="text-primary">
            {{ $site->site_name ?? 'Your Site' }}
        </a>
    </p>
</div>

</div>

{{-- Add Banner Modal --}}

<div class="modal fade" id="add-banner-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('admin.banners.store') }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf
            <div class="modal-header">
                <h5 class="modal-title">Add Banner</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Subtitle</label>
                    <input type="text" name="subtitle" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Banner Image</label>
                    <input type="file" name="image" class="form-control" required>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Save Banner</button>
            </div>
        </form>
    </div>
</div>

</div>

{{-- Edit Banner Modal --}}

<div class="modal fade" id="edit-banner-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form id="editBannerForm" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            <div class="modal-header">
                <h5 class="modal-title">Edit Banner</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" id="edit_title" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Subtitle</label>
                    <input type="text" name="subtitle" id="edit_subtitle" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Current Image</label>
                    <img id="edit_image_preview" src="" class="img-fluid rounded mb-2" style="max-height:120px;">
                </div>

                <div class="mb-3">
                    <label class="form-label">Change Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Update Banner</button>
            </div>
        </form>
    </div>
</div>

</div>

{{-- View Banner Modal --}}

<div class="modal fade" id="view-banner-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Banner Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
        <div class="modal-body">
            <div class="text-center mb-3">
                <img id="view_banner_image" src="" class="img-fluid rounded">
            </div>

            <div class="mb-3">
                <strong>Title:</strong>
                <div id="view_banner_title"></div>
            </div>

            <div class="mb-3">
                <strong>Subtitle:</strong>
                <div id="view_banner_subtitle"></div>
            </div>

            <div class="mb-0">
                <strong>Created On:</strong>
                <div id="view_banner_date"></div>
            </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
    </div>
</div>

</div>

{{-- jQuery --}}

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    // View Banner
    $(document).on('click', '.view-banner', function () {
        $('#view_banner_title').text($(this).data('title') || '-');
        $('#view_banner_subtitle').text($(this).data('subtitle') || '-');
        $('#view_banner_image').attr('src', $(this).data('image'));
        $('#view_banner_date').text($(this).data('date'));
    });

    // Edit Banner
    $(document).on('click', '.edit-banner', function () {
        $('#edit_title').val($(this).data('title'));
        $('#edit_subtitle').val($(this).data('subtitle'));
        $('#edit_image_preview').attr('src', $(this).data('image'));
        $('#editBannerForm').attr('action', $(this).data('update'));
    });
</script>

@endsection
