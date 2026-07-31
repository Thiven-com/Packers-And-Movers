@extends('layout.mainlayout')

@section('content')

<div class="page-wrapper">
    <div class="content">
    <div class="page-header d-flex justify-content-between align-items-center">
        <div class="page-title">
            <h4 class="fw-bold">Blogs</h4>
            <h6>Manage blogs</h6>
        </div>

        <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">
            Add Blog
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
                        <th>Type</th>
                        <th>Status</th>
                        <th width="180">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($blogs as $blog)
                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <td>
                                @if($blog->image)
                                    <img src="{{ asset($blog->image) }}"
                                         width="60"
                                         height="60"
                                         style="object-fit:cover">
                                @endif
                            </td>

                            <td>{{ $blog->title }}</td>
                            <td>{{ $blog->type }}</td>

                            <td>
                                @if($blog->status == 'show')
                                    <span class="badge bg-success">Show</span>
                                @else
                                    <span class="badge bg-secondary">Hide</span>
                                @endif
                            </td>

                            <td>
                                <div class="d-flex gap-2">

                                    <a href="{{ route('admin.blogs.edit', $blog->id) }}"
                                       class="btn btn-sm btn-primary">
                                        Edit
                                    </a>

                                    <form action="{{ route('admin.blogs.destroy', $blog->id) }}"
                                          method="POST"
                                          onsubmit="return confirm('Delete this blog?')">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-sm btn-danger">
                                            Delete
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">
                                No blogs found
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
