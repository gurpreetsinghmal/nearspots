<?php

namespace App\View\Components;

use Illuminate\View\Component;

class btncategories extends Component
{
    public $link;
    public function __construct($link)
    {
        $this->link=$link;
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
