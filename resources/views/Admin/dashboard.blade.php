@extends('Admin.master')

@section('main')
<div class="page-heading">
    <div class="page-title mb-3">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Salon Operations Overview</h3>
                <p class="text-subtitle text-muted">Real-time metrics and daily salon activities.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Overview</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section class="section">
        {{-- Stat Cards --}}
        <div class="row">
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-3 py-4-5">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="stats-icon purple">
                                    <i class="bi bi-people-fill"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h6 class="text-muted font-semibold">Total Clients</h6>
                                <h6 class="font-extrabold mb-0">{{ $totalClients ?? 0 }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-3 py-4-5">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="stats-icon blue">
                                    <i class="bi bi-calendar-event-fill"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h6 class="text-muted font-semibold">Today's Bookings</h6>
                                <h6 class="font-extrabold mb-0">{{ $todayAppointments ?? 0 }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-3 py-4-5">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="stats-icon green">
                                    <i class="bi bi-scissors"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h6 class="text-muted font-semibold">Active Services</h6>
                                <h6 class="font-extrabold mb-0">{{ $totalServices ?? 0 }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-3 py-4-5">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="stats-icon red">
                                    <i class="bi bi-currency-dollar"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h6 class="text-muted font-semibold">Total Revenue</h6>
                                <h6 class="font-extrabold mb-0">${{ number_format($totalRevenue ?? 0, 2) }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Quick Actions & Upcoming Appointments --}}
        <div class="row">
            <div class="col-12 col-xl-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4>Upcoming Appointments</h4>
                        <a href="{{ route('appointments.index') }}" class="btn btn-sm btn-outline-primary">View All</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-lg">
                                <thead>
                                    <tr>
                                        <th>Client</th>
                                        <th>Stylist</th>
                                        <th>Time</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($recentAppointments ?? [] as $appointment)
                                        <tr>
                                            <td>{{ $appointment->client->first_name }} {{ $appointment->client->last_name }}</td>
                                            <td>{{ $appointment->staff->name }}</td>
                                            <td>{{ \Carbon\Carbon::parse($appointment->start_time)->format('M d, h:i A') }}</td>
                                            <td>
                                                <span class="badge bg-{{ $appointment->status === 'completed' ? 'success' : ($appointment->status === 'cancelled' ? 'danger' : 'warning') }}">
                                                    {{ ucfirst($appointment->status) }}
                                                </span>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center text-muted">No upcoming appointments recorded.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Quick Actions</h4>
                    </div>
                    <div class="card-body d-grid gap-2">
                        <a href="{{ route('appointments.index') }}" class="btn btn-primary btn-block">
                            <i class="bi bi-calendar-plus me-2"></i> Book Appointment
                        </a>
                        <a href="{{ route('clients.index') }}" class="btn btn-outline-secondary btn-block">
                            <i class="bi bi-person-plus me-2"></i> Add New Client
                        </a>
                        <a href="{{ route('transactions.index') }}" class="btn btn-outline-success btn-block">
                            <i class="bi bi-receipt me-2"></i> Record Payment
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection