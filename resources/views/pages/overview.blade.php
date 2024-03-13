@extends('layouts.default')
@include('components.alert-warning', ['message' => session('warning')])
@include('components.alert-danger', ['message' => session('danger')])
@include('components.alert-success', ['message' => session('success')])
@section('content')
    <section class="blog-single">
        <div class="container">
            <div class="row">
                <div>
                    <div class="mb-[70px] px-3">
                        <img src="{{ asset('storage/events/' . $event->image) }}" alt="Monteno" class="rounded-[20px] w-full">
                    </div>
                </div>
            </div>
            <div class="">
                <div class="">
                        <div
                            class="bg-[#4526b1] rounded-[20px] mb-[70px] py-[43px] px-10 max-[767px]:px-[20px]">
                            <ul class="flex items-center justify-start">
                                <li class="max-[767px]:pl-[14px]"><a href="#"
                                        class="text-[18px] max-[767px]:text-[12px]"><i
                                            class="text-tf mr-[10px] fa fa-user"></i>{{ $event->user->name }}</a></li>
                                <li class="pl-[24px] max-[767px]:pl-[14px]"><a href="#"
                                        class="text-[18px] max-[767px]:text-[12px]"><i
                                            class="fa-solid fa-location-dot text-tf mr-[10px]"></i>{{ $event->location }}</a>
                                </li>
                                <li class="pl-[24px] max-[767px]:pl-[14px]"><a href="#"
                                        class="text-[18px] max-[767px]:text-[12px]"><i
                                            class="fa-solid fa-calendar-days text-tf mr-[10px]"></i>{{ \Carbon\Carbon::parse($event->date)->format('d F Y') }}</a>
                                </li>
                                <li class="pl-[24px] max-[767px]:pl-[14px]"><a href="#"
                                        class="text-[18px] max-[767px]:text-[12px]"><i
                                            class="text-tf mr-[10px] fa fa-clock"></i>{{ \Carbon\Carbon::parse($event->date)->format('h:i A') }}</a></li>
                            </ul>
                            <h3 class="mb-[12px] mt-6 text-xl max-[767px]:text-[40px]">
                                {{ $event->title}}
                            </h3>
                            <p class="text-[18px] leading-[1.7] mb-[16px]">{{ $event->description }}</p>
                            <div class="flex items-center justify-between mt-[53px] max-[767px]:flex-wrap">
                                <div class="">
                                    <ul class="flex items-center justify-start flex-wrap">
                                        <li
                                            class=" text-slate-50 border-2 bg-none border-slate-50 hover:border-orange-500 hover:text-slate-50 hover:bg-orange-500 px-3 py-2 rounded-full text-sm">
                                            {{ $event->category->name }}</li>
                                    </ul>
                                </div>
                                <div class="flex items-center justify-end max-[767px]:mt-[20px]">
                                    <form action="{{ route('events.reserve', ['eventId' => $event->id]) }}" method="POST">
                                        @csrf
                                        <button type="submit"
                                            class="text-white flex items-center justify-center  hover:text-orange-500 btn-action bg-orange-500 hover:bg-slate-50 hover:border-2 hover:border-orange-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-orange-500 dark:hover:bg-orange-600">
                                            <svg class="w-6 h-6 text-slate-50 hover:text-orange-500 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M4 5a2 2 0 0 0-2 2v2.5c0 .6.4 1 1 1a1.5 1.5 0 1 1 0 3 1 1 0 0 0-1 1V17a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2.5a1 1 0 0 0-1-1 1.5 1.5 0 1 1 0-3 1 1 0 0 0 1-1V7a2 2 0 0 0-2-2H4Z"/>
                                              </svg>
                                              Reserve</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
@endsection
