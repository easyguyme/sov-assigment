
@extends('layouts.app')

@auth
    @include('layouts.navbars.auth.nav')
@endauth
@guest
    @include('layouts.navbars.guest.nav')
@endguest

@yield('content')

<footer class="footer py-4  bg-gradient-dark">
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


