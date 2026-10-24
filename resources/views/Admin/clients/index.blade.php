@extends('Admin.master')

@section('main')
<div class="page-heading">
    <div class="page-title mb-4">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Clients Management</h3>
                <p class="text-subtitle text-muted">View, add, and manage salon client directory and preferences.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first text-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createClientModal">
                    <i class="bi bi-person-plus me-1"></i> Add New Client
                </button>
            </div>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-triangle me-2"></i> {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-triangle me-2"></i>
            <strong>Validation Errors:</strong>
            <ul class="mb-0 mt-2">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <section class="section">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">All Registered Clients</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Contact Info</th>
                                <th>Address</th>
                                <th>DOB</th>
                                <th>Preferred Stylist</th>
                                <th>Notes</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($clients ?? [] as $client)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="fw-bold">{{ $client->name }}</td>
                                    <td>
                                        <div><i class="bi bi-envelope me-1 text-muted"></i> {{ $client->email ?? 'N/A' }}</div>
                                        <div class="small text-muted"><i class="bi bi-telephone me-1"></i> {{ $client->phone }}</div>
                                    </td>
                                    <td>{{ Str::limit($client->address, 25) }}</td>
                                    <td>{{ $client->date_of_birth ? \Carbon\Carbon::parse($client->date_of_birth)->format('M d, Y') : 'N/A' }}</td>
                                    <td>
                                        @if($client->preferredStylist)
                                            <span class="badge bg-light-info text-info">
                                                <i class="bi bi-person-badge me-1"></i>{{ $client->preferredStylist->name }}
                                            </span>
                                        @else
                                            <span class="text-muted">None</span>
                                        @endif
                                    </td>
                                    <td class="text-muted text-truncate" style="max-width: 150px;">
                                        {{ $client->Preferences ?? 'N/A' }}
                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-outline-warning me-1" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#editClientModal{{ $client->id }}">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#deleteClientModal{{ $client->id }}">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>

                                {{-- Edit Client Modal --}}
                                <div class="modal fade" id="editClientModal{{ $client->id }}" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Client Details</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('clients.update', $client->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body text-start">
                                                    <div class="mb-3">
                                                        <label class="form-label">Full Name</label>
                                                        <input type="text" name="name" class="form-control" value="{{ $client->name }}" required>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label">Email</label>
                                                            <input type="email" name="email" class="form-control" value="{{ $client->email }}">
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label">Phone</label>
                                                            <input type="text" name="phone" class="form-control" value="{{ $client->phone }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label">Date of Birth</label>
                                                            <input type="date" name="date_of_birth" class="form-control" value="{{ $client->date_of_birth }}">
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label">Preferred Stylist</label>
                                                            <select name="preferred_stylist_id" class="form-select">
                                                                <option value="">-- None --</option>
                                                                @foreach($stylists ?? [] as $stylist)
                                                                    <option value="{{ $stylist->id }}" {{ $client->preferred_stylist_id == $stylist->id ? 'selected' : '' }}>
                                                                        {{ $stylist->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Address</label>
                                                        <textarea name="address" class="form-control" rows="2" required>{{ $client->address }}</textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Notes / Preferences</label>
                                                        <textarea name="Preferences" class="form-control" rows="2">{{ $client->Preferences }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-primary">Update Client</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                {{-- Delete Modal --}}
                                <div class="modal fade" id="deleteClientModal{{ $client->id }}" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Confirm Deletion</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-start">
                                                Are you sure you want to delete client <strong>"{{ $client->name }}"</strong>?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <form action="{{ route('clients.destroy', $client->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center py-4 text-muted">No clients recorded. Click "Add New Client" to register one.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

{{-- Create Client Modal --}}
<div class="modal fade" id="createClientModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Client</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('clients.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" name="name" class="form-control" placeholder="John Doe" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="client@example.com">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="+123456789" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Date of Birth</label>
                            <input type="date" name="date_of_birth" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Preferred Stylist</label>
                            <select name="preferred_stylist_id" class="form-select">
                                <option value="">-- None --</option>
                                @foreach($stylists ?? [] as $stylist)
                                    <option value="{{ $stylist->id }}">{{ $stylist->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <textarea name="address" class="form-control" rows="2" placeholder="Full address" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Notes / Preferences</label>
                        <textarea name="Preferences" class="form-control" rows="2" placeholder="e.g. Sensitive scalp, prefers green tea"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save Client</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection