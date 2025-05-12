<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HealthUnit;
use App\Http\Requests\StoreUpdateHealthUnitRequest;

class HealthUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $unidades = HealthUnit::paginate(20);
        return view('health_units.index', compact('unidades'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('health_units.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateHealthUnitRequest $request)
    {
        HealthUnit::create($request->validated());
        return redirect()->route('health_units.index')->with('success', 'Unidade cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $health_unit = HealthUnit::where('id', $id)->first();
        return view('health_units.show', compact('health_unit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $health_unit = HealthUnit::where('id', $id)->first();
        return view('health_units.edit', compact('health_unit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateHealthUnitRequest $request, HealthUnit $health_unit)
    {
        $health_unit->update($request->validated());
        return redirect()->route('health_units.index')->with('success', 'Unidade atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
