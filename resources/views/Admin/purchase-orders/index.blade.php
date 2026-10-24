@extends('Admin.master')

@section('main')
<div class="page-heading">
    <div class="page-title mb-4">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Purchase Orders Management</h3>
                <p class="text-subtitle text-muted">Create, track, and manage inventory stock replenishment from suppliers.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first text-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createPurchaseOrderModal">
                    <i class="bi bi-cart-plus-fill me-1"></i> New Purchase Order
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
                <h4 class="card-title">All Purchase Orders</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Supplier</th>
                                <th>Item Ordered</th>
                                <th>Quantity</th>
                                <th>Total Cost</th>
                                <th>Order Date</th>
                                <th>Status</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($orders as $order)
                                <tr>
                                    <td>PO-{{ str_pad($order->id, 4, '0', STR_PAD_LEFT) }}</td>
                                    <td class="fw-bold">
                                        <i class="bi bi-truck me-1 text-muted"></i>
                                        {{ $order->supplier->name ?? 'N/A' }}
                                    </td>
                                    <td>{{ $order->inventoryItem->name ?? 'N/A' }}</td>
                                    <td>{{ $order->quantity }} units</td>
                                    <td class="fw-bold text-success">${{ number_format($order->total_cost, 2) }}</td>
                                    <td>{{ \Carbon\Carbon::parse($order->order_date)->format('M d, Y') }}</td>
                                    <td>
                                        <span class="badge bg-{{ $order->status === 'received' ? 'success' : ($order->status === 'cancelled' ? 'danger' : 'warning') }} text-capitalize">
                                            {{ $order->status }}
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-outline-warning me-1" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#editPurchaseOrderModal{{ $order->id }}">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#deletePurchaseOrderModal{{ $order->id }}">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>

                                {{-- Edit Purchase Order Modal --}}
                                <div class="modal fade" id="editPurchaseOrderModal{{ $order->id }}" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Purchase Order</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('purchase-orders.update', $order->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body text-start">
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label">Supplier</label>
                                                            <select name="supplier_id" class="form-select" required>
                                                                @foreach($suppliers ?? [] as $supplier)
                                                                    <option value="{{ $supplier->id }}" {{ $order->supplier_id == $supplier->id ? 'selected' : '' }}>
                                                                        {{ $supplier->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label">Inventory Item</label>
                                                            <select name="inventory_item_id" class="form-select" required>
                                                                @foreach($items as $item)
                                                                    <option value="{{ $item->id }}" {{ $order->inventory_item_id == $item->id ? 'selected' : '' }}>
                                                                        {{ $item->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4 mb-3">
                                                            <label class="form-label">Quantity</label>
                                                            <input type="number" name="quantity" class="form-control" value="{{ $order->quantity }}" required>
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label class="form-label">Total Cost ($)</label>
                                                            <input type="number" step="0.01" name="total_cost" class="form-control" value="{{ $order->total_cost }}" required>
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label class="form-label">Status</label>
                                                            <select name="status" class="form-select" required>
                                                                <option value="pending" {{ $order->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                                                <option value="received" {{ $order->status === 'received' ? 'selected' : '' }}>Received</option>
                                                                <option value="cancelled" {{ $order->status === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Order Date</label>
                                                        <input type="date" name="order_date" class="form-control" value="{{ $order->order_date }}" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-primary">Update Order</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                {{-- Delete Modal --}}
                                <div class="modal fade" id="deletePurchaseOrderModal{{ $order->id }}" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Confirm Deletion</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-start">
                                                Are you sure you want to delete purchase order <strong>"PO-{{ str_pad($order->id, 4, '0', STR_PAD_LEFT) }}"</strong>?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <form action="{{ route('purchase-orders.destroy', $order->id) }}" method="POST" class="d-inline">
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
                                    <td colspan="8" class="text-center py-4 text-muted">No purchase orders found. Click "New Purchase Order" to issue one.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

{{-- Create Purchase Order Modal --}}
<div class="modal fade" id="createPurchaseOrderModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">New Purchase Order</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('purchase-orders.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Supplier</label>
                            <select name="supplier_id" class="form-select" required>
                                <option value="" disabled selected>Select supplier...</option>
                                @foreach($suppliers ?? [] as $supplier)
                                    <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Inventory Item</label>
                            <select name="inventory_item_id" class="form-select" required>
                                <option value="" disabled selected>Select item...</option>
                                @foreach($items as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Quantity</label>
                            <input type="number" name="quantity" class="form-control" placeholder="100" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Total Cost ($)</label>
                            <input type="number" step="0.01" name="total_cost" class="form-control" placeholder="500.00" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-select" required>
                                <option value="pending" selected>Pending</option>
                                <option value="received">Received</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Order Date</label>
                        <input type="date" name="order_date" class="form-control" value="{{ date('Y-m-d') }}" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Create Purchase Order</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
