<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title', 'Booking Website')</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="{{ asset('style/main.css') }}" rel="stylesheet" />
</head>

<body>
    <main>
        <div class="page-dashboard">
            <div class="d-flex" id="wrapper" data-aos="fade-right">
                <!-- Sidebar -->
                <div class="border-right" id="sidebar-wrapper">
                    <div class="sidebar-heading text-center">
                        <img src="/images/dashboard-store-logo.svg" alt="" class="my-4" />
                    </div>
                    <div class="list-group list-group-flush">
                        <a href="{{ route('dashboard') }}"
                            class="list-group-item list-group-item-action {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                            Dashboard
                        </a>
                        <a href="{{ route('products.index') }}"
                            class="list-group-item list-group-item-action {{ request()->routeIs('products.*') ? 'active' : '' }}">
                            My Products
                        </a>
                        <a href="/dashboard-transactions.html"
                            class="list-group-item list-group-item-action {{ request()->is('dashboard-transactions') ? 'active' : '' }}">
                            Transactions
                        </a>
                        <a href="/dashboard-settings.html"
                            class="list-group-item list-group-item-action {{ request()->is('dashboard-settings') ? 'active' : '' }}">
                            Store Settings
                        </a>
                        <a href="/dashboard-account.html"
                            class="list-group-item list-group-item-action {{ request()->is('dashboard-account') ? 'active' : '' }}">
                            My Account
                        </a>
                    </div>

                </div>
                <!-- /#sidebar-wrapper -->

                <!-- Page Content -->
                @yield('content')
                <!-- /#page-content-wrapper -->
            </div>
        </div>
    </main>

    <footer>
        @include('layouts.partials.footer')
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="{{ asset('script/navbar-scroll.js') }}"></script>
</body>

</html>
