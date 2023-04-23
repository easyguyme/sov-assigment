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
        @if (\Request::is('rtl'))
            @include('layouts.navbars.auth.sidebar-rtl')
            <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg overflow-hidden">
                @include('layouts.navbars.auth.nav-rtl')
                <div class="container-fluid py-4">
                    @yield('content')
                    @include('layouts.footers.auth.footer')
                </div>
            </main>

        @elseif (\Request::is('/'))

            <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
                @include('layouts.navbars.auth.nav')
                @yield('content')
                <footer class="footer py-4 my-11 bg-gradient-dark">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-3 text-start my-auto">
                                <p class="mb-0 text-white text-sm">
                                    Copyright © <script>document.write(new Date().getFullYear())</script> Mitchsofts.
                                </p>
                            </div>
                            <div class="col-lg-5 col-md-8 ms-auto text-end">
                                <ul class="nav flex-row ms-n3 align-items-center mt-4 mt-sm-0">
                                    <li class="nav-item">
                                        <a class="nav-link text-white opacity-8" href="#" target="_blank">
                                            Home
                                        </a>
                                    </li>


                                    <li class="nav-item ms-auto">
                                        <button type="button" class="btn bg-gradient-info mb-0 ms-3 ms-sm-0 mt-3 mt-sm-0">Get in Touch</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>

        @elseif (\Request::is('virtual-reality'))
            @include('layouts.navbars.auth.nav')
            <div class="border-radius-xl mt-3 mx-3 position-relative" style="background-image: url('../assets/img/vr-bg.jpg') ; background-size: cover;">
                @include('layouts.navbars.auth.sidebar')
                <main class="main-content mt-1 border-radius-lg">
                    @yield('content')
                </main>
            </div>
            @include('layouts.footers.auth.footer')

        @else
            @include('layouts.navbars.auth.sidebar')
            <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg {{ (Request::is('rtl') ? 'overflow-hidden' : '') }}">
                @include('layouts.navbars.auth.nav')
                <div class="container-fluid py-4">
                    @yield('content')
                    @include('layouts.footers.auth.footer')
                </div>
            </main>
        @endif

        @include('components.fixed-plugin')
    @endif



@endsection
