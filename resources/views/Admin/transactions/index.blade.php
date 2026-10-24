@extends('Admin.master')

@section('main')
<div class="page-heading">
    <div class="page-title mb-4">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Transactions & Invoices</h3>
                <p class="text-subtitle text-muted">Track client payments, payment methods, and revenue transactions.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first text-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createTransactionModal">
                    <i class="bi bi-receipt me-1"></i> Record Transaction
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
                <h4 class="card-title">All Payment Logs</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th># Reference</th>
                                <th>Client</th>
                                <th>Appointment / Details</th>
                                <th>Amount</th>
                                <th>Payment Method</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($transactions ?? [] as $transaction)
                                <tr>
                                    <td class="fw-bold">#TRX-{{ str_pad($transaction->id, 5, '0', STR_PAD_LEFT) }}</td>
                                    <td>{{ $transaction->client->first_name ?? 'Guest' }} {{ $transaction->client->last_name ?? '' }}</td>
                                    <td>
                                        <div>{{ $transaction->appointment->service->name ?? 'Direct Payment' }}</div>
                                    </td>
                                    <td class="fw-bold text-success">${{ number_format($transaction->amount, 2) }}</td>
                                    <td>
                                        <span class="badge bg-light-secondary text-dark text-uppercase">
                                            <i class="bi bi-credit-card me-1"></i> {{ $transaction->payment_method }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge bg-{{ $transaction->status === 'completed' ? 'success' : ($transaction->status === 'refunded' ? 'danger' : 'warning') }} text-capitalize">
                                            {{ $transaction->status }}
                                        </span>
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($transaction->created_at)->format('M d, Y h:i A') }}</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-outline-warning me-1" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#editTransactionModal{{ $transaction->id }}">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#deleteTransactionModal{{ $transaction->id }}">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>

                                {{-- Edit Transaction Modal --}}
                                <div class="modal fade" id="editTransactionModal{{ $transaction->id }}" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Transaction</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('transactions.update', $transaction->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body text-start">
                                                    <div class="mb-3">
                                                        <label class="form-label">Client</label>
                                                        <select name="client_id" class="form-select" required>
                                                            @foreach($clients ?? [] as $client)
                                                                <option value="{{ $client->id }}" {{ $transaction->client_id == $client->id ? 'selected' : '' }}>
                                                                    {{ $client->first_name }} {{ $client->last_name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label">Amount ($)</label>
                                                            <input type="number" step="0.01" name="amount" class="form-control" value="{{ $transaction->amount }}" required>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label">Payment Method</label>
                                                            <select name="payment_method" class="form-select" required>
                                                                <option value="cash" {{ $transaction->payment_method === 'cash' ? 'selected' : '' }}>Cash</option>
                                                                <option value="card" {{ $transaction->payment_method === 'card' ? 'selected' : '' }}>Card</option>
                                                                <option value="online" {{ $transaction->payment_method === 'online' ? 'selected' : '' }}>Online</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Status</label>
                                                        <select name="status" class="form-select" required>
                                                            <option value="completed" {{ $transaction->status === 'completed' ? 'selected' : '' }}>Completed</option>
                                                            <option value="pending" {{ $transaction->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                                            <option value="refunded" {{ $transaction->status === 'refunded' ? 'selected' : '' }}>Refunded</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-primary">Update Transaction</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                {{-- Delete Modal --}}
                                <div class="modal fade" id="deleteTransactionModal{{ $transaction->id }}" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Confirm Deletion</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-start">
                                                Are you sure you want to delete transaction <strong>"#TRX-{{ str_pad($transaction->id, 5, '0', STR_PAD_LEFT) }}"</strong>?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <form action="{{ route('transactions.destroy', $transaction->id) }}" method="POST" class="d-inline">
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
                                    <td colspan="8" class="text-center py-4 text-muted">No transactions recorded yet. Click "Record Transaction" to process a payment.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

{{-- Create Transaction Modal --}}
<div class="modal fade" id="createTransactionModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Record New Transaction</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('transactions.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Client</label>
                        <select name="client_id" class="form-select" required>
                            <option value="" disabled selected>Select client...</option>
                            @foreach($clients ?? [] as $client)
                                <option value="{{ $client->id }}">{{ $client->first_name }} {{ $client->last_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Linked Appointment (Optional)</label>
                        <select name="appointment_id" class="form-select">
                            <option value="">-- Direct Sale --</option>
                            @foreach($appointments ?? [] as $appointment)
                                <option value="{{ $appointment->id }}">
                                    #{{ $appointment->id }} - {{ $appointment->service->name ?? 'Service' }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Amount ($)</label>
                            <input type="number" step="0.01" name="amount" class="form-control" placeholder="49.99" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Payment Method</label>
                            <select name="payment_method" class="form-select" required>
                                <option value="cash" selected>Cash</option>
                                <option value="card">Card</option>
                                <option value="online">Online</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-select" required>
                            <option value="completed" selected>Completed</option>
                            <option value="pending">Pending</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Process Payment</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection