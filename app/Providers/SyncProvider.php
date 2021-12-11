<?php

namespace App\Providers;

use App\Providers\ContractProvider;
use App\Models\Sync;

class SyncProvider extends ContractProvider
{
    public function __construct(Sync $client)
    {
        $this->work = $client;
    }
}
