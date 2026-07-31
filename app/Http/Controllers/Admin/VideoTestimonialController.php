<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VideoTestimonial;
use Illuminate\Http\Request;

class VideoTestimonialController extends Controller
{
    public function index()
    {
        $data = VideoTestimonial::latest()->paginate(10);

        return view('admin.videotestimonials.all', compact('data'));
    }

    public function create()
    {
        return view('admin.videotestimonials.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'customer_name' => 'nullable|string|max:255',
            'youtube_video' => 'required|string',
            'description' => 'nullable|string',
            'sort_order' => 'nullable|integer',
        ]);

        $video = trim($request->youtube_video);

        // If embed URL entered, save only video ID
        if (str_contains($video, 'embed/')) {
            $video = explode('embed/', $video)[1];
            $video = explode('?', $video)[0];
        }

        VideoTestimonial::create([
            'title' => $request->title,
            'customer_name' => $request->customer_name,
            'youtube_video' => trim($video),
            'description' => $request->description,
            'status' => $request->has('status'),
            'sort_order' => $request->sort_order ?? 0,
        ]);

        return redirect()
            ->route('videotestimonials.index')
            ->with('success', 'Video Testimonial Added Successfully.');
    }

    public function edit($id)
    {
        $video = VideoTestimonial::findOrFail($id);

        return view('admin.videotestimonials.edit', compact('video'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'customer_name' => 'nullable|string|max:255',
            'youtube_video' => 'required|string',
            'description' => 'nullable|string',
            'sort_order' => 'nullable|integer',
        ]);

        $videoId = trim($request->youtube_video);

        if (str_contains($videoId, 'embed/')) {
            $videoId = explode('embed/', $videoId)[1];
            $videoId = explode('?', $videoId)[0];
        }

        $video = VideoTestimonial::findOrFail($id);

        $video->update([
            'title' => $request->title,
            'customer_name' => $request->customer_name,
            'youtube_video' => trim($videoId),
            'description' => $request->description,
            'status' => $request->has('status'),
            'sort_order' => $request->sort_order ?? 0,
        ]);

        return redirect()
            ->route('videotestimonials.index')
            ->with('success', 'Video Testimonial Updated Successfully.');
    }

    public function destroy($id)
    {
        $video = VideoTestimonial::findOrFail($id);

        $video->delete();

        return response()->json([
            'status' => true,
            'message' => 'Video Testimonial Deleted Successfully.'
        ]);
    }
}