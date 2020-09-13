<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Nicolaslopezj\Searchable\SearchableTrait;

class Product extends Model
{
    public function categories()
    {
        return $this->belongsToMany('App\category');
    }
    
    public function presentPrice()
    {
        $price = $this->price / 100;

        return number_format($price, 2, ',', ' ') . ' €';
    }
    
    public function scopeMightAlsoLike($query)
    {
        return $query->inRandomOrder()->take(4);
    }

 
}
