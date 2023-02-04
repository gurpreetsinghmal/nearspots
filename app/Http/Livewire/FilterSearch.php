<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Subcategory;
use Livewire\Component;

class FilterSearch extends Component
{
    public $categorylist;
    public $subcategorylist;

    public $filtercategory=[];
    public $filtersubcategory=[];
    
    public function mount(){
        $this->subcategorylist=Subcategory::all();
        $this->categorylist=Category::all();
    }
    

    public function render()
    {
       
        return view('livewire.filter-search');
    }
}
