<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

use function Symfony\Component\VarDumper\Dumper\esc;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        return view('Clients.listClients', compact('clients'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Clients.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $client = new Client();
        $client->nombre =  $request->input('nombres');
        $client->apellidos = $request->input('apellidos');

        $client->save();

        return redirect()->route('Clients.list');

    }

  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $client = Client::find($id);
        return view('Clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $client = Client::find($id);
        $client->nombre =  $request->input('nombres');
        $client->apellidos = $request->input('apellidos');

        $client->save();

        return redirect()->route('Clients.list');
    }

    /**
     * Remove the specified resource from storage.
     */

     public function delete($id)
     {
        $client = Client::find($id);
        return view('Clients.delete', compact('client'));
     }
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect()->route('Clients.list');

    }
}
