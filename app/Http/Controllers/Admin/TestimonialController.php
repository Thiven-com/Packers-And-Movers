<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Testimonial::paginate(10);

        return view('admin.testimonials.all', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'message' => 'required',
            'rating' => 'required|integer|min:1|max:5',
            'date' => 'required|date',
        ]);

        $imagePath = null;

        // Upload image to public/uploads/testimonials
        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $imageName = time() . '_' . $image->getClientOriginalName();

            $destinationPath = public_path('uploads/testimonials');

            // Create folder if not exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $image->move($destinationPath, $imageName);

            $imagePath = 'uploads/testimonials/' . $imageName;
        }

        Testimonial::create([
            'name' => $request->name,
            'image' => $imagePath,
            'rating' => $request->rating,
            'date' => $request->date,
            'message' => $request->message,
            'status' => 'approved',
        ]);

        return redirect()->route('admin.testimonial.index')
            ->with('success', 'Testimonial added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = Testimonial::where('id', $id)->first();

        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'message' => 'required',
            'rating' => 'required|integer|min:1|max:5',
            'date' => 'required|date',
        ]);

        $testimonial = Testimonial::findOrFail($id);

        // Keep old image by default
        $imagePath = $testimonial->image;

        // Upload new image if selected
        if ($request->hasFile('image')) {

            // Delete old image
            if (
                $testimonial->image &&
                file_exists(public_path($testimonial->image))
            ) {
                unlink(public_path($testimonial->image));
            }

            $image = $request->file('image');

            $imageName = time() . '_' . $image->getClientOriginalName();

            $destinationPath = public_path('uploads/testimonials');

            // Create folder if not exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $image->move($destinationPath, $imageName);

            $imagePath = 'uploads/testimonials/' . $imageName;
        }

        // Update testimonial
        $testimonial->update([
            'name' => $request->name,
            'image' => $imagePath,
            'rating' => $request->rating,
            'date' => $request->date,
            'message' => $request->message,
            'status' => $request->status ?? $testimonial->status,
        ]);

        return redirect()->route('admin.testimonial.index')
            ->with('success', 'Testimonial updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        // Delete image if exists
        if ($testimonial->image && file_exists(public_path($testimonial->image))) {
            unlink(public_path($testimonial->image));
        }

        // Delete record
        $testimonial->delete();

        return response()->json([
            'success' => true,
            'message' => 'Testimonial deleted successfully'
        ]);
    }
    public function approve($id)
    {
        Testimonial::where('id', $id)->update(['status' => "approved"]);

        return back()->with('success', 'Testimonial approved successfully');
    }

    public function reject($id)
    {
        Testimonial::where('id', $id)->update(['status' => "rejected"]);

        return back()->with('error', 'Testimonial rejected');
    }
}
