<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {

        $events = Event::latest()->with('category')->paginate(5);

        $categories = Category::all();

        return view('admin.events.index', compact('events', 'categories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.events.create', compact('categories'));
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

        Event::create($validatedData);

        return redirect()->route('events.index');
    }



    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('events.show', compact('event'));
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        $categories = Category::all();
        return view('admin.events.edit', compact('event', 'categories'));
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
}