<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('backend.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('backend.blogs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'author' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $imagePath = $request->file('image') ? $request->file('image')->store('images', 'public') : null;

        Blog::create([
            'title' => $request->title,
            'description' => $request->description,
            'author' => $request->author,
            'image' => $imagePath,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Pricing Plan created successfully.');
    }

    public function show(Blog $blog)
    {
        return response()->json($blog);
    }

    public function edit(Blog $blog)
    {
        // Return a view for editing a blog post if needed
    }

    public function update(Request $request, Blog $blog)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'author' => 'required|string|max:255',
        ]);

        $blog->update($validatedData);
        return response()->json($blog);
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return response()->json(['message' => 'Blog deleted successfully']);
    }
}
