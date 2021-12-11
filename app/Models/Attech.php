<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attech extends Model
{
    use HasFactory;
    protected $fillable = ['sync_id','name','email','password'];
    public $timestamps = true;

    public function attec()
    {
        return $this->belongsToMany(Sync::class);
    }
}
