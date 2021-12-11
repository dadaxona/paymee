<?php

namespace App\Providers;

use App\Providers\ContractProvider;
use App\Models\Attech;
use App\Models\Sync;
class AttechProvider extends ContractProvider
{
    public function __construct(Attech $client)
    {
        $this->work = $client;
    }

    public function create($request)
    { 
        $model = app()->make(SyncProvider::class);
        $model->create($request);
        $client = $this->work->create($request);         
        return $client;
    }    
}
