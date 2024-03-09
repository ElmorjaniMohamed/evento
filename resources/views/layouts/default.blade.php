<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themesflat.co/monteno-tw/home-03.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Mar 2024 21:45:59 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    {{-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="assets/font/font-awesome.css">
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite(['node_modules/flowbite/dist/flowbite.min.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body
    class="bg-[url('/public/assets/images/background/bg-element-3.jpg')] home-3 counter-scroll dark:bg-none dark:bg-gray-900">

    <!-- Preloading -->
    <div class="preloader">
        <div class="icon">
            <img src="assets/images/favicon.png" alt="">
        </div>
    </div>
    <!-- end Preloading -->

    <!-- Scroll Top -->
    <div class="progress-wrap bg-slate-100 active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;">
            </path>
        </svg>
    </div>
    <!-- end Scroll Top -->

    <!-- Header -->
    <header class="relative h-[90px] flex items-center justify-center header-fixed">
        <nav class="transition-colors duration-300 dark:bg-gray-900 bg-none  fixed w-full z-20 top-0 start-0 ">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="assets/images/logo.svg" class="h-8" alt="Logo">
                </a>
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <button id="theme-mode"
                        class=" mr-2 text-slate-50 dark:text-white bg-orange-500 shadow-lg rounded-full p-2 dark:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 block dark:hidden">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 hidden dark:block">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                        </svg>
                    </button>
                    @if (Route::has('login'))
                        @auth
                            <div class="flex items-center ms-3">
                                <div>
                                    <button type="button"
                                        class="flex text-sm bg-none dark:bg-slate-800 rounded-full border-[3px] border-orange-500 p-0.5 "
                                        aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                        <span class="sr-only">Open user menu</span>
                                        <img class="w-8 h-8 rounded-full"
                                            src="{{ asset('storage/avatars/' . Auth::user()->image) }}" alt="User Photo">
                                    </button>
                                </div>
                                <div class="z-50 hidden my-4 text-base list-none bg-orange-500 divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                                    id="dropdown-user">
                                    <div class="px-4 py-3" role="none">
                                        <p class="text-sm text-slate-100 dark:text-white" role="none">
                                            {{ Auth::user()->name }}
                                        </p>
                                        <p class="text-sm font-medium text-slate-100 truncate dark:text-gray-300"
                                            role="none">
                                            {{ Auth::user()->email }}
                                        </p>
                                    </div>
                                    <ul class="py-1" role="none">
                                        <li>
                                            <a href="{{ url('/dashboard') }}"
                                                class="block px-4 py-2 text-sm text-slate-50 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                                role="menuitem">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('profile.edit') }}"
                                                class="block px-4 py-2 text-sm text-slate-50 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                                role="menuitem">Profile</a>
                                        </li>
                                        <li>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <a href="route('logout')"
                                                    onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                                    class="block px-4 py-2 text-sm text-slate-50 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                                    role="menuitem">Sign out</a>
                                            </form>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @else
                            <a href="{{ route('register') }}" class="btn-action">Get started</a>
                        @endauth
                    @endif
                    <button data-collapse-toggle="navbar-sticky" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-100 rounded-lg md:hidden hover:bg-orange-500 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
                    id="navbar-sticky">
                    <ul
                        class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-none md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="{{ route('home') }}"
                                class="block py-2 px-3 rounded md:bg-transparent md:p-0 {{ request()->routeIs('home') ? 'text-orange-500' : '' }}"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-slate-50 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-orange-500 md:p-0 md:dark:hover:text-orange-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                        </li>
                        <li>
                            <a href="{{ route('events') }}"
                                class="block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-orange-500 md:p-0 md:dark:hover:text-orange-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 {{ request()->routeIs('events') ? 'text-orange-500' : '' }}">Events</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-slate-50 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-orange-500 md:p-0 md:dark:hover:text-orange-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- end Header -->

    <main>
        @yield('content')
    </main>


    <!-- Footer -->
    <footer class="footer style-2">
        <div class="container">
            <div class="row">
                <div
                    class="footer__body flex text-left flex-wrap pb-[120px] !px-[15px] border-b-[1px] border-solid border-b-[rgba(255,255,255,0.18)] ">
                    <div class="col-xl-3 col-md-6 col-12 p-0">
                        <div class="info">
                            <img src="assets/images/logo.png" alt="Monteno">
                            <p class="text-[18px] leading-[1.7] mt-[23px] mb-[16px]">
                                Duis aute irure dolor in reprehen derit in voluptate velit esse cillum dolore eu fugiat
                                pariatur.
                            </p>
                            <ul class="flex items-center mt-[30px] justify-start">
                                <li
                                    class="social-icons hover:bg-orange-500 !w-[54px] !h-[54px] min-w-[54px] !mr-[6px] ml-0">
                                    <a class="hover:text-[#fff]" href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li
                                    class="social-icons hover:bg-orange-500 !w-[54px] !h-[54px] min-w-[54px] !mx-[6px]">
                                    <a class="hover:text-[#fff]" href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li
                                    class="social-icons hover:bg-orange-500 !w-[54px] !h-[54px] min-w-[54px] !mx-[6px]">
                                    <a class="hover:text-[#fff]" href="#"><i
                                            class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li
                                    class="social-icons hover:bg-orange-500 !w-[54px] !h-[54px] min-w-[54px] !ml-[6px] mr-0">
                                    <a class="hover:text-[#fff]" href="#"><i class="fab fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-6 p-0">
                        <div class="link s1 pt-[12px] pl-[106px]">
                            <h5 class="mb-[8px]">Quick links</h5>
                            <ul class="mt-[21px]">
                                <li class="mb-[9px]">
                                    <a class="font-['Roboto']" href="collections.html">NFT Trading</a>
                                </li>
                                <li class="mb-[9px]">
                                    <a class="font-['Roboto']" href="about.html">Development</a>
                                </li>
                                <li class="mb-[9px]">
                                    <a class="font-['Roboto']" href="about.html">Advertisement</a>
                                </li>
                                <li class="mb-[9px]">
                                    <a class="font-['Roboto']" href="about.html">Career</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-6 p-0">
                        <div class="link s2 pt-[12px] pl-[85px]">
                            <h5 class="mb-[8px]">Help</h5>
                            <ul class="mt-[21px]">
                                <li class="mb-[9px]">
                                    <a class="font-['Roboto']" href="about.html">About Us</a>
                                </li>
                                <li class="mb-[9px]">
                                    <a class="font-['Roboto']" href="team.html">Team Members</a>
                                </li>
                                <li class="mb-[9px]">
                                    <a class="font-['Roboto']" href="faq.html">Support</a>
                                </li>
                                <li class="mb-[9px]">
                                    <a class="font-['Roboto']" href="about.html">Refund Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12 p-0">
                        <div class="newsletter pt-[12px] pl-[23px]">
                            <h5 class="mb-[8px]">Newsletter</h5>
                            <p class="text-[18px] leading-[1.7] mt-[18px] mb-[16px]">Duis aute irure dolor in reprehen
                                derit in voluptate velit.</p>
                            <form action="#">
                                <div class="form-group  flex mt-[24px] relative">
                                    <input type="email" id="exampleInputEmail1" placeholder="Your email here"
                                        required
                                        class="block rounded-full w-full font-[400] leading-[1.5] text-[#212529] bg-white appearance-none border-none h-[61px] p-[18px] focus:outline-none text-[18px] border-0  py-[17px] px-[24px]">
                                    <i class="fa fa-envelope absolute right-[19px] top-[33%] text-[22px] text-tf "></i>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div
                    class="footer_bottom flex items-center justify-center px-[13px] py-[35px] w-full flex-wrap md:justify-between md:!flex-nowrap">
                    <p class="text-[16px] md:mb-0 mb-[20px] text-center">Copyright © 2024, Evento</p>
                    <ul class="flex items-center justify-end pl-[20px] md:pl-[0]">
                        <li class="pl-[0px] md:pl-[38px]"><a href="#" class="font-['Roboto'] text-[16px]">Terms
                                &amp; Condition</a></li>
                        <li class="pl-[38px]"><a href="#" class="font-['Roboto'] text-[16px]">Privacy
                                Policy</a></li>
                        <li class="pl-[38px]"><a href="#" class="font-['Roboto'] text-[16px]">Cookie Policy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->



    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/swiper.js"></script>
    <script src="assets/js/countto.js"></script>
    <script src="assets/js/count-down.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        // Light/Dark Mode Toggle Button
        var themeColorToggle = document.getElementById('theme-mode');
        if (themeColorToggle) {
            themeColorToggle.addEventListener('click', function(e) {
                var html = document.documentElement;
                var currentTheme = html.classList.contains('light') ? 'light' : 'dark';
                var newTheme = currentTheme === 'light' ? 'dark' : 'light';
                html.classList.remove(currentTheme);
                html.classList.add(newTheme);
            });
        }
    </script>

    <script>
        window.addEventListener('scroll', function() {
            var navbar = document.querySelector('nav');
            if (window.scrollY > 0) {
                navbar.classList.add('bg-[#15005D]', 'shadow');
            } else {
                navbar.classList.remove('bg-[#15005D]', 'shadow');
            }
        });
    </script>

</body>

<!-- Mirrored from themesflat.co/monteno-tw/home-03.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Mar 2024 21:46:45 GMT -->

</html>
