<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = ['publisher_id', 'title', 'author','year','synopsis','image'];

    public function publisher(){
        return $this->belongsTo('App\Models\Publisher', 'publisher_id', 'id');
    }

    public function bookcategory(){
        return $this->hasMany('App\Models\BookCategory');
    }
}