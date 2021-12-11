<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sync extends Model
{
    use HasFactory;
  
    protected $fillable = ['name','email','password'];
    public $timestamps = true;

    public function sync()
    {
        return $this->hasOne(Attech::class);
    }
    
}
