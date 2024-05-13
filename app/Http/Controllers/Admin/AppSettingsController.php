<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AppSettingsRequest;
use App\Models\AppSettings;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class AppSettingsController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $appSetting = AppSettings::first();
        return view('admin.appSettings.form', compact('appSetting'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AppSettingsRequest $request)
    {
        $validatedData = $request->validated();

        // Handle file uploads for logo_light
        $validatedData['logo_light'] = $request->hasFile('logo_light')
        ? $request->file('logo_light')->store('public/logos')
        : null;

        // Handle file uploads for fav_icon
        $validatedData['fav_icon'] = $request->hasFile('fav_icon')
        ? $request->file('fav_icon')->store('public/favicons')
        : null;
        // Create a new AppSetting instance
        $appSetting = new AppSettings();

        // Fill the instance with validated data
        $appSetting->fill($validatedData);

        // Save the instance to the database
        $appSetting->save();
        Toast::success('App settings Created');
        return redirect()->route('app-settings.create');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AppSettingsRequest $request, AppSettings $appSetting)
    {
        $validatedData = $request->validated();
        // Handle file uploads for logo_light
        $validatedData['logo_light'] = $request->hasFile('logo_light')
        ? $request->file('logo_light')->store('public/logos')
        : null;

        // Handle file uploads for fav_icon
        $validatedData['fav_icon'] = $request->hasFile('fav_icon')
        ? $request->file('fav_icon')->store('public/favicons')
        : null;
        // Fill the instance with validated data
        $appSetting->fill($validatedData);

        // Save the instance to the database
        $appSetting->save();
        Toast::success('App settings Updated');
        return redirect()->route('app-settings.create');
    }
}
