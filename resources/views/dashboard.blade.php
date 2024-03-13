@extends('layouts.app')

@section('content')
    <!-- Start coding here -->
    <div class="bg-orange-500 p-4 dark:bg-gray-800 h-fit relative shadow-md sm:rounded-lg overflow-hidden">
        <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-4 gap-4">
            <div class="min-w-0 w-[14rem] rounded-lg shadow-xs overflow-hidden bg-[#1B035B] dark:bg-gray-900">
                <div class="p-4 flex items-center">
                    <div class="p-3 rounded-full text-slate-50 bg-orange-500 mr-4">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-5 h-5">
                            <path
                                d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-slate-50 dark:text-gray-400">
                            Total Users
                        </p>
                        <p class="text-lg font-bold text-orange-500 dark:text-gray-200">
                            {{ $totalUsers }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="min-w-0 w-[14rem] rounded-lg shadow-xs overflow-hidden bg-[#1B035B] dark:bg-gray-900">
                <div class="p-4 flex items-center">
                    <div class="p-3 rounded-full bg-green-500 mr-4">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path fill="#ffffff"
                                d="M480 32c0-12.9-7.8-24.6-19.8-29.6s-25.7-2.2-34.9 6.9L381.7 53c-48 48-113.1 75-181 75H192 160 64c-35.3 0-64 28.7-64 64v96c0 35.3 28.7 64 64 64l0 128c0 17.7 14.3 32 32 32h64c17.7 0 32-14.3 32-32V352l8.7 0c67.9 0 133 27 181 75l43.6 43.6c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6V300.4c18.6-8.8 32-32.5 32-60.4s-13.4-51.6-32-60.4V32zm-64 76.7V240 371.3C357.2 317.8 280.5 288 200.7 288H192V192h8.7c79.8 0 156.5-29.8 215.3-83.3z" />
                        </svg>
                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-slate-50 dark:text-gray-400">
                            Total Events
                        </p>
                        <p class="text-lg font-bold text-green-500 dark:text-gray-200">
                            {{ $totalEvents }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="min-w-0 w-[14rem] rounded-lg shadow-xs overflow-hidden bg-[#1B035B] dark:bg-gray-900">
                <div class="p-4 flex items-center">
                    <div class="p-3 rounded-full bg-blue-500 mr-4">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path fill="#ffffff"
                                d="M48 0C21.5 0 0 21.5 0 48V464c0 26.5 21.5 48 48 48h96V432c0-26.5 21.5-48 48-48s48 21.5 48 48v80h96c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48H48zM64 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zm112-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V240zM80 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-">
                        </svg>
                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-slate-50 dark:text-gray-400">
                            Total Reservations
                        </p>
                        <p class="text-lg font-semibold text-blue-500 dark:text-gray-200">
                            {{ $totalReservations }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="min-w-0 w-[14rem] rounded-lg shadow-xs overflow-hidden bg-[#1B035B] dark:bg-gray-900">
                <div class="p-4 flex items-center">
                    <div class="p-3 rounded-full bg-violet-500  mr-4">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path fill="#ffffff"
                                d="M41.4 9.4C53.9-3.1 74.1-3.1 86.6 9.4L168 90.7l53.1-53.1c28.1-28.1 73.7-28.1 101.8 0L474.3 189.1c28.1 28.1 28.1 73.7 0 101.8L283.9 481.4c-37.5 37.5-98.3 37.5-135.8 0L30.6 363.9c-37.5-37.5-37.5-98.3 0-135.8L122.7 136 41.4 54.6c-12.5-12.5-12.5-32.8 0-45.3zm176 221.3L168 181.3 75.9 273.4c-4.2 4.2-7 9.3-8.4 14.6H386.7l42.3-42.3c3.1-3.1 3.1-8.2 0-11.3L277.7 82.9c-3.1-3.1-8.2-3.1-11.3 0L213.3 136l49.4 49.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0zM512 512c-35.3 0-64-28.7-64-64c0-25.2 32.6-79.6 51.2-108.7c6-9.4 19.5-9.4 25.5 0C543.4 368.4 576 422.8 576 448c0 35.3-28.7 64-64 64z" />
                        </svg>
                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-slate-50 dark:text-gray-400">
                            Total Accepted Events
                        </p>
                        <p class="text-lg font-semibold text-violet-500 dark:text-gray-200">
                            {{ $totalAcceptedEvents }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class=" bg-orange-500 dark:bg-gray-800 h-fit relative shadow-md mt-4 sm:rounded-lg overflow-hidden">
        <div class="flex items-center justify-start py-2 ml-3">
            <div class="rounded-full bg-blue-500 p-1.5 mr-2"></div>
            <h2 class="text-md font-somibold  text-slate-100">Statistics Overview</h2>
        </div>
        <hr class="text-gray-600">
        <div class="flex flex-wrap justify-center items-center pt-5">
            <div class="w-full  p-4">
                <canvas id="doughnutChart" class="rounded-lg" width="400" height="400"></canvas>
            </div>
        </div>
    </div> --}}
@endsection
