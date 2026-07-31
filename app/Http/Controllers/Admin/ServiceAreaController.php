<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceArea;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceAreaController extends Controller
{
    public function index()
    {
        $serviceAreas = ServiceArea::latest()->paginate(10);

        return view('admin.serviceareas.all', compact('serviceAreas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'location_name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:service_areas,slug',
        ]);

        ServiceArea::create([
            'location_name' => $request->location_name,
            'slug' => $request->slug ?: Str::slug($request->location_name),
        ]);

        return back()->with('success', 'Service Area added successfully');
    }

    public function update(Request $request, $id)
    {
        $serviceArea = ServiceArea::findOrFail($id);

        $request->validate([
            'location_name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:service_areas,slug,' . $id,
        ]);

        $serviceArea->update([
            'location_name' => $request->location_name,
            'slug' => $request->slug,
        ]);

        return back()->with('success', 'Service Area updated successfully');
    }

    public function destroy($id)
    {
        ServiceArea::findOrFail($id)->delete();

        return back()->with('success', 'Service Area deleted successfully');
    }
}
