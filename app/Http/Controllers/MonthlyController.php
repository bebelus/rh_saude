<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateMonthlyRequest;
use App\Models\Monthly;
use App\Models\Contract;

class MonthlyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $monthlies = Monthly::paginate(20);
        return view('monthlies.index', compact('monthlies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $contracts = Contract::all();
        return view('monthlies.create', compact('contracts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateMonthlyRequest $request)
    {
        Monthly::create($request->validated());
        return redirect()->route('monthlies.index')->with('success', 'Mês cadastrado com sucesso!');
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
