<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
            'service' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);

        Contact::create($request->all());

        return back()->with('success', 'Enquiry submitted successfully!');
    }

    // Admin list page
    public function index()
    {
        $contacts = Contact::latest()->paginate(10);

        return view('admin.contacts.all', compact('contacts'));
    }

    // Delete enquiry
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->back()->with('success', 'Contact deleted successfully');
    }
}
