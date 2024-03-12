<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class EventController extends Controller
{

    public function index()
    {
        $events = Event::latest()->with('category')->paginate(6);
        $categories = Category::all();

        return view('organizer.events.index', compact('events', 'categories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function events(Request $request)
    {
        $now = Carbon::now();
        // dd(Carbon::now()->format('Y-m-d H:i:s'));

        $events = Event::where('status', 'Accepted')
            ->where('date', '>=', $now)
            ->paginate(9);

        $categories = Category::all();

        return view('events', compact('events', 'categories'));
    }

    public function manage()
    {
        $events = Event::where('status', 'pending')->with('category')->paginate(5);

        return view('admin.events.manage', compact('events'));
    }

    public function accept(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        $event->update(['status' => 'Accepted']);

        return redirect()->back();
    }

    public function reject(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        $event->update(['status' => 'Rejected']);

        return redirect()->back();
    }

    public function create()
    {
        $categories = Category::all();
        return view('organizer.events.create', compact('categories'));
    }

    public function store(EventRequest $request)
    {

        $imageName = null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $path = 'storage/events/';
            $file->move($path, $fileName);

            $imageName = $fileName;
        }

        $validatedData = $request->validated();
        $validatedData['image'] = $imageName;
        $validatedData['tickets_booked'] = 0;

        $validatedData['user_id'] = auth()->user()->id;

        Event::create($validatedData);

        return redirect()->route('events.index');
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('organizer.events.show', compact('event'));
    }

    public function overview($id)
    {
        $event = Event::findOrFail($id);
        return view('pages.overview', compact('event'));
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        $categories = Category::all();
        return view('organizer.events.edit', compact('event', 'categories'));
    }

    public function update(EventRequest $request, $id)
    {
        $event = Event::findOrFail($id);

        // Retrieve the existing image name
        $imageName = $event->image;

        // Check if a new image is uploaded
        if ($request->hasFile('image')) {
            // If a new image is uploaded, delete the existing image
            if ($imageName) {
                Storage::delete('storage/events/' . $imageName);
            }

            // Upload the new image
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $path = 'storage/events/';
            $file->move($path, $fileName);

            // Update the image name with the new file name
            $imageName = $fileName;
        }

        // Validate the request data
        $validatedData = $request->validated();

        // If no new image is uploaded, retain the existing image name
        if (!$request->hasFile('image')) {
            $validatedData['image'] = $imageName;
        }

        // Update the event with the validated data
        $event->update($validatedData);

        return redirect()->route('events.index');
    }


    public function destroy(Request $request, $id): JsonResponse
    {
        if ($request->ajax()) {

            $event = Event::findOrFail($id);

            if ($event) {

                $event->delete();
                return response()->json(['status' => 'success', 'message' => 'Event deleted successfully']);
            } else {
                return response()->json(['status' => 'error', 'message' => 'Event not found'], 404);
            }
        } else {

            return response()->json(['status' => 'error', 'message' => 'Unauthorized'], 401);
        }
    }
    public function search(Request $request)
    {

        $keyword = $request->input('keyword');

        $events = Event::when($keyword, function ($query) use ($keyword) {
            return $query->where('title', 'like', '%' . $keyword . '%');
        })->paginate(9);


        if ($request->ajax()) {
            return view('pagination', compact('events'))->render();
        }

        return view('events', compact('events'));
    }


}