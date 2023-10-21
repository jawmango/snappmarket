<?php

namespace App\View\Components;

use Illuminate\View\Component;

class gig extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $gigs;
    public $admin;
    
    public function __construct($gigs, $admin)
    {
    $this->gigs = $gigs;
    $this->admin = $admin;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.gig');
    }
}
