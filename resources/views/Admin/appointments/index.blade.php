@extends('Admin.master')

@section('main')
<div class="page-heading">
    <div class="page-title mb-4">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Appointments Management</h3>
                <p class="text-subtitle text-muted">Schedule and manage client appointments and service bookings.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first text-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createAppointmentModal">
                    <i class="bi bi-calendar-plus me-1"></i> New Appointment
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

    <section class="section">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">All Bookings</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Client</th>
                                <th>Service</th>
                                <th>Assigned Staff</th>
                                <th>Date & Time</th>
                                <th>Status</th>
                                <th>Notes</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($appointments ?? [] as $appointment)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="fw-bold">
                                        {{ $appointment->client->first_name ?? '' }} {{ $appointment->client->last_name ?? 'N/A' }}
                                    </td>
                                    <td>
                                        <span class="badge bg-light-primary text-primary fs-6">
                                            {{ $appointment->service->name ?? 'N/A' }}
                                        </span>
                                    </td>
                                    <td>
                                        <i class="bi bi-person-badge me-1 text-muted"></i>
                                        {{ $appointment->staff->name ?? 'Unassigned' }}
                                    </td>
                                    <td>
                                        <div><i class="bi bi-calendar3 me-1 text-muted"></i> {{ \Carbon\Carbon::parse($appointment->start_time)->format('M d, Y') }}</div>
                                        <div class="small text-muted"><i class="bi bi-clock me-1"></i> {{ \Carbon\Carbon::parse($appointment->start_time)->format('h:i A') }}</div>
                                    </td>
                                    <td>
                                        <span class="badge bg-{{ $appointment->status === 'completed' ? 'success' : ($appointment->status === 'cancelled' ? 'danger' : 'warning') }} text-capitalize">
                                            {{ $appointment->status }}
                                        </span>
                                    </td>
                                    <td class="text-muted text-truncate" style="max-width: 150px;">
                                        {{ $appointment->notes ?? 'N/A' }}
                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-outline-warning me-1" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#editAppointmentModal{{ $appointment->id }}">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#deleteAppointmentModal{{ $appointment->id }}">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>

                                {{-- Edit Appointment Modal --}}
                                <div class="modal fade" id="editAppointmentModal{{ $appointment->id }}" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Appointment</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('appointments.update', $appointment->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body text-start">
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label">Client</label>
                                                            <select name="client_id" class="form-select" required>
                                                                @foreach($clients ?? [] as $client)
                                                                    <option value="{{ $client->id }}" {{ $appointment->client_id == $client->id ? 'selected' : '' }}>
                                                                        {{ $client->first_name }} {{ $client->last_name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label">Service</label>
                                                            <select name="service_id" class="form-select" required>
                                                                @foreach($services ?? [] as $service)
                                                                    <option value="{{ $service->id }}" {{ $appointment->service_id == $service->id ? 'selected' : '' }}>
                                                                        {{ $service->name }} (${{ $service->price }})
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label">Stylist / Staff</label>
                                                            <select name="staff_id" class="form-select" required>
                                                                @foreach($staffMembers ?? [] as $staff)
                                                                    <option value="{{ $staff->id }}" {{ $appointment->staff_id == $staff->id ? 'selected' : '' }}>
                                                                        {{ $staff->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label">Status</label>
                                                            <select name="status" class="form-select" required>
                                                                <option value="scheduled" {{ $appointment->status === 'scheduled' ? 'selected' : '' }}>Scheduled</option>
                                                                <option value="completed" {{ $appointment->status === 'completed' ? 'selected' : '' }}>Completed</option>
                                                                <option value="cancelled" {{ $appointment->status === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 mb-3">
                                                            <label class="form-label">Date & Start Time</label>
                                                            <input type="datetime-local" name="start_time" class="form-control" value="{{ \Carbon\Carbon::parse($appointment->start_time)->format('Y-m-d\TH:i') }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Notes</label>
                                                        <textarea name="notes" class="form-control" rows="2">{{ $appointment->notes }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-primary">Update Appointment</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                {{-- Delete Modal --}}
                                <div class="modal fade" id="deleteAppointmentModal{{ $appointment->id }}" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Confirm Deletion</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-start">
                                                Are you sure you want to cancel and remove this appointment booking?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST" class="d-inline">
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
                                    <td colspan="8" class="text-center py-4 text-muted">No appointments found. Click "New Appointment" to schedule one.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

{{-- Create Appointment Modal --}}
<div class="modal fade" id="createAppointmentModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Book New Appointment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('appointments.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Client</label>
                            <select name="client_id" class="form-select" required>
                                <option value="" disabled selected>Select client...</option>
                                @foreach($clients ?? [] as $client)
                                    <option value="{{ $client->id }}">{{ $client->first_name }} {{ $client->last_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Service</label>
                            <select name="service_id" class="form-select" required>
                                <option value="" disabled selected>Select service...</option>
                                @foreach($services ?? [] as $service)
                                    <option value="{{ $service->id }}">{{ $service->name }} (${{ $service->price }})</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Stylist / Staff</label>
                            <select name="staff_id" class="form-select" required>
                                <option value="" disabled selected>Select stylist...</option>
                                @foreach($staffMembers ?? [] as $staff)
                                    <option value="{{ $staff->id }}">{{ $staff->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Date & Start Time</label>
                            <input type="datetime-local" name="start_time" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Notes / Instructions</label>
                        <textarea name="notes" class="form-control" rows="2" placeholder="e.g. Special hair coloring mix request"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Create Booking</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection