<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attech extends Model
{
    use HasFactory;
    protected $table = 'attechs';
    protected $fillable = ['name','email','password'];
    public $timestamps = false;
}
