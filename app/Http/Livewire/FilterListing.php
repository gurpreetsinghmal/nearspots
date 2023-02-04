<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class FilterListing extends Component
{
    public $a=[0,1,2,3,4];
   
    public function render()
    {
        $json=Category::paginate(3);
        
        return view('livewire.filter-listing',["json"=>$json]);
    }
}
