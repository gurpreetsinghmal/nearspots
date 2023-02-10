<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Subcategory;
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
        'city_id'

    ];

    public function category()
    {
     return $this->belongsTo(Category::class);
    }
    public function subcategory()
    {
     return $this->belongsTo(Subcategory::class);
    }
    
    public function city()
    {
     return $this->belongsTo(City::class);
    }
    
}
