<?php

namespace App\Http\Controllers;

use App\Models\Price;
use App\Models\Client;
use App\Models\Manager;

use App\Models\Car;
use App\Models\Hotel;
use App\Models\Program;
use App\Models\Guide;
use Illuminate\Http\Request;

class PriceController extends Controller
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
        $prices = Price::all();
        $cars = Car::all();
        $guides = Guide::all();
        $programs = Program::all();
        $managers = Manager::all();
        $hotels = Hotel::all();
        $prices = Price::all();
        return view('price.index', [
            'prices' => $prices,
            'cars' => $cars,
            'guides' => $guides,
            'hotels' => $hotels,
            'clients' => $clients,
            'managers' => $managers,

            'programs' => $programs,
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

        $cars = Car::all();
        $guides = Guide::all();
        $programs = Program::all();
        $managers = Manager::all();
        $hotels = Hotel::all();
        $prices = Price::all();
        return view('price.create', [

            'prices' => $prices,
            'cars' => $cars,
            'guides' => $guides,
            'hotels' => $hotels,
            'clients' => $clients,
            'managers' => $managers,
            'programs' => $programs
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
        $price = new Price;
        $price->price_offer_title = $request->price_offer_title;

        $price->car_id = $request->car_id;
        $price->guide_id = $request->guide_id;
        $price->hotel_id = $request->hotel_id;
        $price->client_id = $request->client_id;
        $price->manager_id = $request->manager_id;
        $price->program_id = $request->program_id;

        $price->save();
        return redirect()->route('price.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function show(Price $price)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function edit(Price $price)
    {
        $cars = Car::all();
        $guides = Guide::all();
        $hotels = Hotel::all();
        $clients = Client::all();
        $managers = Manager::all();
        $programs = Program::all();


        return view('price.edit', [

            'price' => $price,
            'cars' => $cars,
            'guides' => $guides,
            'hotels' => $hotels,
            'clients' => $clients,
            'managers' => $managers,
            'programs' => $programs
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Price $price)
    {
        $price->price_offer_title = $request->price_offer_title;

        $price->car_id = $request->car_id;
        $price->guide_id = $request->guide_id;
        $price->hotel_id = $request->hotel_id;
        $price->client_id = $request->client_id;
        $price->manager_id = $request->manager_id;
        $price->program_id = $request->program_id;

        $price->save();
        return redirect()->route('price.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function destroy(Price $price)
    {
        $price->delete();
        return redirect()->route('price.index')->with('info_message', 'Price offer was deleted!');
    }
}