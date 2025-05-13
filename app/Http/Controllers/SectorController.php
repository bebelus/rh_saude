<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sector;
use App\Models\HealthUnit;
use App\Http\Requests\StoreUpdateSectorRequest;


class SectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sectors = Sector::paginate(20);
        return view('sectors.index', compact('sectors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $health_units = HealthUnit::all();
        return view('sectors.create', compact('health_units'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateSectorRequest $request)
    {
        Sector::create($request->validated());
        return redirect()->route('sectors.index')->with('success', 'Setor cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sector = Sector::where('id', $id)->first();
        return view('sectors.show', compact('sector'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $health_units = HealthUnit::all();
        $sector = Sector::where('id', $id)->first();
        return view('sectors.edit', compact('sector', 'health_units'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateSectorRequest $request, Sector $sector)
    {
        $sector->update($request->validated());
        return redirect()->route('sectors.index')->with('success', 'Setor atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
