<?php

namespace App\View\Components;

use Illuminate\View\Component;

class maincategoryicons extends Component
{
    public $list;
    public function __construct($list)
    {
        $this->list=$list;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
       
        return view('components.maincategoryicons',["list"=>$this->list]);
    }
}
