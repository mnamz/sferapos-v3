<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        return view('client', compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClientRequest $request)
    {
        Client::create($request->all());
        return redirect()->route('client')->with('success', 'Client created');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $editClient = Client::findOrFail($id);
        $clients = Client::all();
        return view('client', compact('clients', 'editClient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ClientRequest $request, $id)
    {
        $client = Client::findOrFail($id);
        $client->update($request->all());
        return redirect()->route('client')->with('success', 'Client updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();
        return redirect()->route('client')->with('success', 'Client deleted');
    }
}
