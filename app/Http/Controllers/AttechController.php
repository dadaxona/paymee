<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAttechRequest;
use App\Http\Requests\UpdateAttechRequest;
use App\Providers\AttechProvider;

class AttechController extends Controller
{
    private $config;

    public function __construct(protected AttechProvider $post){
        $this->config = [
            'list' => [
                'columns' => ['id','sync_id','name','email','password'],
                'relations' => [ 'attec']
            ]
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AttechProvider $work)
    {
        $client = $this->post->getlist($this->config['list']);
        // return response()->json($client);
        return view('attech',["for"=>$client]);
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
    public function store(StoreAttechRequest $request, AttechProvider $work)
    {
       
        // return response()->json($request);
        return redirect()->route('attech.index',$work->create($request->validated()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attech  $attech
     * @return \Illuminate\Http\Response
     */
    public function show($id, AttechProvider $work)
    {
        return redirect()->route('attech.index',$work->show($id));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attech  $attech
     * @return \Illuminate\Http\Response
     */
    public function edit($id, AttechProvider $work)
    {
        return redirect()->route('attech.index',$work->edit($id));  
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAttechRequest  $request
     * @param  \App\Models\Attech  $attech
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAttechRequest $request, AttechProvider $work)
    {
        return redirect()->route('attech.index',$work->create($request->validated()));    

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attech  $attech
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, AttechProvider $work)
    {
        return redirect()->route('attech.index',$work->delete($id));    
        
    }
}
