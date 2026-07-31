@extends('layout.mainlayout')

@section('content')
    <div class="page-wrapper">
        <div class="content">

            <div class="page-header d-flex justify-content-between align-items-center">
                <div class="page-title">
                    <h4 class="fw-bold">Service List</h4>
                    <h6>Manage your services</h6>
                </div>

                <a href="{{ route('services.create') }}" class="btn btn-primary">
                    <i class="ti ti-circle-plus me-1"></i>Add Service
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
                                <th width="150">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($services as $service)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        @if($service->image)
                                            <img src="{{ asset($service->image) }}" width="60" height="60" style="object-fit:cover">
                                        @endif
                                    </td>
                                    <td>{{ $service->title }}</td>
                                    <td>{{ $service->type }}</td>
                                    <td>
                                        @if($service->status == 'show')
                                            <span class="badge bg-success">Show</span>
                                        @else
                                            <span class="badge bg-secondary">Hide</span>
                                        @endif
                                    </td>
                                    <td>
                                        <form action="{{ route('services.destroy', $service->id) }}" method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this service?')">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('services.edit', $service->id) }}"
                                                class="btn btn-sm btn-primary">Edit</a>


                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="ti ti-trash me-1"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">No services found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection