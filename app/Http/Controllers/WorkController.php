<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Work;
use App\Models\Bond;
use App\Models\Sector;
use App\Http\Requests\StoreUpdateWorkRequest;
use App\Models\Applicant;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collaborators = Work::paginate(20);
        return view('works.index', compact('collaborators'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bonds = Bond::whereDoesntHave('works')->get();
        $sectors = Sector::all()->sortBy('HealthUnit.name');
        $applicants = Applicant::all();
        return view('works.create', compact('bonds', 'sectors', 'applicants'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateWorkRequest $request)
    {
        Work::create($request->validated());
        return redirect()->route('works.index')->with('success', 'Trabalho cadastrado com sucesso!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
