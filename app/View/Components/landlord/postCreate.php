<?php

namespace App\View\Components\landlord;

use Illuminate\View\Component;

class postCreate extends Component
{
    public $categorys;
    public $locations;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($categories,$locations)
    {
        //
        $this->categorys=$categories;
        $this->locations=$locations;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.landlord.post-create');
    }
}
