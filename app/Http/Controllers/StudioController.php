<?php

namespace App\Http\Controllers;

use App\Models\Studio;
use Illuminate\Http\Request;

class StudioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studio = Studio::all();

        return view('admin.studio.index', compact('studio'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.studio.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $logoPath = null;
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $hashedName = md5($logo->getClientOriginalName() . time()) . '.' . $logo->extension();
            $logoPath = $logo->storeAs('uploads/organization', $hashedName, 'public');
        }
        $data = $request->only([
            'name',
            'address',
            'email',
            'logo',
            'phone',

        ]);
        $data['logo'] = $logoPath;

        Studio::create($data);

        return redirect()->route('studio.index')->with('success', 'Studio Details Added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.studio.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $studio = Studio::find($id);

        return view('admin.studio.create', compact('studio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $logoPath = null;
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $hashedName = md5($logo->getClientOriginalName() . time()) . '.' . $logo->extension();
            $logoPath = $logo->storeAs('uploads/organization', $hashedName, 'public');
        }

        $studio = Studio::find($id);
        $data = $request->only([
            'name',
            'address',
            'email',
            'logo',
            'phone',

        ]);
        $data['logo'] = $logoPath;

        $studio->fill($data);
        $studio->save();


        return redirect()->route('studio.index')->with('success', 'Studio Details Updated Successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $studio = Studio::find($id);

        $studio->delete();

        return redirect()->route('studio.index')->with('success', 'Studio Details Deleted Successfully');
    }
}
