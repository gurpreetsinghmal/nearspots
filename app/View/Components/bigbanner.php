<?php

namespace App\View\Components;

use Illuminate\View\Component;

class bigbanner extends Component
{
    public $title,$subtitle;
    public function __construct($title,$subtitle)
    {
        $this->title=$title;
        $this->subtitle=$subtitle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.bigbanner');
    }
}
