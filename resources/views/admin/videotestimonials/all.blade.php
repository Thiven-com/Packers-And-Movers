<?php $page = 'videotestimonials'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header d-flex flex-column flex-md-row justify-content-between align-items-start gap-3">
                <h4 class="mb-1">Videos</h4>
                <h6 class="text-muted">Manage Your Videos </h6>
                <a href="{{ route('videotestimonials.create') }}" class="btn btn-primary">
                    <i data-feather="plus"></i> Add Videos
                </a>

            </div>

            <div class="table-responsive">
                <table class="table datanew">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Title</th>
                            <th>Customer Name</th>
                            <th>YouTube Video ID</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Sort Order</th>
                            <th>Created At</th>
                            <th class="no-sort">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1; @endphp

                        @foreach($data as $video)
                            <tr>
                                <td>{{ $i++ }}</td>

                                <td>{{ $video->title }}</td>

                                <td>{{ $video->customer_name ?? '-' }}</td>

                                <td>
                                    <span class="badge bg-info">
                                        {{ $video->youtube_video }}
                                    </span>
                                </td>

                                <td>
                                    {{ \Illuminate\Support\Str::limit($video->description, 50) }}
                                </td>

                                <td>
                                    @if($video->status)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </td>

                                <td>{{ $video->sort_order }}</td>

                                <td>{{ $video->created_at->format('d M Y') }}</td>

                                <td class="action-table-data">
                                    <div class="edit-delete-action">

                                        <a href="{{ route('videotestimonials.edit', $video->id) }}" class="p-2 me-3">
                                            <i data-feather="edit" class="feather-edit"></i>
                                        </a>

                                        <a href="javascript:void(0);" class="confirm-texts p-2"
                                            data-url="{{ route('videotestimonials.destroy', $video->id) }}">
                                            <i data-feather="trash-2"></i>
                                        </a>

                                    </div>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="p-3">
                {{ $data->links('pagination::bootstrap-5') }}
            </div>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

            <script>
                $(document).on('click', '.confirm-texts', function (e) {
                    e.preventDefault();

                    let url = $(this).data('url');

                    if (confirm('Are you sure you want to delete this Video Testimonial?')) {

                        $.ajax({
                            url: url,
                            type: "DELETE",
                            data: {
                                _token: "{{ csrf_token() }}"
                            },
                            success: function (response) {
                                alert(response.message);
                                location.reload();
                            },
                            error: function (xhr) {
                                console.log(xhr.responseText);
                                alert("Something went wrong.");
                            }
                        });

                    }
                });
            </script>
@endsection