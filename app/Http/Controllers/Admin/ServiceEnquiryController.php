<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceEnquiry;
use Illuminate\Http\Request;

class ServiceEnquiryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'service' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'mobile' => 'required|digits_between:10,15',
            'email' => 'nullable|email',
            'moving_date' => 'nullable|date',
            'from_location' => 'nullable|string|max:255',
            'to_location' => 'nullable|string|max:255',
            'message' => 'nullable|string',
            'house_size' => 'nullable|string|max:255',
        ]);

        ServiceEnquiry::create($request->all());

        return back()->with('success', 'Your enquiry has been submitted successfully!');
    }

    public function index()
    {
        $enquiries = ServiceEnquiry::latest()->paginate(10);

        return view('admin.service-enquiries.all', compact('enquiries'));
    }

    public function destroy($id)
    {
        ServiceEnquiry::findOrFail($id)->delete();

        return back()->with('success', 'Enquiry deleted successfully');
    }
}
