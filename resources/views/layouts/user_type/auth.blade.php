@extends('layouts.app')

@section('auth')
    @if(\Request::is('static-sign-up'))
        @include('layouts.navbars.guest.nav')
        @yield('content')
        @include('layouts.footers.guest.footer')
    @elseif (\Request::is('static-sign-in'))
        @include('layouts.navbars.guest.nav')
        @yield('content')
        @include('layouts.footers.guest.footer')
    @else
        @if (\Request::is('profile'))
            @include('layouts.navbars.auth.sidebar')
            <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
                @include('layouts.navbars.auth.nav')
                @yield('content')
            </div>
        @elseif (\Request::is('sensor'))
            @if (Auth::check() && Auth::user()->role == 'user')
            @include('layouts.navbars.auth.sidebar')
                <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg overflow-hidden">
                    @include('layouts.navbars.auth.nav')
                    <div class="container-fluid py-4">
                        @yield('content')
                        @include('layouts.footers.auth.footer')
                    </div>
                </main>
            @else
            @include('layouts.navbars.admin.sidebar')
                <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg overflow-hidden">
                    @include('layouts.navbars.auth.nav')
                    <div class="container-fluid py-4">
                        @yield('content')
                        @include('layouts.footers.auth.footer')
                    </div>
                </main>
            @endif
        @elseif (\Request::is('kalkulator*'))
            @if (Auth::check() && Auth::user()->role == 'user')
            @include('layouts.navbars.auth.sidebar')
                <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg overflow-hidden">
                    @include('layouts.navbars.auth.nav')
                    <div class="container-fluid py-4">
                        @yield('content')
                        @include('layouts.footers.auth.footer')
                    </div>
                </main>
            @else
            @include('layouts.navbars.admin.sidebar')
                <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg overflow-hidden">
                    @include('layouts.navbars.auth.nav')
                    <div class="container-fluid py-4">
                        @yield('content')
                        @include('layouts.footers.auth.footer')
                    </div>
                </main>
            @endif
        @elseif (\Request::is('user-profile'))
            @if (Auth::check() && Auth::user()->role == 'user')
            @include('layouts.navbars.auth.sidebar')
                <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg overflow-hidden">
                    @include('layouts.navbars.auth.nav')
                    <div class="container-fluid py-4">
                        @yield('content')
                        @include('layouts.footers.auth.footer')
                    </div>
                </main>
            @else
            @include('layouts.navbars.admin.sidebar')
                <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg overflow-hidden">
                    @include('layouts.navbars.auth.nav')
                    <div class="container-fluid py-4">
                        @yield('content')
                        @include('layouts.footers.auth.footer')
                    </div>
                </main>
            @endif
        @elseif (\Request::is('sop*'))
            @if (Auth::check() && Auth::user()->role == 'user')
            @include('layouts.navbars.auth.sidebar')
                <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg overflow-hidden">
                    @include('layouts.navbars.auth.nav')
                    <div class="container-fluid py-4">
                        @yield('content')
                        @include('layouts.footers.auth.footer')
                    </div>
                </main>
            @else
            @include('layouts.navbars.admin.sidebar')
                <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg overflow-hidden">
                    @include('layouts.navbars.auth.nav')
                    <div class="container-fluid py-4">
                        @yield('content')
                        @include('layouts.footers.auth.footer')
                    </div>
                </main>
            @endif
        @elseif (\Request::is('detail*'))
            @if (Auth::check() && Auth::user()->role == 'user')
            @include('layouts.navbars.auth.sidebar')
                <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg overflow-hidden">
                    @include('layouts.navbars.auth.nav')
                    <div class="container-fluid py-4">
                        @yield('content')
                        @include('layouts.footers.auth.footer')
                    </div>
                </main>
            @else
            @include('layouts.navbars.admin.sidebar')
                <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg overflow-hidden">
                    @include('layouts.navbars.auth.nav')
                    <div class="container-fluid py-4">
                        @yield('content')
                        @include('layouts.footers.auth.footer')
                    </div>
                </main>
            @endif
        @elseif (\Request::is('kalkulators*'))
            @if (Auth::check() && Auth::user()->role == 'user')
            @include('layouts.navbars.auth.sidebar')
                <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg overflow-hidden">
                    @include('layouts.navbars.auth.nav')
                    <div class="container-fluid py-4">
                        @yield('content')
                        @include('layouts.footers.auth.footer')
                    </div>
                </main>
            @else
            @include('layouts.navbars.admin.sidebar')
                <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg overflow-hidden">
                    @include('layouts.navbars.auth.nav')
                    <div class="container-fluid py-4">
                        @yield('content')
                        @include('layouts.footers.auth.footer')
                    </div>
                </main>
            @endif
        @elseif (\Request::is('admin'))
            @include('layouts.navbars.admin.sidebar')
            <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg overflow-hidden">
                @include('layouts.navbars.auth.nav')
                <div class="container-fluid py-4">
                    @yield('content')
                    @include('layouts.footers.auth.footer')
                </div>
            </main>
        @elseif (\Request::is('persediaan'))
            @include('layouts.navbars.admin.sidebar')
            <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg overflow-hidden">
                @include('layouts.navbars.auth.nav')
                <div class="container-fluid py-4">
                    @yield('content')
                    @include('layouts.footers.auth.footer')
                </div>
            </main>
            @elseif (\Request::is('uploads*'))  
            @include('layouts.navbars.admin.sidebar')
            <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg overflow-hidden">
                @include('layouts.navbars.auth.nav')
                <div class="container-fluid py-4">
                    @yield('content')
                    @include('layouts.footers.auth.footer')
                </div>
            </main>
            @elseif (\Request::is('drones*'))  
            @include('layouts.navbars.admin.sidebar')
            <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg overflow-hidden">
                @include('layouts.navbars.auth.nav')
                <div class="container-fluid py-4">
                    @yield('content')
                    @include('layouts.footers.auth.footer')
                </div>
            </main>
            @elseif (\Request::is('user-management*'))
            @include('layouts.navbars.admin.sidebar')
            <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg overflow-hidden">
                @include('layouts.navbars.auth.nav')
                <div class="container-fluid py-4">
                    @yield('content')
                    @include('layouts.footers.auth.footer')
                </div>
            </main>
            @elseif (\Request::is('hasil-admin*'))
            @include('layouts.navbars.admin.sidebar')
            <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg overflow-hidden">
                @include('layouts.navbars.auth.nav')
                <div class="container-fluid py-4">
                    @yield('content')
                    @include('layouts.footers.auth.footer')
                </div>
            </main>
            @elseif (\Request::is('sensor-admin*'))
            @include('layouts.navbars.admin.sidebar')
            <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg overflow-hidden">
                @include('layouts.navbars.auth.nav')
                <div class="container-fluid py-4">
                    @yield('content')
                    @include('layouts.footers.auth.footer')
                </div>
            </main>
        @else
            @include('layouts.navbars.auth.sidebar')
            <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg overflow-hidden">
                @include('layouts.navbars.auth.nav')
                <div class="container-fluid py-4">
                    @yield('content')
                    @include('layouts.footers.auth.footer')
                </div>
            </main>
        @endif
    @endif
@endsection
