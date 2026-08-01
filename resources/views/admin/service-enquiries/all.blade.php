@extends('layout.mainlayout')

@section('content')
<div class="page-wrapper">
    <div class="content">

        <div class="page-header d-flex justify-content-between align-items-center">
            <div class="page-title">
                <h4 class="fw-bold">Service Enquiries</h4>
                <h6>Manage customer service enquiries</h6>
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="card">
            <div class="card-body table-responsive p-0">

                <table class="table align-middle mb-0">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Service</th>
                            <th>House Size</th>
                            <th>Customer</th>
                            <th>Mobile</th>
                            <th>Locations</th>
                            <th>Moving Date</th>
                            <th>Message</th>
                            <th width="100">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($enquiries as $enquiry)
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>
                                    <span class="badge bg-primary-subtle text-primary">
                                        {{ $enquiry->service }}
                                    </span>
                                </td>
                                <td> {{ $enquiry->house_size ?? 'Not Specified' }}</td>

                                <td>
                                    <div class="fw-semibold">{{ $enquiry->name }}</div>
                                    <small class="text-muted">{{ $enquiry->email }}</small>
                                </td>

                                <td>{{ $enquiry->mobile }}</td>

                                <td>
                                    <small>
                                        <strong>From:</strong> {{ $enquiry->from_location ?? '-' }}<br>
                                        <strong>To:</strong> {{ $enquiry->to_location ?? '-' }}
                                    </small>
                                </td>

                                <td>
                                    {{ $enquiry->moving_date ? \Carbon\Carbon::parse($enquiry->moving_date)->format('d M Y') : '-' }}
                                </td>

                                <td style="max-width:220px;">
                                    {{ \Illuminate\Support\Str::limit($enquiry->message, 50) }}
                                </td>

                                <td>
                                    <form action="{{ route('admin.service-enquiries.destroy', $enquiry->id) }}"
                                          method="POST"
                                          onsubmit="return confirm('Delete this enquiry?')">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center py-4 text-muted">
                                    No service enquiries found
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>

            <div class="p-3">
                {{ $enquiries->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>
@endsection