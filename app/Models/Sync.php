<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sync extends Model
{
    use HasFactory;
    protected $table = 'syncs';
    protected $fillable = ['atteche_id','name','email','password'];
    public $timestamps = false;

}
