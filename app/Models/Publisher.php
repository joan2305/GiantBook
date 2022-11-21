<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'address', 'phone', 'email', 'image'];
    protected $guarded = ['id'];

    public function book(){
        return $this->hasMany('App\Models\Book');
    }
}