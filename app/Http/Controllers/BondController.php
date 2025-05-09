<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bond;
use App\Models\Collaborator;
use App\Models\Applicant;
use App\Models\Hourly;
use App\Models\Monthly;
use App\Http\Requests\StoreUpdateBondRequest;

class BondController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collaborators = Bond::whereDoesntHave('works')->paginate(20);
        return view('bonds.index', compact('collaborators'));
       //$collaboratorsH = Bond::has('hourly')->whereDoesntHave('works')->get();
       // $collaboratorsM = Bond::has('monthly')->whereDoesntHave('works')->get();
       // return view('bonds.index', compact('collaboratorsH', 'collaboratorsM'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $null = NULL;
        $collaborators = Collaborator::whereDoesntHave('bonds')->get();
        $applicants = Applicant::all();
        $hourlies = Hourly::all();
        $monthlies = Monthly::all();
        return view('bonds.create', compact('collaborators', 'applicants', 'hourlies', 'monthlies', 'null'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateBondRequest $request)
    {
        Bond::create($request->validated());
        return redirect()->route('bonds.index')->with('success', 'Vínculo cadastrado com sucesso!');
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
