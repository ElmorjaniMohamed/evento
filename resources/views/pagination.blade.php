
@foreach ($events as $index => $event)
    <div class="bg-purple-700 rounded-xl p-4 mb-28 max-w-sm shadow dark:bg-gray-800 dark:border-gray-700  group">
        <div class="overflow-hidden rounded-lg">
            <a href="{{route('events.overview', $event->id)}}" class="w-full">
                <img src="{{ asset('storage/events/' . $event->image) }}" alt="Monteno"
                    class="group-hover:scale-110 rounded-lg w-full transition-all duration-500 ease-in-out h-[15rem]">
            </a>
        </div>
        <div class="pt-4 pb-6">
            <a href="{{route('events.overview', $event->id)}}" class="text-lg mt-2 leading-6 truncate w-80">{{ $event->title }}</a>
            <ul class="flex flex-col justify-start space-y-1 mt-3">
                <li><a href="" class="block text-base"><i
                            class="fa-solid fa-location-dot text-tf mr-2"></i>{{ $event->location }}</a>
                </li>
                <li class="flex flex-row gap-3"><a href="" class="block text-base"><i
                            class="fa-solid fa-calendar-days text-tf mr-2"></i>{{ \Carbon\Carbon::parse($event->date)->format('d F Y') }}</a><a
                            href="{{route('events.overview', $event->id)}}" class="block text-base"><i
                            class="fa-solid fa-clock text-tf mr-2"></i>{{ \Carbon\Carbon::parse($event->date)->format('h:i A') }}</a>
                </li>
            </ul>
        </div>
        <div class="flex items-center justify-between relative">
            <a href="{{route('events.overview', $event->id)}}"
                class="font-somibold text-sm text-slate-50 dark:text-white before::content-[''] before:w-[36px] before:h-[3px] before:absolute before:bottom-0 before:left-0 before:bg-[#fd562a]">Read
                More</a>
            <form action="{{ route('events.reserve', ['eventId' => $event->id]) }}" method="POST">
                @csrf
                <button type="submit"
                    class="text-white font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-orange-500 ">Reserve</button>
            </form>
        </div>
    </div>
@endforeach






