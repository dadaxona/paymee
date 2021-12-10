<?php

namespace App\Http\Controllers;

use App\Models\Sync;
use App\Http\Requests\StoreSyncRequest;
use App\Http\Requests\UpdateSyncRequest;

class SyncController extends Controller
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
     * @param  \App\Http\Requests\StoreSyncRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSyncRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sync  $sync
     * @return \Illuminate\Http\Response
     */
    public function show(Sync $sync)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sync  $sync
     * @return \Illuminate\Http\Response
     */
    public function edit(Sync $sync)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSyncRequest  $request
     * @param  \App\Models\Sync  $sync
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSyncRequest $request, Sync $sync)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sync  $sync
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sync $sync)
    {
        //
    }
}
