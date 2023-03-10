<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Subcategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'subcat_name',
        'category_id',
        'slug_name'
    ];
    public function category()
    {
     return $this->belongsTo(Category::class);
    }
   
}
