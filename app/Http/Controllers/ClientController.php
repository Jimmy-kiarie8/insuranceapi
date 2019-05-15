<?php

namespace App\Http\Controllers;

use App\models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Client::paginate();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request->all();
        $client = new Client;
        $client->user_id = $request->user_id;
        $client->name = $request->name;
        $client->code = $request->code;
        $client->phone = $request->phone;
        $client->email = $request->email;
        $client->address = $request->address;
        $client->country = $request->country;
        $client->approved = $request->approved;
        $client->active = $request->active;
        $client->save();
        return $client;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Client::find($id);
    }
                                    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return $request->all();
        $client = Client::find($id);
        $client->user_id = $request->user_id;
        $client->name = $request->name;
        $client->code = $request->code;
        $client->phone = $request->phone;
        $client->email = $request->email;
        $client->address = $request->address;
        $client->country = $request->country;
        $client->approved = $request->approved;
        $client->active = $request->active;
        $client->save();
        return $client;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client, $id)
    {
        Client::find($id)->delete();
    }
}
