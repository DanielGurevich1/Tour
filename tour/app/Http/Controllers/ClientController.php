<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Manager;
use Illuminate\Http\Request;
use Validator;
use PDF;

class ClientController extends Controller
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
    public function index(Request $request)
    {
        // $managers = Manager::all();

        // if ($request->manager_id) {
        //     $clients  = Client::where('manager_id', $request->manager_id)->get();
        //     $filterBy = $request->manager_id;
        // } else {
        // }
        $clients = Client::all();

        if ($request->sort && 'asc' == $request->sort) {
            $clients = $clients->sortBy('name');
            $sortBy = 'asc';
        } elseif ($request->sort && 'desc' == $request->sort) {
            $clients = $clients->sortByDesc('name');
            $sortBy = 'desc';
        }

        return view('client.index', [
            'clients' => $clients,
            // 'managers' => $managers,
            'sortBy' => $sortBy ?? '',
            'filterBy' => $filterBy ?? 0,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {

        return view('client.create', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'client_name' => ['required', 'min:2', 'max:64'],
                'client_surname' => ['required', 'min:2', 'max:64'],
            ],
            [
                'client_name.min' => 'Name is too short',
                'client_surname.min' => 'Name is too short',
                'client_name.max' => 'Name is too long',
                'client_surname.max' => 'Name is too long',

            ]
        );
        if ($validator->fails()) {
            $request->flash();
            return redirect()->back()->withErrors($validator);
        }

        $client = new Client;
        $client->name = $request->client_name;
        $client->surname = $request->client_surname;
        $client->phone = $request->client_phone;
        $client->email = $request->client_email;
        $client->country = $request->client_country;



        $client->save();
        return redirect()->route('client.index')->with('success_message', 'Client was added.');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('client.edit', ['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'client_name' => ['required', 'min:2', 'max:64'],
                'client_surname' => ['required', 'min:2', 'max:64'],
            ],
            [
                'client_name.min' => 'Name is too short',
                'client_surname.min' => 'Name is too short',
                'client_name.max' => 'Name is too long',
                'client_surname.max' => 'Name is too long',

            ]
        );
        if ($validator->fails()) {
            $request->flash();
            return redirect()->back()->withErrors($validator);
        }
        $client->name = $request->client_name;
        $client->surname = $request->client_surname;
        $client->phone = $request->client_phone;
        $client->email = $request->client_email;
        $client->country = $request->client_country;

        $file = $request->file('client_portret');
        dd($file);
        $name = $file->getClientOriginalName() . '.' . $file->getClientOriginalExtension();
        // $name = rand(1000, 9999) . '.' . $file->getClientOriginalExtension(); // random

        $file->move(public_path('img'), $name);

        $client->portret = 'http://localhost/Tour/tour/public/img/' . $name;
        $client->save();
        return redirect()->route('client.index')->with('info_message', 'Client was updated.');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {

        $addedLink = 'http://localhost/Tour/tour/public/img/';
        $imgName = str_replace($addedLink, '', $client->portret);
        if (file_exists(public_path('img') . '/' . $imgName)) {
            unlink(public_path('img') . '/' . $imgName);
        }

        if ($client->clientHasManager->count()) {
            return redirect()->route('client.index')->with('info_message', 'Client with manager cannot be deleted');
        }
        $client->delete();
        return redirect()->route('client.index')->with('success_message', 'Client was deleted!');
    }
    public function pdf(Client $client)
    {
        $pdf = PDF::loadView('client.pdf', ['client' => $client]);
        return $pdf->download('client_id' . $client->id . '.pdf');
    }
}