<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BgContentRequest;
use App\Models\BgContent;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class BgContentController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bgContent = BgContent::first();
        return view('admin.bgContent.form', compact('bgContent'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(BgContentRequest $request)
    {
        $validatedData = $request->validated();

        // Handle file uploads for logo_light
        $validatedData['slider_url'] = $request->hasFile('slider_url')
            ? $request->file('slider_url')->store('public/sliders')
            : null;

        // Handle file uploads for fav_icon
        $validatedData['timer_url'] = $request->hasFile('timer_url')
            ? $request->file('timer_url')->store('public/timers')
            : null;
        // Create a new AppSetting instance
        $bgContent = new BgContent();

        // Fill the instance with validated data
        $bgContent->fill($validatedData);

        // Save the instance to the database
        $bgContent->save();
        Toast::success('Created Successfully');
        return to_route('bg-content.create');
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(BgContentRequest $request, BgContent $bgContent)
    {
        $validatedData = $request->validated();
        // Handle file uploads for logo_light
        $validatedData['slider_url'] = $request->hasFile('slider_url')
            ? $request->file('slider_url')->store('public/sliders')
            : null;

        // Handle file uploads for fav_icon
        $validatedData['timer_url'] = $request->hasFile('timer_url')
            ? $request->file('timer_url')->store('public/timers')
            : null;
        // Fill the instance with validated data
        $bgContent->fill($validatedData);
        // Save the instance to the database
        $bgContent->save();
        Toast::success('Updated Successfully');
        return to_route('bg-content.create');
    }
}
