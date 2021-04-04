<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Manager;
use App\Models\Client;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        $managers = Manager::all();
        $programs = Program::all();
        return view('program.index', ['programs' => $programs, 'managers' => $managers, 'clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        $managers = Manager::all();
        return view('program.create', ['managers' => $managers, 'clients' => $clients]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $program = new Program;
        $program->title = $request->tour_title;
        $program->day1 = $request->day_1;
        $program->day2 = $request->day_2;
        $program->manager_id = $request->manager_id;
        $program->client_id = $request->client_id;

        $program->save();
        return redirect()->route('program.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit(Program $program)
    {
        $clients = Client::all();
        $managers = Manager::all();

        return view('program.edit', ['program' => $program, 'managers' => $managers, 'clients' => $clients]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $program)
    {
        $program->title = $request->tour_title;
        $program->day1 = $request->day_1;
        $program->day2 = $request->day_2;
        $program->manager_id = $request->manager_id;
        $program->client_id = $request->client_id;

        $program->save();
        return redirect()->route('program.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program)
    {
        $program->delete();
        return redirect()->route('program.index')->with('info_message', 'Program was deleted');
    }
}