<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\Price;

use App\Models\Client;
use App\Models\Manager;
use App\Models\Type;


use App\Models\Guide;
use Illuminate\Http\Request;

class TourController extends Controller
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
        $clients = Client::all();
        $tours = Tour::all();
        $types = Type::all();
        $guides = Guide::all();
        $prices = Price::all();



        return view('tour.index', [
            'tours' => $tours,
            'types' => $types,
            'guides' => $guides,
            'prices' => $prices,
            'clients' => $clients,



        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        $tours = Tour::all();
        $types = Type::all();
        $guides = Guide::all();
        $prices = Price::all();




        return view('tour.create', [
            'tours' => $tours,
            'types' => $types,
            'guides' => $guides,
            'prices' => $prices,
            'clients' => $clients,



        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tour = new Tour;
        $tour->name = $request->tour_name;
        $tour->length = $request->tour_length;

        $tour->client_name_id = $request->client_id;
        $tour->type_id = $request->type_id;


        $tour->price_id = $request->price_id;
        $tour->guide_id = $request->guide_id;


        $tour->save();
        return redirect()->route('tour.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function show(Tour $tour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function edit(Tour $tour)
    {

        $guides = Guide::all();
        $types = Type::all();
        $clients = Client::all();
        $managers = Manager::all();
        $prices = Price::all();


        return view('tour.edit', [

            'tour' => $tour,
            'types' => $types,
            'guides' => $guides,
            'prices' => $prices,
            'clients' => $clients,
            'managers' => $managers,

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tour $tour)
    {
        $tour->name = $request->tour_name;
        $tour->length = $request->tour_length;
        $tour->client_name_id = $request->client_id;
        $tour->type_id = $request->type_id;


        $tour->price_id = $request->price_id;
        $tour->guide_id = $request->guide_id;


        $tour->save();
        return redirect()->route('tour.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tour $tour)
    {
        $tour->delete();
        return redirect()->route('tour.index')->with('info_message', 'Tour was deleted!');
    }
}