<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Manager;

class ManagerController extends Controller
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
        $clients = Client::all();


        // sort managers by clients
        if ($request->client_id) {
            $managers  = Manager::where('client_id', $request->client_id)->get();
            $filterBy = $request->client_id;
        } else {
            $managers = Manager::all();
        }

        if ($request->sort && 'asc' == $request->sort) {
            $managers = $managers->sortBy('name');
            $sortBy = 'asc';
        } elseif ($request->sort && 'desc' == $request->sort) {
            $managers = $managers->sortByDesc('name');
            $sortBy = 'desc';
        }

        return view('manager.index', [
            'managers' => $managers,
            'clients' => $clients,
            'sortBy' => $sortBy ?? '',
            'filterBy' => $filterBy ?? 0,

        ]);

        // $managers = Manager::paginate(5);
        return view('manager.index', ['managers' => $managers, 'clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        return view('manager.create', ['clients' => $clients]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $manager = new Manager;
        $manager->name = $request->manager_name;
        $manager->surname = $request->manager_surname;
        $manager->client_id = $request->client_id;

        $manager->save();
        return redirect()->route('manager.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function show(Manager $manager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function edit(Manager $manager)
    {
        $clients = Client::all();
        return view('manager.edit', ['manager' => $manager, 'clients' => $clients]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manager $manager)
    {
        $manager->name = $request->manager_name;
        $manager->surname = $request->manager_surname;
        $file = $request->file('manager_portret');

        // $name = $file->getClientOriginalName() . '.' . $file->getClientOriginalExtension(); original
        $name = rand(1000, 9999) . '.' . $file->getClientOriginalExtension(); // random

        $file->move(public_path('img'), $name);

        $manager->portret = 'http://localhost/Tour/tour/public/img/' . $name; // move to db with original name
        // dd($file);
        // /Applications/XAMPP/xamppfiles/htdocs/Tour/tour/public/img

        $manager->save();
        return redirect()->route('manager.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manager $manager)
    {




        $addedLink = 'http://localhost/Tour/tour/public/img/';
        $imgName = str_replace($addedLink, '', $manager->portret);
        if (file_exists(public_path('img') . '/' . $imgName)) {
            unlink(public_path('img') . '/' . $imgName);
        }
        $manager->delete();
        return redirect()->route('manager.index')->with('info_message', 'Manager was deleted!');
    }
}
