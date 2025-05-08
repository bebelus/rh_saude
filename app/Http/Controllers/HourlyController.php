<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateHourlyRequest;
use App\Models\Contract;
use Illuminate\Http\Request;
use App\Models\Hourly;
class HourlyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hourlies = Hourly::paginate(20);
        return view('hourlies.index', compact('hourlies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $contracts = Contract::all();
        return view('hourlies.create', compact('contracts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateHourlyRequest $request)
    {
        Hourly::create($request->validated());
        return redirect()->route('hourlies.index')->with('success', 'Horário cadastrado com sucesso!');
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
