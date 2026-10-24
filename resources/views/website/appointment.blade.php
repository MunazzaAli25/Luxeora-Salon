@extends('website.master')

@section('main')

<!-- Page Header Start -->
<div class="container-fluid luxeora-page-header">
    <div class="container text-center py-5">

        <p class="luxeora-section-subtitle">
            LUXEORA BEAUTY SALON
        </p>

        <h1 class="luxeora-page-title">
            Book An <span>Appointment.</span>
        </h1>

        <p class="luxeora-page-intro">
            Choose your preferred service, date and time and
            let us prepare a beautiful Luxeora experience for you.
        </p>

    </div>
</div>
<!-- Page Header End -->


<!-- Appointment Start -->
<div class="container-fluid luxeora-appointment-page py-5">

    <div class="container py-5">

        {{-- Success / Error Messages --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                <i class="bi bi-check-circle me-2"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                <i class="bi bi-exclamation-triangle me-2"></i>
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="row g-5 align-items-start">

            <!-- Left Information -->
            <div class="col-lg-5">

                <div class="luxeora-appointment-info">

                    <p class="luxeora-section-subtitle">
                        RESERVE YOUR VISIT
                    </p>

                    <h2 class="luxeora-section-title">
                        Your Time Is
                        <span>Important.</span>
                    </h2>

                    <p class="luxeora-appointment-intro">
                        Schedule your appointment with Luxeora and
                        enjoy professional beauty care in an elegant,
                        relaxing environment.
                    </p>


                    <!-- Info Item -->
                    <div class="luxeora-appointment-info-item">

                        <div class="luxeora-appointment-icon">
                            <i class="bi bi-clock"></i>
                        </div>

                        <div>
                            <h5>Opening Hours</h5>

                            <p>
                                Monday - Saturday
                                <br>
                                10:00 AM - 09:00 PM
                            </p>
                        </div>

                    </div>


                    <!-- Info Item -->
                    <div class="luxeora-appointment-info-item">

                        <div class="luxeora-appointment-icon">
                            <i class="bi bi-telephone"></i>
                        </div>

                        <div>
                            <h5>Call Us</h5>

                            <p>
                                +92 300 1234567
                            </p>
                        </div>

                    </div>


                    <!-- Info Item -->
                    <div class="luxeora-appointment-info-item">

                        <div class="luxeora-appointment-icon">
                            <i class="bi bi-envelope"></i>
                        </div>

                        <div>
                            <h5>Email Us</h5>

                            <p>
                                info@luxeora.com
                            </p>
                        </div>

                    </div>


                    <!-- Info Item -->
                    <div class="luxeora-appointment-info-item">

                        <div class="luxeora-appointment-icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>

                        <div>
                            <h5>Visit Us</h5>

                            <p>
                                Karachi, Pakistan
                            </p>
                        </div>

                    </div>

                </div>

            </div>


            <!-- Appointment Form -->
            <div class="col-lg-7">

                <div class="luxeora-appointment-form">

                    <div class="luxeora-form-heading">

                        <p>
                            APPOINTMENT FORM
                        </p>

                        <h3>
                            Reserve Your <span>Beauty Session.</span>
                        </h3>

                    </div>


                    <form action="{{ route('web.appointment.store') }}" method="POST">

                        @csrf

                        <div class="row g-4">

                            <!-- Name -->
                            <div class="col-md-6">

                                <label>
                                    Full Name <span class="text-danger">*</span>
                                </label>

                                <input type="text"
                                       name="name"
                                       value="{{ old('name') }}"
                                       class="form-control luxeora-form-control @error('name') is-invalid @enderror"
                                       placeholder="Enter your name"
                                       required>
                                @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror

                            </div>


                            <!-- Phone -->
                            <div class="col-md-6">

                                <label>
                                    Phone Number <span class="text-danger">*</span>
                                </label>

                                <input type="tel"
                                       name="phone"
                                       value="{{ old('phone') }}"
                                       class="form-control luxeora-form-control @error('phone') is-invalid @enderror"
                                       placeholder="03XX XXXXXXX"
                                       required>
                                @error('phone')<div class="invalid-feedback">{{ $message }}</div>@enderror

                            </div>


                            <!-- Email -->
                            <div class="col-md-6">

                                <label>
                                    Email Address
                                </label>

                                <input type="email"
                                       name="email"
                                       value="{{ old('email') }}"
                                       class="form-control luxeora-form-control @error('email') is-invalid @enderror"
                                       placeholder="Enter your email">
                                @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror

                            </div>


                            <!-- Service -->
                            <div class="col-md-6">

                                <label>
                                    Select Service
                                </label>

                                <select name="service_id"
                                        class="form-select luxeora-form-control @error('service_id') is-invalid @enderror">

                                    <option value="">Choose a service</option>

                                    @foreach($services as $service)
                                        <option value="{{ $service->id }}" {{ old('service_id') == $service->id ? 'selected' : '' }}>
                                            {{ $service->name }}
                                            @if($service->price)
                                                — Rs. {{ number_format($service->price) }}
                                            @endif
                                        </option>
                                    @endforeach

                                </select>
                                @error('service_id')<div class="invalid-feedback">{{ $message }}</div>@enderror

                            </div>


                            <!-- Date -->
                            <div class="col-md-6">

                                <label>
                                    Appointment Date <span class="text-danger">*</span>
                                </label>

                                <input type="date"
                                       name="appointment_date"
                                       value="{{ old('appointment_date') }}"
                                       min="{{ date('Y-m-d') }}"
                                       class="form-control luxeora-form-control @error('appointment_date') is-invalid @enderror"
                                       required>
                                @error('appointment_date')<div class="invalid-feedback">{{ $message }}</div>@enderror

                            </div>


                            <!-- Time -->
                            <div class="col-md-6">

                                <label>
                                    Preferred Time <span class="text-danger">*</span>
                                </label>

                                <select name="appointment_time"
                                        class="form-select luxeora-form-control @error('appointment_time') is-invalid @enderror"
                                        required>

                                    <option value="">Choose a time</option>
                                    <option {{ old('appointment_time') == '10:00 AM' ? 'selected' : '' }}>10:00 AM</option>
                                    <option {{ old('appointment_time') == '11:00 AM' ? 'selected' : '' }}>11:00 AM</option>
                                    <option {{ old('appointment_time') == '12:00 PM' ? 'selected' : '' }}>12:00 PM</option>
                                    <option {{ old('appointment_time') == '01:00 PM' ? 'selected' : '' }}>01:00 PM</option>
                                    <option {{ old('appointment_time') == '02:00 PM' ? 'selected' : '' }}>02:00 PM</option>
                                    <option {{ old('appointment_time') == '03:00 PM' ? 'selected' : '' }}>03:00 PM</option>
                                    <option {{ old('appointment_time') == '04:00 PM' ? 'selected' : '' }}>04:00 PM</option>
                                    <option {{ old('appointment_time') == '05:00 PM' ? 'selected' : '' }}>05:00 PM</option>
                                    <option {{ old('appointment_time') == '06:00 PM' ? 'selected' : '' }}>06:00 PM</option>
                                    <option {{ old('appointment_time') == '07:00 PM' ? 'selected' : '' }}>07:00 PM</option>
                                    <option {{ old('appointment_time') == '08:00 PM' ? 'selected' : '' }}>08:00 PM</option>

                                </select>
                                @error('appointment_time')<div class="invalid-feedback">{{ $message }}</div>@enderror

                            </div>


                            <!-- Message -->
                            <div class="col-12">

                                <label>
                                    Additional Message
                                </label>

                                <textarea name="message"
                                          rows="5"
                                          class="form-control luxeora-form-control"
                                          placeholder="Tell us anything we should know...">{{ old('message') }}</textarea>

                            </div>


                            <!-- Button -->
                            <div class="col-12">

                                <button type="submit"
                                        class="luxeora-appointment-btn">

                                    Confirm Appointment

                                    <i class="bi bi-arrow-right"></i>

                                </button>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>
<!-- Appointment End -->


<!-- Appointment Note -->
<div class="container-fluid luxeora-appointment-note">

    <div class="container text-center py-5">

        <i class="bi bi-stars"></i>

        <h3>
            A Little Time For Yourself.
        </h3>

        <p>
            We look forward to welcoming you at Luxeora Beauty Salon.
        </p>

    </div>

</div>

@endsection