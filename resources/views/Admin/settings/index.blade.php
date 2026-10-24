@extends('Admin.master')

@section('main')
<div class="page-heading">
    <div class="page-title mb-4">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Salon & Profile Settings</h3>
                <p class="text-subtitle text-muted">Manage business profile, business hours, tax configurations, and security.</p>
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
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active text-start py-3" id="v-pills-general-tab" data-bs-toggle="pill" data-bs-target="#v-pills-general" type="button" role="tab">
                                <i class="bi bi-building me-2"></i> General Info
                            </button>
                            <button class="nav-link text-start py-3" id="v-pills-hours-tab" data-bs-toggle="pill" data-bs-target="#v-pills-hours" type="button" role="tab">
                                <i class="bi bi-clock me-2"></i> Operating Hours
                            </button>
                            <button class="nav-link text-start py-3" id="v-pills-billing-tab" data-bs-toggle="pill" data-bs-target="#v-pills-billing" type="button" role="tab">
                                <i class="bi bi-receipt me-2"></i> Billing & Tax Rate
                            </button>
                            <button class="nav-link text-start py-3" id="v-pills-security-tab" data-bs-toggle="pill" data-bs-target="#v-pills-security" type="button" role="tab">
                                <i class="bi bi-shield-lock me-2"></i> Password & Security
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="tab-content" id="v-pills-tabContent">
                            
                            {{-- General Info Tab --}}
                            <div class="tab-pane fade show active" id="v-pills-general" role="tabpanel">
                                <h4 class="card-title mb-4">General Salon Information</h4>
                                <form action="{{ route('settings.update-general') }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Salon Name</label>
                                            <input type="text" name="salon_name" class="form-control" value="{{ $settings['salon_name'] ?? 'Luxe Hair & Beauty Salon' }}" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Support Email</label>
                                            <input type="email" name="salon_email" class="form-control" value="{{ $settings['salon_email'] ?? 'contact@luxesalon.com' }}" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Phone Number</label>
                                            <input type="text" name="salon_phone" class="form-control" value="{{ $settings['salon_phone'] ?? '+1 (555) 019-2834' }}" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Currency Symbol</label>
                                            <input type="text" name="currency_symbol" class="form-control" value="{{ $settings['currency_symbol'] ?? '$' }}" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Physical Address</label>
                                        <textarea name="salon_address" class="form-control" rows="3" required>{{ $settings['salon_address'] ?? '123 Beauty Boulevard, Suite 400, New York, NY 10001' }}</textarea>
                                    </div>
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form>
                            </div>

                            {{-- Operating Hours Tab --}}
                            <div class="tab-pane fade" id="v-pills-hours" role="tabpanel">
                                <h4 class="card-title mb-4">Business Operating Hours</h4>
                                <form action="{{ route('settings.update-hours') }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row mb-3 align-items-center">
                                        <div class="col-md-3"><span class="fw-bold">Monday - Friday</span></div>
                                        <div class="col-md-4">
                                            <input type="time" name="opening_time" class="form-control" value="{{ $settings['opening_time'] ?? '09:00' }}">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="time" name="closing_time" class="form-control" value="{{ $settings['closing_time'] ?? '19:00' }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3 align-items-center">
                                        <div class="col-md-3"><span class="fw-bold">Saturday - Sunday</span></div>
                                        <div class="col-md-4">
                                            <input type="time" name="weekend_opening_time" class="form-control" value="{{ $settings['weekend_opening_time'] ?? '10:00' }}">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="time" name="weekend_closing_time" class="form-control" value="{{ $settings['weekend_closing_time'] ?? '17:00' }}">
                                        </div>
                                    </div>
                                    <div class="text-end mt-4">
                                        <button type="submit" class="btn btn-primary">Update Hours</button>
                                    </div>
                                </form>
                            </div>

                            {{-- Billing & Tax Tab --}}
                            <div class="tab-pane fade" id="v-pills-billing" role="tabpanel">
                                <h4 class="card-title mb-4">Billing & Tax Settings</h4>
                                <form action="{{ route('settings.update-billing') }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Sales Tax Rate (%)</label>
                                            <input type="number" step="0.01" name="tax_rate" class="form-control" value="{{ $settings['tax_rate'] ?? '8.875' }}" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Tax Identification Number (TIN)</label>
                                            <input type="text" name="tax_id" class="form-control" value="{{ $settings['tax_id'] ?? 'XX-XXXXXXX' }}">
                                        </div>
                                    </div>
                                    <div class="text-end mt-3">
                                        <button type="submit" class="btn btn-primary">Save Tax Rates</button>
                                    </div>
                                </form>
                            </div>

                            {{-- Security Tab --}}
                            <div class="tab-pane fade" id="v-pills-security" role="tabpanel">
                                <h4 class="card-title mb-4">Update Password</h4>
                                <form action="{{ route('settings.update-password') }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label class="form-label">Current Password</label>
                                        <input type="password" name="current_password" class="form-control" required>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">New Password</label>
                                            <input type="password" name="new_password" class="form-control" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Confirm New Password</label>
                                            <input type="password" name="new_password_confirmation" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="text-end mt-3">
                                        <button type="submit" class="btn btn-danger">Update Password</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection