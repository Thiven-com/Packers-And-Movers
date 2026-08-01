@extends('layout.mainlayout')

@section('content')

    <div class="page-wrapper">
        <div class="content">

            {{-- Page Header --}}
            <div class="page-header">
                <div class="add-item d-flex">
                    <div class="page-title">
                        <h4>Contact Enquiries</h4>
                        <h6>Manage your Contact Enquiries</h6>
                    </div>
                </div>

                <ul class="table-top-head">
                    <li class="me-2">
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header">
                            <i class="ti ti-chevron-up"></i>
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Success Message --}}
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            {{-- Contact Table --}}
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
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Service</th>
                                    <th>Message</th>
                                    <th>Date</th>
                                    <th class="no-sort">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php $i = 1; @endphp

                                @forelse($contacts as $contact)
                                    <tr>
                                        <td>{{ $i }}</td>

                                        <td>
                                            <div class="fw-medium text-dark">
                                                {{ $contact->name }}
                                            </div>
                                        </td>

                                        <td>{{ $contact->phone }}</td>

                                        <td>
                                            {{ $contact->email ?? '_' }}
                                        </td>

                                        <td>
                                            <span class="badge bg-primary-subtle text-primary">
                                                {{ $contact->service ?? 'General' }}
                                            </span>
                                        </td>

                                        <td style="max-width:250px;">
                                            {{ \Illuminate\Support\Str::limit($contact->message, 60) }}
                                        </td>

                                        <td>
                                            {{ $contact->created_at->format('d M Y') }}
                                            <br>
                                            <small class="text-muted">
                                                {{ $contact->created_at->format('h:i A') }}
                                            </small>
                                        </td>

                                        <td class="action-table-data">
                                            <div class="edit-delete-action">

                                                {{-- View Button --}}
                                                <a href="javascript:void(0);" class="me-2 p-2 view-contact"
                                                    data-bs-toggle="modal" data-bs-target="#view-contact-modal"
                                                    data-name="{{ $contact->name }}" data-phone="{{ $contact->phone }}"
                                                    data-email="{{ $contact->email }}" data-service="{{ $contact->service }}"
                                                    data-message="{{ $contact->message }}"
                                                    data-date="{{ $contact->created_at->format('d M Y h:i A') }}">
                                                    <i data-feather="eye" class="feather-eye" style="color:#0d6efd;"></i>
                                                </a>

                                                {{-- Delete Button --}}
                                                <form action="{{ route('admin.contacts.destroy', ['id' => $contact->id]) }}"
                                                    method="POST" style="display:inline-block;"
                                                    onsubmit="return confirm('Are you sure you want to delete this enquiry?')">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="border-0 bg-transparent p-2">
                                                        <i data-feather="trash-2" class="feather-trash-2"
                                                            style="color:red;"></i>
                                                    </button>
                                                </form>

                                            </div>
                                        </td>
                                    </tr>

                                    @php $i++; @endphp
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center py-4">
                                            <div class="text-muted">
                                                No contact enquiries found.
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    {{-- Pagination --}}
                    <div class="p-3">
                        {{ $contacts->links('pagination::bootstrap-5') }}
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

    {{-- View Contact Modal --}}

    <div class="modal fade" id="view-contact-modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Contact Enquiry Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <strong>Name:</strong>
                        <div id="view_name"></div>
                    </div>

                    <div class="mb-3">
                        <strong>Phone:</strong>
                        <div id="view_phone"></div>
                    </div>

                    <div class="mb-3">
                        <strong>Email:</strong>
                        <div id="view_email"></div>
                    </div>

                    <div class="mb-3">
                        <strong>Service:</strong>
                        <div id="view_service"></div>
                    </div>

                    <div class="mb-3">
                        <strong>Message:</strong>
                        <div id="view_message" class="border rounded p-3 bg-light"></div>
                    </div>

                    <div class="mb-0">
                        <strong>Submitted On:</strong>
                        <div id="view_date"></div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>

    </div>

    {{-- jQuery --}}

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).on('click', '.view-contact', function () {

            $('#view_name').text($(this).data('name'));
            $('#view_phone').text($(this).data('phone'));
            $('#view_email').text($(this).data('email') || '-');
            $('#view_service').text($(this).data('service') || '-');
            $('#view_message').text($(this).data('message') || '-');
            $('#view_date').text($(this).data('date'));
        });
    </script>

@endsection