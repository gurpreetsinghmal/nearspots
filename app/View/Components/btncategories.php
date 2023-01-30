<?php

namespace App\View\Components;

use Illuminate\View\Component;

class btncategories extends Component
{
    public $name;
    public function __construct($name)
    {
        $this->name=$name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.btn-categories');
    }
}
