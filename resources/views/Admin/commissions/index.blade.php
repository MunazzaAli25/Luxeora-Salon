@extends('Admin.master')

@section('main')
<div class="page-heading">
    <div class="page-title mb-4">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Commissions Tracker</h3>
                <p class="text-subtitle text-muted">Track staff commissions earned per service and manage payout statuses.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first text-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createCommissionModal">
                    <i class="bi bi-plus-circle-fill me-1"></i> Record Commission
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
                <h4 class="card-title">Staff Commission Records</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Staff Member</th>
                                <th>Appointment / Service</th>
                                <th>Service Cost</th>
                                <th>Commission Rate</th>
                                <th>Earned Amount</th>
                                <th>Status</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($commissions ?? [] as $commission)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="fw-bold">
                                        <i class="bi bi-person-badge me-1 text-muted"></i>
                                        {{ $commission->staff->name ?? 'N/A' }}
                                    </td>
                                    <td>
                                        <div>{{ $commission->appointment->service->name ?? 'Custom Service' }}</div>
                                        <div class="small text-muted">
                                            Client: {{ $commission->appointment->client->first_name ?? 'N/A' }} {{ $commission->appointment->client->last_name ?? '' }}
                                        </div>
                                    </td>
                                    <td>${{ number_format($commission->service_cost ?? 0, 2) }}</td>
                                    <td>{{ $commission->rate }}%</td>
                                    <td class="fw-bold text-success">${{ number_format($commission->amount, 2) }}</td>
                                    <td>
                                        <span class="badge bg-{{ $commission->status === 'paid' ? 'success' : 'warning' }} text-capitalize">
                                            {{ $commission->status }}
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-outline-warning me-1" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#editCommissionModal{{ $commission->id }}">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#deleteCommissionModal{{ $commission->id }}">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>

                                {{-- Edit Commission Modal --}}
                                <div class="modal fade" id="editCommissionModal{{ $commission->id }}" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Commission Record</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('commissions.update', $commission->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body text-start">
                                                    <div class="mb-3">
                                                        <label class="form-label">Staff Member</label>
                                                        <select name="staff_id" class="form-select" required>
                                                            @foreach($staffMembers ?? [] as $staff)
                                                                <option value="{{ $staff->id }}" {{ $commission->staff_id == $staff->id ? 'selected' : '' }}>
                                                                    {{ $staff->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label">Earned Amount ($)</label>
                                                            <input type="number" step="0.01" name="amount" class="form-control" value="{{ $commission->amount }}" required>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label">Status</label>
                                                            <select name="status" class="form-select" required>
                                                                <option value="pending" {{ $commission->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                                                <option value="paid" {{ $commission->status === 'paid' ? 'selected' : '' }}>Paid</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-primary">Update Commission</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                {{-- Delete Modal --}}
                                <div class="modal fade" id="deleteCommissionModal{{ $commission->id }}" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Confirm Deletion</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-start">
                                                Are you sure you want to delete this commission entry?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <form action="{{ route('commissions.destroy', $commission->id) }}" method="POST" class="d-inline">
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
                                    <td colspan="8" class="text-center py-4 text-muted">No commission records found. Click "Record Commission" to add one.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

{{-- Create Commission Modal --}}
<div class="modal fade" id="createCommissionModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Record Commission</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('commissions.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Staff Member</label>
                        <select name="staff_id" class="form-select" required>
                            <option value="" disabled selected>Select staff...</option>
                            @foreach($staffMembers ?? [] as $staff)
                                <option value="{{ $staff->id }}">{{ $staff->name }} ({{ $staff->commission_rate }}%)</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Related Appointment (Optional)</label>
                        <select name="appointment_id" class="form-select">
                            <option value="">-- Manual Calculation --</option>
                            @foreach($appointments ?? [] as $appointment)
                                <option value="{{ $appointment->id }}">
                                    #{{ $appointment->id }} - {{ $appointment->client->first_name ?? 'Client' }} ({{ $appointment->service->name ?? 'Service' }})
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Earned Amount ($)</label>
                            <input type="number" step="0.01" name="amount" class="form-control" placeholder="15.00" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-select" required>
                                <option value="pending" selected>Pending</option>
                                <option value="paid">Paid</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save Commission</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection