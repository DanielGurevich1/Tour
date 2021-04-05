<?php

namespace App\Http\Controllers;

use App\Models\Guide;
use App\Models\Category;
use Illuminate\Http\Request;

class GuideController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $guides = Guide::all();
        return view('guide.index', ['guides' => $guides, 'categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('guide.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $guide = new Guide;
        $guide->name = $request->guide_name;
        $guide->surname = $request->guide_surname;
        $guide->phone = $request->guide_phone;
        $guide->email = $request->guide_email;
        $guide->category_id = $request->category_id;

        $guide->save();
        return redirect()->route('guide.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guide  $guide
     * @return \Illuminate\Http\Response
     */
    public function show(Guide $guide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guide  $guide
     * @return \Illuminate\Http\Response
     */
    public function edit(Guide $guide)
    {
        $categories = Category::all();
        return view('guide.edit', ['guide' => $guide, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guide  $guide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guide $guide)
    {
        $guide->name = $request->guide_name;
        $guide->surname = $request->guide_surname;
        $guide->phone = $request->guide_phone;
        $guide->email = $request->guide_email;
        $guide->category_id = $request->category_id;

        $guide->save();
        return redirect()->route('guide.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guide  $guide
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guide $guide)
    {
        $guide->delete();
        return redirect()->route('guide.index')->with('info_message', 'Guide was deleted!');
    }
}