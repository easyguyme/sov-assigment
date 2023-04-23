



    @extends('layouts.app')


    @auth
    @include('layouts.navbars.auth.nav')
    @endauth
    @guest
        @include('layouts.navbars.guest.nav')
    @endguest
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-85">
                <div class="position-absolute fixed-top ms-auto w-50 h-100 z-index-0 d-none d-sm-none d-md-block" style="background-image: url(../../assets/img/curved-images/curved8.jpg); background-size:cover;"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 d-flex justify-content-center flex-column">
                            <div class="card card-body blur d-flex justify-content-center shadow-lg p-5 mt-5">
                                <h1 class="text-gradient text-primary">Welcome to</h1>
                                <h1 class="mb-4">{{env('APP_NAME')}}</h1>
                                <p class="lead pe-5 me-5">The time is now for it be okay to be great.</p>
                                <div class="buttons">
                                    <a class="btn bg-gradient-primary mt-4" href="{{route('dashboard')}}"> Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>
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


