<?php

namespace App\View\Components\landlord;

use Illuminate\View\Component;

class postEdit extends Component
{
    public $post;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($post)
    {
       $this->post= $post;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.landlord.post-edit');
    }
}
