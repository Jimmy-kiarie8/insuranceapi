<?php

namespace App\Http\Controllers;

use App\models\Remainder;
use Illuminate\Http\Request;

class RemainderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Remainder::paginate();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Remainder  $remainder
     * @return \Illuminate\Http\Response
     */
    public function show(Remainder $remainder)
    {
        return Remainder::find($remainder->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Remainder  $remainder
     * @return \Illuminate\Http\Response
     */
    public function edit(Remainder $remainder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Remainder  $remainder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Remainder $remainder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Remainder  $remainder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Remainder $remainder)
    {
        //
    }
}
