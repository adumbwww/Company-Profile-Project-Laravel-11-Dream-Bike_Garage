<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Testimonial::orderBy('id', 'desc')->get();

        return view('testimonial.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Add Data";

        return view('testimonial.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Testimonial::create($request->all());
        alert()->success('Succeed', 'Data Added Successfully');

        return redirect()->to('testimonial');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = Testimonial::find($id);

        return view('testimonial.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Testimonial::where('id', $id)->update([
            'name' => $request->name,
            'testimonial' => $request->testimonial
        ]);

        alert()->success('Succeed', 'Data Edited Successfully');

        return redirect()->to('testimonial');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Testimonial::where('id', $id)->delete();

        return redirect()->to('testimonial');
    }
}
