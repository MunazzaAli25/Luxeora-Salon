<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon Management System</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('Admin/assets/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('Admin/assets/vendors/iconly/bold.css') }}">

    <link rel="stylesheet" href="{{ asset('Admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('Admin/assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('Admin/assets/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('Admin/assets/images/favicon.svg') }}" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="{{ route('admin.dashboard') }}" class="fs-4 fw-bold text-primary">Salon Management</a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                    @auth
                        <div class="d-flex justify-content-between align-items-center mt-2">
                            <small class="text-muted">{{ auth()->user()->name }}</small>
                            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-box-arrow-right"></i> Logout
                                </button>
                            </form>
                        </div>
                    @endauth
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Main Navigation</li>

                        <li class="sidebar-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                            <a href="{{ route('admin.dashboard') }}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-title">Salon Operations</li>

                        <li class="sidebar-item {{ request()->routeIs('appointments.*') ? 'active' : '' }}">
                            <a href="{{ route('appointments.index') }}" class='sidebar-link'>
                                <i class="bi bi-calendar-check"></i>
                                <span>Appointments</span>
                            </a>
                        </li>

                        <li class="sidebar-item {{ request()->routeIs('clients.*') ? 'active' : '' }}">
                            <a href="{{ route('clients.index') }}" class='sidebar-link'>
                                <i class="bi bi-people-fill"></i>
                                <span>Clients</span>
                            </a>
                        </li>

                        <li class="sidebar-item {{ request()->routeIs('staff.*') ? 'active' : '' }}">
                            <a href="{{ route('staff.index') }}" class='sidebar-link'>
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Staff</span>
                            </a>
                        </li>

                        <li class="sidebar-item {{ request()->routeIs('services.*') ? 'active' : '' }}">
                            <a href="{{ route('services.index') }}" class='sidebar-link'>
                                <i class="bi bi-scissors"></i>
                                <span>Services</span>
                            </a>
                        </li>

                        <li class="sidebar-item {{ request()->routeIs('commissions.*') ? 'active' : '' }}">
                            <a href="{{ route('commissions.index') }}" class='sidebar-link'>
                                <i class="bi bi-cash-coin"></i>
                                <span>Commissions</span>
                            </a>
                        </li>

                        <li class="sidebar-title">Inventory & Supply</li>

                        <li class="sidebar-item {{ request()->routeIs('inventory.*') ? 'active' : '' }}">
                            <a href="{{ route('inventory.index') }}" class='sidebar-link'>
                                <i class="bi bi-box-seam"></i>
                                <span>Inventory Items</span>
                            </a>
                        </li>

                        <li class="sidebar-item {{ request()->routeIs('purchase-orders.*') ? 'active' : '' }}">
                            <a href="{{ route('purchase-orders.index') }}" class='sidebar-link'>
                                <i class="bi bi-cart-check-fill"></i>
                                <span>Purchase Orders</span>
                            </a>
                        </li>

                        <li class="sidebar-item {{ request()->routeIs('suppliers.*') ? 'active' : '' }}">
                            <a href="{{ route('suppliers.index') }}" class='sidebar-link'>
                                <i class="bi bi-truck"></i>
                                <span>Suppliers</span>
                            </a>
                        </li>

                        <li class="sidebar-title">Financials</li>

                        <li class="sidebar-item {{ request()->routeIs('transactions.*') ? 'active' : '' }}">
                            <a href="{{ route('transactions.index') }}" class='sidebar-link'>
                                <i class="bi bi-credit-card-fill"></i>
                                <span>Transactions</span>
                            </a>
                        </li>

                        <li class="sidebar-item {{ request()->routeIs('expenses.*') ? 'active' : '' }}">
                            <a href="{{ route('expenses.index') }}" class='sidebar-link'>
                                <i class="bi bi-wallet2"></i>
                                <span>Expenses</span>
                            </a>
                        </li>

                        <li class="sidebar-title">System</li>

                        <li class="sidebar-item {{ request()->routeIs('settings.*') ? 'active' : '' }}">
                            <a href="{{ route('settings.index') }}" class='sidebar-link'>
                                <i class="bi bi-gear-fill"></i>
                                <span>Settings</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            @yield('main')

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2026 &copy; Salon Management System</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ asset('Admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('Admin/assets/vendors/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('Admin/assets/js/pages/dashboard.js') }}"></script>

    <script src="{{ asset('Admin/assets/js/main.js') }}"></script>
</body>

</html>