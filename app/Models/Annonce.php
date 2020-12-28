<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
   

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }



    public function reservation(){
      
        return $this->hasOne(Resrvation::class);

    }


    protected $fillable = [
        'title', 'category', 'description','picture','price','location','surface','iduser'
       ];
}
