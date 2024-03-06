<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:view categories'])->only(['index', 'show']);
        $this->middleware(['permission:create categories'])->only(['create', 'store']);
        $this->middleware(['permission:manage categories'])->only(['edit', 'update']);
        $this->middleware(['permission:delete categories'])->only(['destroy']);
    }
    public function index()
    {
        $categories = Category::latest()->paginate(5);
        return view('admin.categories.index', compact('categories'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(CategoryRequest $request)
    {
        Category::create($request->validated());
        return redirect()->route('categories.index');
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.show', compact('category'));
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    public function update(CategoryRequest $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->update($request->validated());

        return redirect()->route('categories.index');
    }

    public function destroy(Request $request, $id): JsonResponse
{
    if ($request->ajax()) {

        $category = Category::find($id);

        if ($category) {

            $category->delete();
            return response()->json(['status' => 'success', 'message' => 'Category deleted successfully']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Category not found'], 404);
        }
    } else {

        return response()->json(['status' => 'error', 'message' => 'Unauthorized'], 401);
    }
}
}