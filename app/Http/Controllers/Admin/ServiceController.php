<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->paginate(10);

        return view('admin.services.all', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:services,slug',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'image' => 'nullable|mimes:jpg,jpeg,png,webp|max:10240',
            'banner' => 'nullable|mimes:jpg,jpeg,png,webp|max:10240',
            'status' => 'required|in:show,hide',
        ]);

        // Auto slug
        $validated['slug'] = $validated['slug'] ?? Str::slug($validated['title']);

        // Upload image
        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $imageName = time() . '_image.' . $image->getClientOriginalExtension();

            $imagePath = public_path('uploads/services');

            if (!file_exists($imagePath)) {
                mkdir($imagePath, 0755, true);
            }

            $image->move($imagePath, $imageName);

            $validated['image'] = 'uploads/services/' . $imageName;
        }

        // Upload banner
        if ($request->hasFile('banner')) {
            $banner = $request->file('banner');

            $bannerName = time() . '_banner.' . $banner->getClientOriginalExtension();

            $bannerPath = public_path('uploads/services/banners');

            if (!file_exists($bannerPath)) {
                mkdir($bannerPath, 0755, true);
            }

            $banner->move($bannerPath, $bannerName);

            $validated['banner'] = 'uploads/services/banners/' . $bannerName;
        }

        // Features
        $validated['feature_1'] = $request->feature_1;
        $validated['feature_2'] = $request->feature_2;
        $validated['feature_3'] = $request->feature_3;
        $validated['feature_4'] = $request->feature_4;

        // Save service
        Service::create($validated);

        return redirect()->route('services.all')
            ->with('success', 'Service created successfully');
    }
    public function edit($id)
    {
        $service = Service::findOrFail($id);

        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $validated = $request->validate([
            'type' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:services,slug,' . $id,
            'status' => 'required|in:show,hide',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'image' => 'nullable|mimes:jpg,jpeg,png,webp|max:10240',
            'banner' => 'nullable|mimes:jpg,jpeg,png,webp|max:10240',
        ]);

        // Upload image
        if ($request->hasFile('image')) {

            if ($service->image && file_exists(public_path($service->image))) {
                unlink(public_path($service->image));
            }

            $image = $request->file('image');

            $imageName = time() . '_image.' . $image->getClientOriginalExtension();

            $imagePath = public_path('uploads/services');

            if (!file_exists($imagePath)) {
                mkdir($imagePath, 0755, true);
            }

            $image->move($imagePath, $imageName);

            $validated['image'] = 'uploads/services/' . $imageName;
        } else {
            $validated['image'] = $service->image;
        }

        // Upload banner
        if ($request->hasFile('banner')) {

            if ($service->banner && file_exists(public_path($service->banner))) {
                unlink(public_path($service->banner));
            }

            $banner = $request->file('banner');

            $bannerName = time() . '_banner.' . $banner->getClientOriginalExtension();

            $bannerPath = public_path('uploads/services/banners');

            if (!file_exists($bannerPath)) {
                mkdir($bannerPath, 0755, true);
            }

            $banner->move($bannerPath, $bannerName);

            $validated['banner'] = 'uploads/services/banners/' . $bannerName;
        } else {
            $validated['banner'] = $service->banner;
        }

        // Features
        $validated['feature_1'] = $request->feature_1;
        $validated['feature_2'] = $request->feature_2;
        $validated['feature_3'] = $request->feature_3;
        $validated['feature_4'] = $request->feature_4;

        $service->update($validated);

        return redirect()->route('services.all')
            ->with('success', 'Service updated successfully');
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);

        // Delete service image
        if ($service->image && file_exists(public_path($service->image))) {
            unlink(public_path($service->image));
        }

        // Delete banner image
        if ($service->banner && file_exists(public_path($service->banner))) {
            unlink(public_path($service->banner));
        }

        $service->delete();

        return redirect()
            ->route('services.all')
            ->with('success', 'Service deleted successfully');
    }
}