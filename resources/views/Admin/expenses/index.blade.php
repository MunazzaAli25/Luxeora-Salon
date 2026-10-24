@extends('Admin.master')

@section('main')
<div class="page-heading">
    <div class="page-title mb-4">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Expenses Tracker</h3>
                <p class="text-subtitle text-muted">Log, categorize, and monitor salon operational overheads and costs.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first text-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createExpenseModal">
                    <i class="bi bi-wallet-fill me-1"></i> Add New Expense
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
                <h4 class="card-title">Expense Logs</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Title / Purpose</th>
                                <th>Category</th>
                                <th>Amount</th>
                                <th>Expense Date</th>
                                <th>Notes</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($expenses ?? [] as $expense)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="fw-bold">{{ $expense->title }}</td>
                                    <td>
                                        <span class="badge bg-light-primary text-primary text-capitalize fs-6">
                                            {{ $expense->category }}
                                        </span>
                                    </td>
                                    <td class="fw-bold text-danger">-${{ number_format($expense->amount, 2) }}</td>
                                    <td>
                                        <i class="bi bi-calendar3 me-1 text-muted"></i>
                                        {{ \Carbon\Carbon::parse($expense->expense_date)->format('M d, Y') }}
                                    </td>
                                    <td class="text-muted text-truncate" style="max-width: 200px;">
                                        {{ $expense->notes ?? 'N/A' }}
                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-outline-warning me-1" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#editExpenseModal{{ $expense->id }}">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#deleteExpenseModal{{ $expense->id }}">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>

                                {{-- Edit Expense Modal --}}
                                <div class="modal fade" id="editExpenseModal{{ $expense->id }}" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Expense Record</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('expenses.update', $expense->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body text-start">
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label">Expense Title</label>
                                                            <input type="text" name="title" class="form-control" value="{{ $expense->title }}" required>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label">Category</label>
                                                            <select name="category" class="form-select" required>
                                                                @foreach(['rent', 'utilities', 'supplies', 'marketing', 'maintenance', 'other'] as $cat)
                                                                    <option value="{{ $cat }}" {{ $expense->category === $cat ? 'selected' : '' }}>
                                                                        {{ ucfirst($cat) }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label">Amount ($)</label>
                                                            <input type="number" step="0.01" name="amount" class="form-control" value="{{ $expense->amount }}" required>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label">Expense Date</label>
                                                            <input type="date" name="expense_date" class="form-control" value="{{ $expense->expense_date }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Notes / Details</label>
                                                        <textarea name="notes" class="form-control" rows="2">{{ $expense->notes }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-primary">Update Expense</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                {{-- Delete Modal --}}
                                <div class="modal fade" id="deleteExpenseModal{{ $expense->id }}" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Confirm Deletion</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-start">
                                                Are you sure you want to delete expense record <strong>"{{ $expense->title }}"</strong>?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <form action="{{ route('expenses.destroy', $expense->id) }}" method="POST" class="d-inline">
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
                                    <td colspan="7" class="text-center py-4 text-muted">No expense records logged yet. Click "Add New Expense" to create one.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

{{-- Create Expense Modal --}}
<div class="modal fade" id="createExpenseModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Record New Expense</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('expenses.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Expense Title</label>
                            <input type="text" name="title" class="form-control" placeholder="e.g. Electricity Bill - July" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Category</label>
                            <select name="category" class="form-select" required>
                                <option value="" disabled selected>Select category...</option>
                                <option value="rent">Rent</option>
                                <option value="utilities">Utilities</option>
                                <option value="supplies">Supplies</option>
                                <option value="marketing">Marketing</option>
                                <option value="maintenance">Maintenance</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Amount ($)</label>
                            <input type="number" step="0.01" name="amount" class="form-control" placeholder="150.00" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Expense Date</label>
                            <input type="date" name="expense_date" class="form-control" value="{{ date('Y-m-d') }}" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Notes / Details</label>
                        <textarea name="notes" class="form-control" rows="2" placeholder="e.g. Paid via corporate debit card"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save Expense</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection