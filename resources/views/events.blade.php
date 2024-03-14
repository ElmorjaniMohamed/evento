@extends('layouts.default')

@include('components.alert-warning', ['message' => session('warning')])
@include('components.alert-danger', ['message' => session('danger')])
@include('components.alert-success', ['message' => session('success')])

@section('content')
    <!-- PageTitle -->
    <section class="tf-section action">
        <div class="container">
            <div class="p-0 col-md-12">
                <div data-aos="fade-up" data-aos-duration="1000"
                    class="bg-purple-800 dark:bg-gray-800 relative pt-[52px] pb-[61px] px-[94px] rounded-[20px] before:content-[''] before:w-full before:h-full before:absolute before:top-0 before:left-0 before:bg-[url('../assets/images/background/bg-inner-page-02.html')] before:opacity-[0.63] before:rounded-[20px] before:mix-blend-screen before:bg-cover before:bg-no-repeat before:bg-[center_top] ">
                    <div class="relative pt-[12px]">
                        <h2
                            class="text-6xl font-bold pb-3 text-slate-50 before::content-[''] before:w-[36px] before:h-[5px] before:absolute before:bottom-0 before:left-0 before:bg-[#fd562a]">
                            Events
                        </h2>
                    </div>
                    <p class="mb-[33px] pt-3 text-[24px]">Explore Exciting Events Near
                        You</p>
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
                <div class="bg-purple-700 dark:bg-gray-800 rounded-[20px] mb-[48px] px-[30px] pt-[25px] pb-[29px]">
                    <h6
                        class="relative pl-[10px] mb-[8px] before:content-[''] before:absolute before:left-0 before:top-[5px] before:w-[3px] before:h-[15px] before:bg-tf before:rounded-[1.5px]">
                        Search</h6>
                    <div class="w-full mx-auto">

                        <div class="flex">
                            <form class="max-w-sm mx-auto">
                                <select id="categories" name="category"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-l-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="all">All Categories</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </form>
                            <div class="relative w-full">
                                <input type="search" id="search_title"
                                    class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-xl border-s-gray-50 border-s-2 border border-gray-300 focus:ring-orange-500 focus:border-orange-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-orange-500"
                                    placeholder="Search..." required />
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
            <div class="container" id="events-container">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3" id="events">
                    @include('pagination')
                </div>
                <div class="">
                    <div class="text-slate-100 mt-2 ">
                        <div class="text-slate-100 mt-2 bg-none dark:bg-gray-800 rounded-[20px] px-[30px] py-2 ">
                            {!! $events->links() !!}
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- end Blog grid -->

    <!-- Action -->
    <section class="tf-section action">
        <div class="pt-[60px] py-[122px] max-[499px]:py-[60px]">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div data-aos="fade-up" data-aos-duration="1000"
                            class="bg-purple-700 dark:bg-gray-800 rounded-[20px] py-[61px] px-[72px] flex items-center justify-between">
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

    <script>
        $(document).ready(function() {
            $('#search_title').on('keyup', function() {
                fetchEvents(1);
            });

            $('#categories').on('change', function() {
                fetchEvents(1);
            });

            $(document).on('click', '.pagination a', function(e) {
                e.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                fetchEvents(page);
            });

            function fetchEvents(page) {
                var keyword = $('#search_title').val().trim();
                var category = $('#categories').val();
                if (category === 'all') {
                    category = '';
                }
                $.ajax({
                    url: '/search',
                    data: {
                        page: page,
                        keyword: keyword,
                        category: category
                    },
                    success: function(data) {
                        $('#events').html(data);
                    }
                });
            }
        });
    </script>
@endsection
