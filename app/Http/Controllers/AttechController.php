<?php

namespace App\Http\Controllers;

use App\Models\Attech;
use App\Http\Requests\StoreAttechRequest;
use App\Http\Requests\UpdateAttechRequest;

class AttechController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreAttechRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAttechRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attech  $attech
     * @return \Illuminate\Http\Response
     */
    public function show(Attech $attech)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attech  $attech
     * @return \Illuminate\Http\Response
     */
    public function edit(Attech $attech)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAttechRequest  $request
     * @param  \App\Models\Attech  $attech
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAttechRequest $request, Attech $attech)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attech  $attech
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attech $attech)
    {
        //
    }
}
