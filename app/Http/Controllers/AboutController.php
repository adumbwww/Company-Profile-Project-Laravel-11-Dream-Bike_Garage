<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = About::orderBy('id', 'desc')->get();

        return view('about.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Add Data";

        return view('about.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        About::create($request->all());
        alert()->success('Succeed', 'Data Added Successfully');

        return redirect()->to('about');
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
        $edit = About::find($id);

        return view('about.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        About::where('id', $id)->update([
            'first_paragraph' => $request->first_paragraph,
            'second_paragraph' => $request->second_paragraph,
            'what_we_offer_1' => $request->what_we_offer_1,
            'what_we_offer_2' => $request->what_we_offer_2,
            'what_we_offer_3' => $request->what_we_offer_3
        ]);

        alert()->success('Succeed', 'Data Edited Successfully');

        return redirect()->to('about');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        About::where('id', $id)->delete();

        return redirect()->to('about');
    }
}
