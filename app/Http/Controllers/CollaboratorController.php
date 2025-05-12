<?php

namespace App\Http\Controllers;

use App\Models\Collaborator;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateCollaboratorRequest;


class CollaboratorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $collaborators = Collaborator::whereDoesntHave('bonds')->paginate(15);

        return view('collaborators.index', compact('collaborators'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('collaborators.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateCollaboratorRequest $request)
    {
       // dd ($request->all());
        Collaborator::create($request->validated());
        return redirect()->route('collaborators.index')->with('success', 'Colaborador cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $collab)
    {
        $collaborator = Collaborator::where('id','=', $collab)->first();
        return view('collaborators.show', compact('collaborator'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $collab)
    {
        $collaborator = Collaborator::where('id', $collab)->first();
        return view('collaborators.edit', compact('collaborator'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateCollaboratorRequest $request, Collaborator $collaborator)
    {
       $collaborator->update($request->validated());
        return redirect()->route('collaborators.index')->with('success', 'Colaborador atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Collaborator $collaborator)
    {
        //
    }
}
