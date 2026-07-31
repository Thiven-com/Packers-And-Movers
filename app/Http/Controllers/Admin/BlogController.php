<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->get();

        return view('admin.blogs.all', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'category_id' => 'nullable',
            'title' => 'nullable|string|max:255',
            'slug' => 'nullable|string|max:255',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'information' => 'nullable|string',
            'type' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'banner' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'tags' => 'nullable|string|max:255',
            'status' => 'required|in:show,hide',
        ]);

        $data['slug'] = $request->slug
            ? Str::slug($request->slug)
            : Str::slug($request->title);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_image.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/blogs'), $imageName);

            $data['image'] = 'uploads/blogs/' . $imageName;
        }

        if ($request->hasFile('banner')) {
            $banner = $request->file('banner');
            $bannerName = time() . '_banner.' . $banner->getClientOriginalExtension();
            $banner->move(public_path('uploads/blogs'), $bannerName);

            $data['banner'] = 'uploads/blogs/' . $bannerName;
        }

        Blog::create($data);

        return redirect()->route('admin.blogs.all')
            ->with('success', 'Blog created successfully.');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);

        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $data = $request->validate([
            'category_id' => 'nullable',
            'title' => 'nullable|string|max:255',
            'slug' => 'nullable|string|max:255',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'information' => 'nullable|string',
            'type' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'banner' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'tags' => 'nullable|string|max:255',
            'status' => 'required|in:show,hide',
        ]);

        $data['slug'] = $request->slug
            ? Str::slug($request->slug)
            : Str::slug($request->title);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_image.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/blogs'), $imageName);

            $data['image'] = 'uploads/blogs/' . $imageName;
        }

        if ($request->hasFile('banner')) {
            $banner = $request->file('banner');
            $bannerName = time() . '_banner.' . $banner->getClientOriginalExtension();
            $banner->move(public_path('uploads/blogs'), $bannerName);

            $data['banner'] = 'uploads/blogs/' . $bannerName;
        }

        $blog->update($data);

        return redirect()->route('admin.blogs.all')
            ->with('success', 'Blog updated successfully.');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        $blog->delete();

        return redirect()->route('admin.blogs.all')
            ->with('success', 'Blog deleted successfully.');
    }
}
