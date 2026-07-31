@extends('layout.mainlayout')

@section('content')

<div class="page-wrapper">
    <div class="content">
    <div class="page-header d-flex justify-content-between align-items-center">
        <h4 class="fw-bold">Gallery List</h4>

        <a href="{{ route('admin.galleries.create') }}"
           class="btn btn-primary">
            Add Gallery
        </a>
    </div>

    <div class="card">
        <div class="card-body table-responsive">

            <table class="table table-bordered align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th width="180">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($galleries as $gallery)
                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <td>
                                @if($gallery->image)
                                    <img src="{{ asset($gallery->image) }}"
                                         width="60"
                                         height="60"
                                         style="object-fit:cover">
                                @endif
                            </td>

                            <td>{{ $gallery->title }}</td>
                            <td>{{ $gallery->slug }}</td>

                            <td>
                                <div class="d-flex gap-2">

                                    <a href="{{ route('admin.galleries.edit', $gallery->id) }}"
                                       class="btn btn-sm btn-primary">
                                        Edit
                                    </a>

                                    <form action="{{ route('admin.galleries.destroy', $gallery->id) }}"
                                          method="POST"
                                          onsubmit="return confirm('Delete this gallery?')">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-sm btn-danger">
                                            Delete
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">
                                No gallery items found
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>

</div>

</div>

@endsection
