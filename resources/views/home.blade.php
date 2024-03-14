@extends('layouts.default')

@section('content')
    <!-- Hero Slider -->
    <section class="tf-section hero-slider">
        <div class="py-10 max-[499px]:pb-[20px] relative">
            <div class="container">
                <div class="flex items-center justify-between flex-wrap ">
                    <div class="">
                        <div class="relative pt-[24px] text-start">
                            <h6 data-aos="fade-up" data-aos-duration="1000"
                                class="relative leading-[3.2] mb-[6px] after:absolute after:content-[''] after:bottom-0 after:w-[36px] after:h-[5px] after:bg-tf after:left-0 after:mx-auto after:text-center ">
                                Discover Your Next Adventure</h6>
                            <h2 data-aos="fade-up" data-aos-duration="1000" class="mb-[26px]">Explore Exciting Events Near
                                You</h2>
                            <p data-aos="fade-up" data-aos-duration="1000" class="text-[24px] mb-[43px]">Unlock a World of
                                Possibilities with Our Platform</p>
                            <a data-aos="fade-up" data-aos-duration="1000" href="about.html" class="btn-action style-2">Get
                                Connected</a>
                        </div>
                    </div>
                    <div class="">
                        <div data-aos="zoom-in" data-aos-duration="2000" class="">
                            <img data-aos="zoom-in" data-aos-duration="2000" class="w-[30rem] h-[27rem]"
                                src="{{ asset('assets/images/star.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end Hero Slider -->

     <!-- Team -->
     <section class="tf-section team">
        <div class="pt-[139px] pb-[128px] max-[499px]:py-[40px]">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="relative text-center">
                            <h1
                                class="absolute left-[27px] right-0 top-[-40px] mx-auto text-center text-[240px] tracking-[24px] uppercase -z-10">
                                <span class="heading-bg">Events</span>
                            </h1>
                            <h5 data-aos="fade-up" data-aos-duration="1000"
                                class="relative leading-[3.2] mb-[10px] after:absolute after:content-[''] after:bottom-0 after:w-[36px] after:h-[5px] after:bg-tf after:left-0 after:right-0 after:mx-auto after:text-center ">
                                Top Events</h5>
                            <h3 data-aos="fade-up" data-aos-duration="1000" class="mb-[28px]">Our Amazing Events</h3>
                        </div>
                    </div>
                </div>
                <div class="row mt-[53px]">
                    <div class="col-md-12">
                        <div data-aos="fade-up" data-aos-duration="1000" class="swiper swiper-team">
                            <div class="swiper-wrapper flex">
                                @foreach ($events as $index => $event)
                                    <div class="swiper-slide pt-[51px]">
                                        <div
                                            class="bg-[#4526b1] dark:bg-gray-800 rounded-[10px] py-[20px] px-[25px] text-center cursor-pointer mb-[112px] group">
                                            <div class="mt-[-71px] relative overflow-hidden">
                                                <img src="{{ asset('storage/events/' . $event->image) }}" alt="Monteno"
                                                    class="w-full h-40 rounded-[10px]">
                                            </div>
                                            <div class="pt-[30px]">
                                                <ul class="flex flex-col justify-start space-y-2 mt-3">
                                                    <li class=" pb-2"><a href="{{route('events.overview', $event->id)}}" class="block text-base bg-orange-500 py-1 rounded-full text-slate-50 hover:text-slate-50 ">{{ \Carbon\Carbon::parse($event->date)->format('d F Y') }}</a><a
                                                        href="{{route('events.overview', $event->id)}}" class="block text-base mt-2"><i
                                                                class="fa-solid fa-clock text-tf mr-2"></i>{{ \Carbon\Carbon::parse($event->date)->format('h:i A') }}</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="flex items-center justify-center relative">
                                                <a href="{{route('events.overview', $event->id)}}"
                                                    class="font-somibold text-sm pb-1 text-slate-50 dark:text-white relative before:block before:content-[''] before:w-[36px] before:h-[3px] before:bg-[#fd562a]">Read
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end Team -->

    <!-- About Us -->
    <section class="tf-section section-about">
        <div class="py-[170px] max-[1024px]:py-0 max-[499px]:py-[40px]">
            <div class="px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2">
                    <div class="">
                        <div
                            class="flex items-center max-[1024px]:pt-[50px] max-[767px]:flex-wrap max-[767px]:justify-around max-[1179px]:justify-center">
                            <div class="md:!mr-[30px] mr-0 max-[768px]:mb-[30px] max-[500px]:w-full">
                                <div class="rounded-[20px] flex items-end justify-center bg-none max-[500px]:w-full">
                                    <img class="animate-[move_3s_infinite_linear] rounded-full w-[32rem] h-[32rem]"
                                        src="assets/images/about01.jpg" alt="Monteno">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="relative pt-[20px]">
                            <h5 class="leading-[3.2] relative mb-[10px]
                                before::content-[''] before:w-[36px] before:h-[5px] before:absolute before:bottom-0 before:left-0 before:bg-[#fd562a]"
                                data-aos="fade-up" data-aos-duration="1000">
                                About Us
                            </h5>
                            <h3 class="mb-[58px]" data-aos="fade-up" data-aos-duration="1000">Hight Quality NFT Collections
                            </h3>
                            <p class="text-[21px] mb-[33px]" data-aos="fade-up" data-aos-duration="1000">Sed ut perspiciatis
                                unde omnis iste natus enim ad minim veniam, quis nostrud exercit </p>
                            <p class="text-[18px] leading-[1.7] mb-[41px]" data-aos="fade-up" data-aos-duration="1000">Duis
                                aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur. Excepteur sint occae cat cupidatat non proident, sunt in culpa qui officia dese
                                runt mollit anim id est laborum velit esse cillum dolore eu fugiat nulla pariatu epteur sint
                                occaecat</p>
                            <a href="about.html" class="btn-action style-2" data-aos="fade-up" data-aos-duration="1000">More
                                About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end About Us -->

    <!-- Partners -->
    <section class="tf-section partners">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="relative text-center">
                        <h1
                            class="absolute left-[27px] right-0 top-[-40px] mx-auto text-center text-[240px] tracking-[24px] uppercase -z-10">
                            <span class="heading-bg">Team</span>
                        </h1>
                        <h5 data-aos="fade-up" data-aos-duration="1000"
                            class="relative leading-[3.2] mb-[10px] after:absolute after:content-[''] after:bottom-0 after:w-[36px] after:h-[5px] after:bg-tf after:left-0 after:right-0 after:mx-auto after:text-center ">
                            Partners</h5>
                        <h3 data-aos="fade-up" data-aos-duration="1000" class="mb-[28px]">We Are Partnered <br> with Top
                            Brands</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div data-aos="fade-up" data-aos-duration="1000"
                        class="flex items-center justify-center flex-wrap border-[rgba(255,255,255,0.18)] border-[1px] rounded-[10px] mt-[61px]">
                        <div
                            class="group flex items-center justify-center w-[25%] h-[176px] border-[rgba(255,255,255,0.18)] border-r-[1px] border-b-[1px]">
                            <a href="#"><img class="opacity-50 duration-[0.3s] group-hover:opacity-100"
                                    src="assets/images/partners/logo-01.png" alt="Monteno"></a>
                        </div>
                        <div
                            class="group flex items-center justify-center w-[25%] h-[176px] border-[rgba(255,255,255,0.18)] border-r-[1px] border-b-[1px]">
                            <a href="#"><img class="opacity-50 duration-[0.3s] group-hover:opacity-100"
                                    src="assets/images/partners/logo-02.png" alt="Monteno"></a>
                        </div>
                        <div
                            class="group flex items-center justify-center w-[25%] h-[176px] border-[rgba(255,255,255,0.18)] border-r-[1px] border-b-[1px]">
                            <a href="#"><img class="opacity-50 duration-[0.3s] group-hover:opacity-100"
                                    src="assets/images/partners/logo-03.png" alt="Monteno"></a>
                        </div>
                        <div
                            class="group flex items-center justify-center w-[25%] h-[176px] border-[rgba(255,255,255,0.18)] border-b-[1px]">
                            <a href="#"><img class="opacity-50 duration-[0.3s] group-hover:opacity-100"
                                    src="assets/images/partners/logo-04.png" alt="Monteno"></a>
                        </div>
                        <div
                            class="group flex items-center justify-center w-[25%] h-[176px] border-[rgba(255,255,255,0.18)] border-r-[1px]">
                            <a href="#"><img class="opacity-50 duration-[0.3s] group-hover:opacity-100"
                                    src="assets/images/partners/logo-05.png" alt="Monteno"></a>
                        </div>
                        <div
                            class="group flex items-center justify-center w-[25%] h-[176px] border-[rgba(255,255,255,0.18)] border-r-[1px]">
                            <a href="#"><img class="opacity-50 duration-[0.3s] group-hover:opacity-100"
                                    src="assets/images/partners/logo-06.png" alt="Monteno"></a>
                        </div>
                        <div
                            class="group flex items-center justify-center w-[25%] h-[176px] border-[rgba(255,255,255,0.18)] border-r-[1px]">
                            <a href="#"><img class="opacity-50 duration-[0.3s] group-hover:opacity-100"
                                    src="assets/images/partners/logo-07.png" alt="Monteno"></a>
                        </div>
                        <div
                            class="group flex items-center justify-center w-[25%] h-[176px] border-[rgba(255,255,255,0.18)]">
                            <a href="#"><img class="opacity-50 duration-[0.3s] group-hover:opacity-100"
                                    src="assets/images/partners/logo-08.png" alt="Monteno"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end Partners -->

    <!-- Testimonial -->
    <section class="tf-section testimonials">
        <div class="p-[137px_0_142px] max-[499px]:py-[40px]">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="swiper swiper-testimonials">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="flex items-start justify-center">
                                        <div data-aos="fade-right" data-aos-duration="1000"
                                            class="pr-[100px] pt-[31px] min-w-[600px]">
                                            <img class="rounded-[50%] w-[40rem]"
                                                src="{{ asset('assets/images/client02.jpg') }}" alt="Monteno">
                                        </div>
                                        <div class="relative">
                                            <h5
                                                class="leading-[3.2] relative mb-[10px]
                                            before::content-[''] before:w-[36px] before:h-[5px] before:absolute before:bottom-0 before:left-0 before:bg-[#fd562a] ">
                                                Testimonial
                                            </h5>
                                            <h3 class="mb-[8px]">What People Say </h3>
                                            <div class="flex items-start justify-center mt-[38px] pl-[7px]">
                                                <img src="assets/images/icon/left-quote.png" alt="Monteno">
                                                <div data-aos="fade-up" data-aos-duration="1000"
                                                    class="pt-[22px] pl-[24px]">
                                                    <p
                                                        class="text-[21px] italic leading-[1.6] tracking-[-0.2px] mb-[34px]">
                                                        Keniam, quis nostrud exerci ut aliquip ex ea com modo consequat.
                                                        Duis aute irure dolor in reprehen derit in voluptate velit esse
                                                        cillum dolore eu fugiat nulla parinon proident, sunt in culpa</p>
                                                    <div class="flex items-center justify-start">
                                                        <img class="w-14 h-14 rounded-full"
                                                            src="{{ asset('assets/images/client02.jpg') }}"
                                                            alt="Monteno">
                                                        <div class="flex flex-col justify-start pl-4">
                                                            <h6 class="text-orange-500">Yassir EL KHAILI</h6>
                                                            <p class="text-[16px] mb-[-5px]">Dev & Web</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="flex items-start justify-center">
                                        <div class="pr-[100px] pt-[31px] min-w-[600px]">
                                            <img class="rounded-[50%] w-[40rem]"
                                                src="{{ asset('assets/images/client05.jpg') }}" alt="Monteno">
                                        </div>
                                        <div class="relative">
                                            <h5
                                                class="leading-[3.2] relative mb-[10px]
                                            before::content-[''] before:w-[36px] before:h-[5px] before:absolute before:bottom-0 before:left-0 before:bg-[#fd562a] ">
                                                Testimonial
                                            </h5>
                                            <h3 class="mb-[8px]">What People Say </h3>
                                            <div class="flex items-start justify-center mt-[38px] pl-[7px]">
                                                <img src="assets/images/icon/left-quote.png" alt="Monteno">
                                                <div class="pt-[22px] pl-[24px]">
                                                    <p
                                                        class="text-[21px] italic leading-[1.6] tracking-[-0.2px] mb-[34px]">
                                                        Keniam, quis nostrud exerci ut aliquip ex ea com modo consequat.
                                                        Duis aute irure dolor in reprehen derit in voluptate velit esse
                                                        cillum dolore eu fugiat nulla parinon proident, sunt in culpa</p>
                                                    <div class="flex items-center justify-start">
                                                        <img class="w-14 h-14 rounded-full"
                                                            src="{{ asset('assets/images/client05.jpg') }}"
                                                            alt="Monteno">
                                                        <div class="flex flex-col justify-start pl-4">
                                                            <h6 class="text-orange-500">Abdelghani Ait Tamghart</h6>
                                                            <p class="text-[16px] mb-[-5px]">Dev & Web</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="flex items-start justify-center">
                                        <div class="pr-[100px] pt-[31px] min-w-[600px]">
                                            <img class="rounded-[50%] w-[40rem]"
                                                src="{{ asset('assets/images/client04.jpg') }}" alt="Monteno">
                                        </div>
                                        <div class="relative">
                                            <h5
                                                class="leading-[3.2] relative mb-[10px]
                                            before::content-[''] before:w-[36px] before:h-[5px] before:absolute before:bottom-0 before:left-0 before:bg-[#fd562a] ">
                                                Testimonial
                                            </h5>
                                            <h3 class="mb-[8px]">What People Say </h3>
                                            <div class="flex items-start justify-center mt-[38px] pl-[7px]">
                                                <img src="assets/images/icon/left-quote.png" alt="Monteno">
                                                <div class="pt-[22px] pl-[24px]">
                                                    <p
                                                        class="text-[21px] italic leading-[1.6] tracking-[-0.2px] mb-[34px]">
                                                        Keniam, quis nostrud exerci ut aliquip ex ea com modo consequat.
                                                        Duis aute irure dolor in reprehen derit in voluptate velit esse
                                                        cillum dolore eu fugiat nulla parinon proident, sunt in culpa</p>
                                                    <div class="flex items-center justify-start">
                                                        <img class="w-14 h-14 rounded-full"
                                                            src="{{ asset('assets/images/client04.jpg') }}"
                                                            alt="Monteno">
                                                        <div class="flex flex-col justify-start pl-4">
                                                            <h6 class="text-orange-500">Mohamed TERQUI</h6>
                                                            <p class="text-[16px] mb-[-5px]">Dev & Web</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end Testimonial -->

    <!-- FAQ -->
    <section class="tf-section faq mb-24">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="relative text-center">
                        <h1
                            class="absolute left-[27px] right-0 top-[-40px] mx-auto text-center text-[240px] tracking-[24px] uppercase -z-10">
                            <span class="heading-bg">FAQ</span>
                        </h1>
                        <h5 data-aos="fade-up" data-aos-duration="1000"
                            class="relative leading-[3.2] mb-[10px] after:absolute after:content-[''] after:bottom-0 after:w-[36px] after:h-[5px] after:bg-tf after:left-0 after:right-0 after:mx-auto after:text-center ">
                            FAQ</h5>
                        <h3 data-aos="fade-up" data-aos-duration="1000" class="mb-[28px]">Frequently Aksed <br> Questions
                        </h3>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 ">
                    <div data-aos="fade-up" data-aos-duration="1000" class="flat-accordion mt-[49px]">
                        <div class="flat-toggle">
                            <h5
                                class="toggle-title relative pl-[49px] mb-[19px] before:font-['Font_Awesome_5_Pro'] before:content-['\f067'] before:absolute before:left-[20px] before:top-[4px] before:text-[20px] before:font-[500]">
                                How can I sign up on the platform?</h5>
                            <div class="toggle-content pl-[49px] pb-[29px] hidden">
                                <p class="text-[18px] leading-[1.7] mb-[16px]">Answer: To sign up, click on the "Sign up"
                                    link at the top of the home page. You will then be prompted to provide your name, email
                                    address, and a password to create your account.</p>
                            </div>
                        </div>
                        <div class="flat-toggle">
                            <h5
                                class="toggle-title relative pl-[49px] mb-[19px] before:font-['Font_Awesome_5_Pro'] before:content-['\f067'] before:absolute before:left-[20px] before:top-[4px] before:text-[20px] before:font-[500]">
                                What should I do if I forget my password?</h5>
                            <div class="toggle-content pl-[49px] pb-[29px] hidden">
                                <p class="text-[18px] leading-[1.7] mb-[16px]">Answer: If you forget your password, click
                                    on the "Forgot password" link on the login page. You will then receive an email with
                                    instructions on how to reset your password.</p>
                            </div>
                        </div>
                        <div class="flat-toggle">
                            <h5
                                class="toggle-title relative pl-[49px] mb-[19px] before:font-['Font_Awesome_5_Pro'] before:content-['\f067'] before:absolute before:left-[20px] before:top-[4px] before:text-[20px] before:font-[500]">
                                How can I find relevant events for me?</h5>
                            <div class="toggle-content pl-[49px] pb-[29px] hidden">
                                <p class="text-[18px] leading-[1.7] mb-[16px]">Answer: Use the category filters or the
                                    search bar on the main page to find events that match your interests.</p>
                            </div>
                        </div>
                        <div class="flat-toggle">
                            <h5
                                class="toggle-title relative pl-[49px] mb-[19px] before:font-['Font_Awesome_5_Pro'] before:content-['\f067'] before:absolute before:left-[20px] before:top-[4px] before:text-[20px] before:font-[500]">
                                How do I reserve a spot for an event?</h5>
                            <div class="toggle-content pl-[49px] pb-[29px] hidden">
                                <p class="text-[18px] leading-[1.7] mb-[16px]">Answer: Once you have found an event you are
                                    interested in, click on the reservation button and follow the instructions to finalize
                                    your booking.</p>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="1000">
                        <div class="flat-accordion mt-[49px]">
                            <div class="flat-toggle">
                                <h5
                                    class="toggle-title relative pl-[49px] mb-[19px] before:font-['Font_Awesome_5_Pro'] before:content-['\f067'] before:absolute before:left-[20px] before:top-[4px] before:text-[20px] before:font-[500]">
                                    How can I create a new event as an organizer?</h5>
                                <div class="toggle-content pl-[49px] pb-[29px] hidden">
                                    <p class="text-[18px] leading-[1.7] mb-[16px]">Answer: Log in to your organizer
                                        account, then go to the event management section where you will find the option to
                                        create a new event by providing the required details.</p>
                                </div>
                            </div>
                            <div class="flat-toggle">
                                <h5
                                    class="toggle-title relative pl-[49px] mb-[19px] before:font-['Font_Awesome_5_Pro'] before:content-['\f067'] before:absolute before:left-[20px] before:top-[4px] before:text-[20px] before:font-[500]">
                                    What is the difference between automatic and manual?</h5>
                                <div class="toggle-content pl-[49px] pb-[29px] hidden">
                                    <p class="text-[18px] leading-[1.7] mb-[16px]">Answer: With automatic acceptance,
                                        reservations are confirmed immediately, whereas with manual validation, the
                                        organizer must approve each reservation before it is confirmed.</p>
                                </div>
                            </div>
                            <div class="flat-toggle">
                                <h5
                                    class="toggle-title relative pl-[49px] mb-[19px] before:font-['Font_Awesome_5_Pro'] before:content-['\f067'] before:absolute before:left-[20px] before:top-[4px] before:text-[20px] before:font-[500]">
                                    Can I cancel my reservation for an event?</h5>
                                <div class="toggle-content pl-[49px] pb-[29px] hidden">
                                    <p class="text-[18px] leading-[1.7] mb-[16px]">Answer: Yes, you can cancel your
                                        reservation by logging into your account and selecting the relevant event. You will
                                        find the cancellation option from there.</p>
                                </div>
                            </div>
                            <div class="flat-toggle">
                                <h5
                                    class="toggle-title relative pl-[49px] mb-[19px] before:font-['Font_Awesome_5_Pro'] before:content-['\f067'] before:absolute before:left-[20px] before:top-[4px] before:text-[20px] before:font-[500]">
                                    How can I contact the administrator in case of an issue?</h5>
                                <div class="toggle-content pl-[49px] pb-[29px] hidden">
                                    <p class="text-[18px] leading-[1.7] mb-[16px]">Answer: If you have any questions or
                                        issues, you can contact us using the contact form available on the home page. We
                                        will do our best to assist you as soon as possible.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end FAQ -->

     <!-- Action -->
     <section class="tf-section action">
        <div class="pt-[60px] py-[122px] max-[499px]:py-[60px]">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div data-aos="fade-up" data-aos-duration="1000"
                            class="bg-purple-800 dark:bg-gray-800 rounded-[20px] py-[61px] px-[72px] flex items-center justify-between">
                            <div class="relative">
                                <h3 class="mb-[13px]">Reserve your ticket now</h3>
                                <p class="text-[21px] mb-[7px]">Get udpated with news, tips &amp; tricks</p>
                            </div>
                            <a href="contact.html" class="!py-[18px] !px-[60px] text-[20px] btn-action style-2">Join
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end Action -->

@endsection
