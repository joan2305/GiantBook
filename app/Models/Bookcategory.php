<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookcategory extends Model
{
    use HasFactory;
    use HasFactory;

    protected $fillable = ['book_id', 'category_id'];
    protected $guarded = ['id'];

    public function book(){
        return $this->belongsTo('App\Models\Book', 'book_id','id');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }
}