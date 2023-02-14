<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\State;
use App\Models\City;

class Shop extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'logo',
        'banner',
        'lat',
        'lng',
        'category_id',
        'subcategory_id',
        'state_id',
        'city_id',
        'slug_name'

    ];

    public function category()
    {
     return $this->belongsTo(Category::class);
    }
    public function subcategory()
    {
     return $this->belongsTo(Subcategory::class);
    }
    public function state()
    {
     return $this->belongsTo(State::class);
    }
    
    public function city()
    {
     return $this->belongsTo(City::class);
    }
    
}
