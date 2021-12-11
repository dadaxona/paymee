<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreSyncRequest;
use App\Http\Requests\UpdateSyncRequest;
use App\Providers\SyncProvider;

class SyncController extends Controller
{
    private $config;
    public function __construct(protected SyncProvider $post){
        $this->config = [
            'list' => [
                'columns' => ['id','name','email','password'],
                'relations' => [ 'sync']
            ]
        ];
    }

    public function index(SyncProvider $work)
    {
        $client = $this->post->getList($this->config['list']);
        // return response()->json($client);
        return view('sync',["for"=>$work->get()]);
    }

    /**
     * Show the form for creating a new re.
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
    public function store(StoreSyncRequest $request, SyncProvider $work)
    {
        return redirect()->route('sync.index',$work->create($request->validated()));    

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sync  $sync
     * @return \Illuminate\Http\Response
     */
    public function show($id,SyncProvider $work)
    {
        return redirect()->route('sync.index',$work->show($id));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sync  $sync
     * @return \Illuminate\Http\Response
     */
    public function edit($id, SyncProvider $work)
    {
        return redirect()->route('sync.index',$work->edit($id));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSyncRequest  $request
     * @param  \App\Models\Sync  $sync
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSyncRequest $request, SyncProvider $work)
    {
        return redirect()->route('sync.index',$work->create($request->validated()));    
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sync  $sync
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, SyncProvider $work)
    {
        return redirect()->route('sync.index',$work->delete($id));    
        
    }
}
