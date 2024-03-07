@extends('layouts.app')

@section('content')
    <!-- Start coding here -->
    <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
            <div class="w-full md:w-1/2">
                <div class="flex items-center">

                    <label for="simple-search" id="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input type="text" id="search" name="search"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500"
                            placeholder="Search" required="">
                    </div>
                </div>
            </div>
            <div
                class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                <div class="flex items-center space-x-3 w-full md:w-auto">
                    <button id="actionsDropdownButton" data-dropdown-toggle="actionsDropdown"
                        class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-600 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                        type="button">
                        <svg class="-ml-1 mr-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                        </svg>
                        Actions
                    </button>
                    <div id="actionsDropdown"
                        class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                        <div class="py-1">
                            <a href="#"
                                class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete
                                all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400" id="eventTable">
                <thead class="text-xs w-full text-slate-50 uppercase bg-orange-500 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-4">Title</th>
                        <th scope="col" class="px-4 py-3">Description</th>
                        <th scope="col" class="px-4 py-3">Date</th>
                        <th scope="col" class="px-4 py-3">Location</th>
                        <th scope="col" class="px-4 py-3">Image</th>
                        <th scope="col" class="px-4 py-3">Places</th>
                        <th scope="col" class="px-4 py-3">TB</th>
                        <th scope="col" class="px-4 py-3">Price</th>
                        <th scope="col" class="px-4 py-3">Status</th>
                        <th scope="col" class="px-4 py-3">TR</th>
                        <th scope="col" class="px-4 py-3">
                            <span class="sr-only">Actions</span>
                        </th>
                    </tr>
                </thead>
                <tbody id="eventTableBody">
                    @foreach ($events as $event)
                        <tr class="border-b dark:border-gray-700" id="{{ 'event_' . $event->id }}">
                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $event->title }}
                            </td>
                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $event->description }}
                            </td>
                            <td class="px-4 py-3 max-w-[12rem] truncate">{{ $event->date }}</td>
                            <td class="px-4 py-3">{{ $event->location }}</td>
                            <td class="px-4 py-3">
                                @if ($event->image)
                                    <img src="{{ asset('storage/events/' . $event->image) }}" alt="Event Image"
                                        class="w-10 h-10 rounded">
                                @else
                                    <span>No Image</span>
                                @endif
                            </td>
                            <td class="px-4 py-3">{{ $event->places_available }}</td>
                            <td class="px-4 py-3 ">{{ $event->tickets_booked }}</td>
                            <td class="px-4 py-3">{{ $event->price }}</td>
                            <td class="px-4 py-3">
                                <span
                                    class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">{{ $event->status }}</span>
                            </td>
                            <td class="px-4 py-3">{{ $event->type_reservation }}</td>
                            <td class="px-4 py-6 flex flex-row items-center justify-center">
                                <form action="{{ route('events.accept', $event->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn-accept">
                                        <svg class="w-5 h-5 text-green-500" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </button>
                                </form>
                                <form action="{{ route('events.reject', $event->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn-reject">
                                        <svg class="w-5 h-5 text-red-500" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div id="placeResult" class="hidden">
                <div class="flex justify-center">
                    <p class="text-center text-xl text-slate-400 dark:text-slate-200 p-10">
                        No result found for: <b><span id="searchStringPlaceholder"></span></b>
                    </p>
                </div>
            </div>
        </div>
        <!-- Pagination links -->
        <div id="paginationContainer" class="mt-4 px-3 pb-3">
            {{-- {{ $events->links() }} --}}
        </div>
    </div>
    <!-- End coding here -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#eventTable").on("click", ".deleteButton", function() {
                const eventId = $(this).data("id");

                if (eventId) {
                    // Get CSRF token value
                    const csrfToken = $('meta[name="csrf-token"]').attr('content');

                    Swal.fire({
                        title: "Are you sure?",
                        text: "Once deleted, You won't be able to revert this!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Yes, delete it!",
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Send AJAX request with CSRF token included
                            $.ajax({
                                url: `events/${eventId}`,
                                type: "DELETE",
                                headers: {
                                    'X-CSRF-TOKEN': csrfToken
                                },
                                success: function(response) {
                                    console.log(response);
                                    if (response.status === "success") {
                                        // Category deleted successfully
                                        Swal.fire({
                                            title: "Deleted!",
                                            text: "Event has been deleted.",
                                            icon: "success",
                                            timer: 1500,
                                        });

                                        // Remove the corresponding table row
                                        $(`#event_${eventId}`).remove();
                                    } else {
                                        // Failed to delete Event
                                        Swal.fire({
                                            title: "Failed!",
                                            text: "Unable to delete Event.",
                                            icon: "error",
                                        });
                                    }
                                },
                                error: function(error) {
                                    // Error occurred during AJAX request
                                    Swal.fire({
                                        title: "Failed!",
                                        text: "Unable to delete Event.",
                                        icon: "error",
                                    });
                                },
                            });
                        }
                    });
                }
            });
        });
    </script>
@endsection
