@extends('layouts.default')

@section('content')
    @if (auth()->user()->hasRole('User'))
        <section>
            <div class="container">
                <div
                    class="scrollbar-custom-style w-full bg-[#15005D] dark:bg-gray-800 max-h-[40rem] px-10 py-10 rounded-lg shadow border border-slate-100 dark:border-gray-700 overflow-x-hidden">
                    <div class="flex justify-between ">
                        <h1 class="font-semibold text-2xl font-roboto pb-2">My Reservations</h1>
                    </div>
                    <hr class="border-1 border-slate-300 dark:border-gray-700">

                    <div id="cartContainer">
                        @forelse ($reservations as $reservation)
                            <div class="flex items-center rounded-md border-2 dark:border-gray-700 mx-1.5 my-5 px-6 py-5">

                                <div class="w-2/5 flex flex-row">
                                    <div class="">
                                        <img class="h-24 w-32 rounded-md"
                                            src="{{ asset('storage/events/' . $reservation->event->image) }}"
                                            alt="{{ $reservation->event->title }}">
                                    </div>

                                    <div class="flex flex-col justify-between gap-3 ml-4 ">
                                        <span class="block text-base font-bold">
                                            {{ $reservation->event->title }}</span>
                                        <span
                                            class="text-slate-50 w-full font-readex flex items-center font-semibold text-sm"><i
                                                class="fa-solid fa-location-dot text-tf mr-2"></i>{{ $reservation->event->location }}</span>
                                        <span
                                            class="text-sm font-semibold text-orange-500 font-readex">{{ \Carbon\Carbon::parse($reservation->event->date)->format('d F Y H:i') }}
                                        </span>
                                    </div>
                                </div>

                                <div class="flex justify-center w-2/5">
                                    <span
                                        class="inline-block px-2 py-1 rounded {{ $reservation->status === 'Confirmed' ? 'bg-green-500 text-slate-50' : ($reservation->status === 'Cancelled' ? 'bg-red-500 text-slate-50' : 'bg-amber-500 text-slate-50') }} text-xs font-medium me-2">
                                        {{ $reservation->status }}
                                    </span>
                                </div>

                                <div class="w-2/5 justify-center">
                                    @if ($reservation->status === 'Confirmed')
                                        <a href="{{ route('download.ticket', ['reservationId' => $reservation->id]) }}"
                                            class="inline-flex items-center text-slate-50 hover:text-slate-50 bg-orange-500 hover:bg-gradient-to-r from-orange-500 to-[#16005db7] w-fit px-3 py-2 rounded-full text-sm ml-4"><svg class="w-3 h-3 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z"/>
                                                <path d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
                                              </svg>Download</a>
                                    @else
                                        <button class="text-slate-50 bg-gray-300 px-3 py-2 rounded-full text-sm ml-4" disabled>Download</button>
                                    @endif
                                </div>

                                <div>
                                    <button
                                        class="inline-block p-3 text-slate-50 hover:text-rose-600 focus:relative delete-product-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        @empty
                            <div class="text-center font-bold text-xl text-slate-50 px-4 py-5">
                                <p>No reservations found.</p>
                            </div>
                        @endforelse

                    </div>

                    <a href="{{route('home')}}"
                        class="flex font-semibold text-slate-50 hover:text-slate-50 bg-orange-500 hover:bg-gradient-to-r from-orange-500 to-[#16005db7] w-fit px-3 py-2 rounded-full text-sm mt-10 ">

                        <svg class="fill-current mr-2 text-slate-50 w-4" viewBox="0 0 448 512">
                            <path
                                d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z" />
                        </svg>
                        back
                    </a>
                </div>
            </div>
        </section>
    @endif

    <section>
        <div class="container">
            <div class="py-12">
                <div class="grid grid-cols-3 gap-3">
                    <div class="p-4 sm:p-8 bg-white placeholder:text-slate-700 dark:bg-gray-800 shadow sm:rounded-lg">
                        <div class="max-w-xl">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>

                    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                        <div class="max-w-xl">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>

                    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                        <div class="max-w-xl">
                            @include('profile.partials.delete-user-form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
