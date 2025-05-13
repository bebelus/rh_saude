<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contract;
use App\Models\Enterprise;
use App\Http\Requests\StoreUpdateContractRequest;
use Illuminate\Support\Number;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contracts = Contract::paginate(20);
        return view('contracts.index', compact('contracts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $enterprises = Enterprise::all();
        return view('contracts.create', compact('enterprises'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateContractRequest $request)
    {
        Contract::create($request->validated());
        return redirect()->route('contracts.index')->with('success', 'Contrato cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contract = Contract::where('id', $id)->first();
        return view('contracts.show', compact('contract'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $enterprises = Enterprise::all();
        $contract = Contract::where('id', $id)->first();
        return view('contracts.edit', compact('contract', 'enterprises'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateContractRequest $request, Contract $contract)
    {
        $contract->update($request->validated());
        return redirect()->route('contracts.index')->with('success', 'Contrato atualizado com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
