<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // Show index
    public function index() {

        // $list = Listing::latest()->filter(request(['search']))->paginate(1);

        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['search']))->paginate(6)
        ]);
    }

    // Show single listing
    public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing 
        ]);
    }

    // Show create form
    public function create() {
        return view('listings.create');
    }

    // Store Listing
    public function store(Request $request) {
        $formFields = $request->validate([
            'category' => 'required',
            'title' => 'required',
            'price' => 'required',
            'condition' => 'required',
            'address' => 'required',
            'contact_number' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('logos', 'public');
        }

        // Store user id who post the ads
        $formFields['user_id'] = auth()->id();

        Listing::create($formFields);

        return redirect('/')->with('message', 'Your ad posted successfully!');
    }

    // Show edit form
    public function edit(Listing $listing) {
        return view('listings.edit', ['listing' => $listing]);
    }

    // Update Listing
    public function update(Request $request, Listing $listing) {
        $formFields = $request->validate([
            'category' => 'required',
            'title' => 'required',
            'price' => 'required',
            'condition' => 'required',
            'address' => 'required',
            'contact_number' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('logos', 'public');
        }

        $listing->update($formFields);

        return redirect('/listing/manage')->with('message', 'Ad updated successfully!');
    }

    // Delete Listing
    public function destroy(Listing $listing) {
        $listing->delete();

        return back()->with('message', 'Ads deleted successfully!');
    }

    // Manage Listing
    public function manage() {
        return view('listings.manage', [
            'listings' => auth()->user()->listings()->get()
        ]);
    }
}
