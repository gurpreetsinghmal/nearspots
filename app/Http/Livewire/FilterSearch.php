<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Shop;
use App\Models\State;
use App\Models\City;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;



class FilterSearch extends Component
{
    use WithPagination;
    public $categorylist;
    public $subcategorylist;
    public $statelist;
    public $citylist;

    public $selstate;
    public $selcity;
    public $cat,$subcat;

    
    public $filtercategory=[];
    public $filtersubcategory=[];
    
    public function mount($cat=null,$subcat=null){
        $this->categorylist=Category::all();
        $this->subcategorylist=Subcategory::all();
        $this->statelist=State::orderBy('name')->get();
        $this->citylist=City::orderBy('name')->get();

        if($cat!=null)
        {$this->cat=$cat;
         $c=Category::where('slug_name','=',$cat)->get();
         $this->subcategorylist=Subcategory::where('category_id','=',$c[0]->id)->get();
        }
        if($subcat!=null)
        {$this->subcat=$subcat;
            //remove all further list below sub category
         $this->subcategorylist=Subcategory::where('category_id','<',0)->get();
        }
       
        $this->myfunc($cat,$subcat);
    }
    public function myfunc($cat,$subcat){
       
        if($cat!=null){
            foreach($this->categorylist as $s)
            {   
                if($s['slug_name']==$cat)
                $this->filtercategory[]=$s['id'];    
            }
         }
        else{
            foreach($this->categorylist as $s)
            {   
               
                $this->filtercategory[]=$s['id'];    
            }
        }

        if($subcat!=null){
            foreach($this->subcategorylist as $s)
            {   
                if($s['slug_name']==$cat)
                $this->filtersubcategory[]=$s['id'];    
            }
         }
        else{
            foreach($this->subcategorylist as $s)
            {   
               
                if($cat==null || $s->category->slug_name==$cat)
                $this->filtersubcategory[]=$s['id'];    
            }
        }
        
    
      
    }
    

    public function render()
    {
        $item_per_page=10;
              
        if($this->selstate!=null)
        { 
            $query=Shop::WhereIn('state_id',[$this->selstate])->whereIn('category_id',$this->filtercategory)->WhereIn('subcategory_id',$this->filtersubcategory)->paginate($item_per_page);
            
            $map_query=Shop::WhereIn('state_id',[$this->selstate])->whereIn('category_id',$this->filtercategory)->WhereIn('subcategory_id',$this->filtersubcategory)->get();
        
            if($this->selcity!=null)
            { 
                $query=Shop::WhereIn('state_id',[$this->selstate])
                ->WhereIn('city_id',[$this->selcity])->where(function($query) {
                    $query->whereIn('category_id',$this->filtercategory)
                    ->orWhere('subcategory_id',$this->filtersubcategory);
                })->paginate($item_per_page); 
                
                $map_query=Shop::WhereIn('state_id',[$this->selstate])
                ->WhereIn('city_id',[$this->selcity])->where(function($query) {
                    $query->whereIn('category_id',$this->filtercategory)
                    ->orWhere('subcategory_id',$this->filtersubcategory);
                })->get();
                
           
            }
        
        }
         else
        {
           
            $query=Shop::whereIn('category_id',$this->filtercategory)->orWhereIn('subcategory_id',$this->filtersubcategory)
            ->paginate($item_per_page);

            $map_query=Shop::whereIn('category_id',$this->filtercategory)->orWhereIn('subcategory_id',$this->filtersubcategory)
            ->get();
        }

           
        
        return view('livewire.filter-search',[
         "shops_pages"=>$query,
         "shops"=> $map_query,
         "placeholder"=>"https://media.istockphoto.com/id/1264040074/vector/placeholder-rgb-color-icon.jpg?s=612x612&w=0&k=20&c=0ZFUNL28htu-zHRF9evishuNKYQAZVrfK0-TZNjnX3U="]);
    }

    public function updatedSelState($stateid){
        $this->citylist=City::where('state_id',$stateid)->orderBy('name')->get();
    }

   
    
}
