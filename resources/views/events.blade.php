@extends('layouts.default')

@section('content')
    <!-- PageTitle -->
    <section class="tf-section action">
        <div class="container">
            <div class="p-0 col-md-12">
                <div data-aos="fade-up" data-aos-duration="1000"
                    class="bg-purple-800 relative pt-[52px] pb-[61px] px-[94px] rounded-[20px] before:content-[''] before:w-full before:h-full before:absolute before:top-0 before:left-0 before:bg-[url('../assets/images/background/bg-inner-page-02.html')] before:opacity-[0.63] before:rounded-[20px] before:mix-blend-screen before:bg-cover before:bg-no-repeat before:bg-[center_top] ">
                    <div class="relative pt-[12px]">
                        <h2
                            class="text-6xl font-bold pb-3 text-slate-50 before::content-[''] before:w-[36px] before:h-[5px] before:absolute before:bottom-0 before:left-0 before:bg-[#fd562a]">
                            Events
                        </h2>
                    </div>
                    <p class="mb-[33px] pt-3 text-[24px]">Sed ut perspiciatis unde omnis iste natus <br> error sit voluptatem
                        accusantium </p>
                    <img class="absolute hidden md:block lg:block bottom-0 right-[60px] w-96 h-80"
                        src="assets/images/star.png" alt="Monteno">
                </div>
            </div>
        </div>
    </section>
    <!-- end PageTitle -->

    <section>
        <div class="mt-16 mb-4">
            <div class="container">
                <div class="bg-purple-700 rounded-[20px] mb-[48px] px-[30px] pt-[25px] pb-[29px]">
                    <h6
                        class="relative pl-[10px] mb-[8px] before:content-[''] before:absolute before:left-0 before:top-[5px] before:w-[3px] before:h-[15px] before:bg-tf before:rounded-[1.5px]">
                        Search</h6>
                    <div class="w-full mx-auto">
                        <div class="flex">
                            <label for="search-dropdown"
                                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>
                            <button id="dropdown-button" data-dropdown-toggle="dropdown"
                                class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-somibold text-center text-gray-800 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 "
                                type="button">All categories <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                            <div id="dropdown"
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                                    @foreach ($categories as $category)
                                        <li>
                                            <a href=""
                                                class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ $category->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="relative w-full">
                                <input type="search" id="search-dropdown"
                                    class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-xl border-s-gray-50 border-s-2 border border-gray-300 focus:ring-orange-500 focus:border-orange-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-orange-500"
                                    placeholder="Search..." required />
                                <button type="submit"
                                    class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-orange-500 rounded-e-lg border border-orange-500 hover:bg-orange-500 focus:outline-none dark:bg-orange-600 dark:hover:bg-orange-700">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                    </svg>
                                    <span class="sr-only">Search</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Blog grid -->
    <section class="">
        <div class="pt-1 py-[11px] max-[499px]:pt-[60px]">
            <div class="container">
                <div class="grid grid-cols-1 gap-8 md:grid-cols-3 lg:grid-cols-3">
                    @foreach ($events as $index => $event)
                        <div
                            class="bg-purple-700 rounded-xl p-4 mb-28 max-w-sm shadow dark:bg-gray-800 dark:border-gray-700  group">
                            <div class="overflow-hidden rounded-lg">
                                <a href="blog-single.html" class="w-full">
                                    <img src="{{ asset('storage/events/' . $event->image) }}" alt="Monteno"
                                        class="group-hover:scale-110 rounded-lg w-full transition-all duration-500 ease-in-out h-[15rem]">
                                </a>
                            </div>
                            <div class="pt-4 pb-6">
                                <a href="blog-single.html" class="text-lg mt-2 leading-6">{{ $event->title }}</a>
                                <ul class="flex flex-col justify-start space-y-1 mt-3">
                                    <li><a class="block text-base" href="#"><i
                                                class="fa fa-user text-tf mr-2 "></i>{{ $event->user->name }}</a></li>
                                    <li><a href="" class="block text-base"><i
                                                class="fa-solid fa-location-dot text-tf mr-2"></i>{{ $event->location }}</a>
                                    </li>
                                    <li class="flex flex-row gap-3"><a href="" class="block text-base"><i
                                                class="fa-solid fa-calendar-days text-tf mr-2"></i>{{ \Carbon\Carbon::parse($event->date)->format('d F Y') }}</a><a
                                            href="" class="block text-base"><i
                                                class="fa-solid fa-clock text-tf mr-2"></i>{{ \Carbon\Carbon::parse($event->date)->format('h:i A') }}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="flex items-center justify-between relative">
                                <a
                                    class="font-somibold text-sm text-slate-50 dark:text-white before::content-[''] before:w-[36px] before:h-[3px] before:absolute before:bottom-0 before:left-0 before:bg-[#fd562a]">Read
                                    More</a>
                                <a href="#"
                                    class="text-white hover:text-orange-500 btn-action bg-orange-500 hover:bg-slate-50 hover:border-2 hover:border-orange-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-orange-500 dark:hover:bg-orange-600">Reserve</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-12">
                    <div class="load-more text-center mt-[31px]">
                        <a id="loadmore" class="btn-action !px-[39px] !py-[12px]" href="#">
                            Load More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end Blog grid -->

    <!-- Action -->
    <section class="tf-section action">
        <div class="pt-[149px] py-[122px] max-[499px]:py-[60px]">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div data-aos="fade-up" data-aos-duration="1000"
                            class="bg-purple-800 rounded-[20px] py-[61px] px-[72px] flex items-center justify-between">
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
