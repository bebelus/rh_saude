<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateEnterpriseRequest;
use App\Models\Enterprise;


class EnterpriseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enterprises = Enterprise::paginate(15);
        return view('enterprises.index', compact('enterprises'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('enterprises.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateEnterpriseRequest $request)
    {
        Enterprise::create($request->validated());
        return redirect()->route('enterprises.index')->with('success', 'Empresa cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $enterprise = Enterprise::where('id','=', $id)->first();
        return view('enterprises.show', compact('enterprise'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $enterprise = Enterprise::where('id','=', $id)->first();
        return view('enterprises.edit', compact('enterprise'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateEnterpriseRequest $request, Enterprise $enterprise)
    {
        $enterprise->update($request->validated());
        return redirect()->route('enterprises.index')->with('success', 'Empresa atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
