<!-- Offcanvas Area Start -->
<div class="fix-area">
    <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('assets/img/logo/my-burger-logo-dark.png') }}" alt="logo-img">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button>
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <p class="text d-none d-lg-block">
                    This involves interactions between a business and its customers. It's about meeting customers'
                    needs and resolving their problems. Effective customer service is crucial.
                </p>
                <div class="offcanvas-gallery-area d-none d-xl-block">
                    <div class="offcanvas-gallery-items">
                        <a href="{{ asset('assets/img/header/01.jpg') }}" class="offcanvas-image img-popup">
                            <img src="{{ asset('assets/img/header/01.jpg') }}" alt="gallery-img">
                        </a>
                        <a href="{{ asset('assets/img/header/02.jpg') }}" class="offcanvas-image img-popup">
                            <img src="{{ asset('assets/img/header/02.jpg') }}" alt="gallery-img">
                        </a>
                        <a href="{{ asset('assets/img/header/03.jpg') }}" class="offcanvas-image img-popup">
                            <img src="{{ asset('assets/img/header/03.jpg') }}" alt="gallery-img">
                        </a>
                    </div>
                    <div class="offcanvas-gallery-items">
                        <a href="{{ asset('assets/img/header/04.jpg') }}" class="offcanvas-image img-popup">
                            <img src="{{ asset('assets/img/header/04.jpg') }}" alt="gallery-img">
                        </a>
                        <a href="{{ asset('assets/img/header/05.jpg') }}" class="offcanvas-image img-popup">
                            <img src="{{ asset('assets/img/header/05.jpg') }}" alt="gallery-img">
                        </a>
                        <a href="{{ asset('assets/img/header/06.jpg') }}" class="offcanvas-image img-popup">
                            <img src="{{ asset('assets/img/header/06.jpg') }}" alt="gallery-img">
                        </a>
                    </div>
                </div>
                <div class="mobile-menu fix mb-3"></div>
                <div class="offcanvas__contact">
                    <h4>Contact Info</h4>
                    <ul>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="#">122/1B/1 Kandy road Thihariya, Kalagedihena, Sri Lanka,
                                    11875</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="tel:0332298911"><span
                                        class="mailto:myburgerfamilyrestaurant03@gmail.com">myburgerfamilyrestaurant03@gmail.com</span></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-clock"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="#">Mod-friday, 09am -05pm</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="far fa-phone"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="tel:+11002345909">0332 298 911 <br> +94 71 115 6323</a>
                            </div>
                        </li>
                    </ul>
                    <div class="header-button mt-4">
                        <a href="{{ route('shop') }}" class="theme-btn">
                            <span class="button-content-wrapper d-flex align-items-center justify-content-center">
                                <span class="button-icon"><i
                                        class="fa-sharp fa-regular fa-cart-shopping bg-transparent text-white me-2"></i></span>
                                <span class="button-text">ORDER NOW</span>
                            </span>
                        </a>
                    </div>
                    <div class="social-icon d-flex align-items-center">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas__overlay"></div>

<!-- Header Section Start -->
<header class="header-section">
    <div class="black-bg"></div>
    <div class="red-bg"></div>
    <div class="container-fluid">
        <div class="main-header-wrapper">
            <div class="logo-image">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/img/logo/my-burger-logo-new.jpg') }}" alt="img">
                </a>
            </div>
            <div class="main-header-items">
                <div class="header-top-wrapper">
                    <span><i class="fa-regular fa-clock"></i> 09:00 am - 06:00 pm</span>
                    <div class="social-icon d-flex align-items-center">
                        <span>Follow Us:</span>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                        <a href="#"><i class="fab fa-facebook-messenger"></i></a>
                    </div>
                </div>
                <div id="header-sticky" class="header-1">
                    <div class="mega-menu-wrapper">
                        <div class="header-main">
                            <div class="logo">
                                <a href="{{ route('home') }}" class="header-logo">
                                    <img src="{{ asset('assets/img/logo/my-burger-logo-new.jpg') }}" alt="logo-img">
                                </a>
                            </div>
                            <div class="header-left">
                                <div class="mean__menu-wrapper">
                                    <div class="main-menu">
                                        <nav id="mobile-menu">
                                            <ul>
                                                <li>
                                                    <a href="{{ route('home') }}">
                                                        Home
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('shop') }}">
                                                        Shop
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('blog') }}">
                                                        Blog
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('contact') }}">
                                                        Contact Us
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('profile') }}">
                                                        Profile
                                                    </a>
                                                </li>
                                                @auth
                                                <li>
                                                    <a href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('logout-form-mobile').submit();">
                                                        Logout
                                                    </a>
                                                    <form id="logout-form-mobile" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                </li>
                                                @else
                                                <li>
                                                    <a href="{{ route('login') }}">
                                                        Login
                                                    </a>
                                                </li>
                                                @endauth
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="header-right d-flex justify-content-end align-items-center">
                                <a href="#0" class="search-trigger search-icon"><i class="fal fa-search"></i></a>
                                
                                <!-- Profile Dropdown -->
                                <div class="header__cart">
                                    <a href="javascript:void(0)" class="search-icon"> <i class="far fa-user"></i> </a>
                                    <div class="header__right__dropdown__wrapper" style="width: 200px; padding: 15px; background: #1a1a1a !important; color: white !important;">
                                        <ul class="text-start mb-0" style="list-style: none; padding: 0; margin: 0;">
                                            <li class="mb-2">
                                                <a href="{{ route('profile') }}" class="theme-btn style3 w-100 justify-content-center d-flex align-items-center" style="color: white !important; font-size: 14px; padding: 10px;">
                                                    <i class="far fa-user me-2"></i> Profile
                                                </a>
                                            </li>
                                            @auth
                                            <li>
                                                <form action="{{ route('logout') }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="theme-btn w-100 justify-content-center" style="font-size: 14px; padding: 10px;">Logout</button>
                                                </form>
                                            </li>
                                            @else
                                            <li class="mb-2"><a href="{{ route('login') }}" class="theme-btn w-100 justify-content-center" style="font-size: 14px; padding: 10px;">Login</a></li>
                                            <li><a href="{{ route('signup') }}" class="theme-btn style3 w-100 justify-content-center" style="font-size: 14px; padding: 10px;">Sign Up</a></li>
                                            @endauth
                                        </ul>
                                    </div>
                                </div>

                                <div class="header__cart">
                                    <a href="{{ route('cart') }}"> <i class="fa-sharp fa-regular fa-cart-shopping"></i> </a>
                                    <div class="header__right__dropdown__wrapper">
                                        <div class="header__right__dropdown__inner">
                                            <div class="single__header__right__dropdown">

                                                <div class="header__right__dropdown__img">
                                                    <a href="#">
                                                        <img loading="lazy" src="{{ asset('assets/img/blog/blogRecentThumb3_1.png') }}"
                                                            alt="photo">
                                                    </a>
                                                </div>
                                                <div class="header__right__dropdown__content">

                                                    <a href="{{ route('shop') }}">Fried Chicken</a>
                                                    <p>1 x <span class="price">LKR 10 80.00</span></p>

                                                </div>
                                                <div class="header__right__dropdown__close">
                                                    <a href="#"><i class="icofont-close-line"></i></a>
                                                </div>
                                            </div>

                                            <div class="single__header__right__dropdown">

                                                <div class="header__right__dropdown__img">
                                                    <a href="#">
                                                        <img loading="lazy" src="{{ asset('assets/img/blog/blogRecentThumb3_2.png') }}"
                                                            alt="photo">
                                                    </a>
                                                </div>
                                                <div class="header__right__dropdown__content">

                                                    <a href="{{ route('shop') }}">Fried Noodles</a>
                                                    <p>1 x <span class="price">LKR 10 60.00</span></p>

                                                </div>
                                                <div class="header__right__dropdown__close">
                                                    <a href="#"><i class="icofont-close-line"></i></a>
                                                </div>
                                            </div>

                                            <div class="single__header__right__dropdown">

                                                <div class="header__right__dropdown__img">
                                                    <a href="#">
                                                        <img loading="lazy" src="{{ asset('assets/img/blog/blogRecentThumb3_3.png') }}"
                                                            alt="photo">
                                                    </a>
                                                </div>
                                                <div class="header__right__dropdown__content">

                                                    <a href="{{ route('shop') }}">Special Pasta</a>
                                                    <p>1 x <span class="price">LKR 10 70.00</span></p>

                                                </div>
                                                <div class="header__right__dropdown__close">
                                                    <a href="#"><i class="icofont-close-line"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <p class="dropdown__price">Total: <span>LKR 101,100.00</span>
                                        </p>
                                        <div class="header__right__dropdown__button">
                                            <a href="{{ route('cart') }}" class="theme-btn mb-2">View Cart</a>
                                            <a href="{{ route('checkout') }}" class="theme-btn style3">Checkout</a>
                                        </div>
                                    </div>
                                </div>

                                <a class="theme-btn" href="{{ route('menu') }}">ORDER NOW <i
                                        class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                <div class="header__hamburger d-xl-block my-auto">
                                    <div class="sidebar__toggle">
                                        <i class="fas fa-bars"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
