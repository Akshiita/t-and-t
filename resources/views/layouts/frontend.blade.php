<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!--=============== BOXICONS ===============-->
        <link
            href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
            rel="stylesheet"
        />

        <!--=============== SWIPER CSS ===============-->
        <link
            rel="stylesheet"
            href="{{ asset('frontend/assets/libraries/swiper-bundle.min.css') }}"
        />

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />
        @stack('style-alt')
        <title>Travel</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="{{ route('homepage') }}" class="nav__logo"
                    >Tra<i class="bx bxs-plane-alt"></i>el Trove</a
                >

                <div class="nav__menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="{{ route('homepage') }}" class="nav__link {{ request()->is('/') ? ' active-link' : '' }}">
                                <i class="bx bx-home-alt"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('travel_package.index') }}" class="nav__link {{ request()->is('travel-packages') || request()->is('travel-packages/*')  ? ' active-link' : '' }}">
                                <i class="bx bx-building-house"></i>
                                <span>Package Travel</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('blog.index') }}" class="nav__link {{ request()->is('blogs') || request()->is('blogs/*')  ? ' active-link' : '' }}">
                                <i class="bx bx-award"></i>
                                <span>Blog</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('gallery') }}" class="nav__link {{ request()->is('gallery') ? ' active-link' : '' }}">
                            
                                <span>Gallery</span>
                            </a>
                        </li>
                      
                        <li class="nav__item">
                            <a href="{{ route('contact') }}" class="nav__link {{ request()->is('contact') ? ' active-link' : '' }}">
                                <i class="bx bx-phone"></i>
                                <span>Contact</span>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <x-app-layout>

                            </x-app-layout>
                        </li> --}}
                    </ul>
                </div>

                <!-- theme -->
                {{-- <i class="bx bx-moon change-theme" id="theme-button"></i> --}}

                <a target="_blank" href="{{route('contact')}}"
                class="button nav__button" style="margin-left: 20px;">Book Now</a>
            </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            @yield('content')
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div>
                    <a href="{{ route('homepage') }}" class="footer__logo">
                        Tra<i class="bx bxs-plane-alt"></i>el Trove
                    </a>
                    <p class="footer__description">
                        Discover the World, One Journey at a Time.
                    </p>
                </div>

                <div class="footer__content">
                    <div>
                        <h3 class="footer__title">Home</h3>

                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">Join us</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Gallery </a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Newsletter</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="footer__title">Destinations</h3>

                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link"
                                    >International
                                </a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">National </a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Road Trips</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="footer__title">Subscribe</h3>

                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">Updates </a>
                            </li>
                            <li>
                                <a href="#" class="footer__link"
                                    >Reviews
                                </a>
                            </li>
                            <li>
                                <a href="#" class="footer__link"> Journey</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="footer__title">Follow us</h3>

                        <ul class="footer__social">
                            <a href="#" class="footer__social-link">
                                <i class="bx bxl-facebook-circle"></i>
                            </a>
                            <a href="#" class="footer__social-link">
                                <i class="bx bxl-instagram-alt"></i>
                            </a>
                            <a href="#" class="footer__social-link">
                                <i class="bx bxl-pinterest"></i>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>

         
        </footer>

        <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="bx bx-chevrons-up"></i>
        </a>

        <!--=============== SCROLLREVEAL ===============-->
        <script src="{{ asset('frontend/assets/libraries/scrollreveal.min.js') }}"></script>

        <!--=============== SWIPER JS ===============-->
        <script src="{{ asset('frontend/assets/libraries/swiper-bundle.min.js') }}"></script>

        <!--=============== MAIN JS ===============-->
        <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
        @stack('script-alt')
    </body>
</html>
