<?php

namespace App\View\Components\tenant;

use Illuminate\View\Component;

class PostIndex extends Component
{

    public $posts;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($posts)
    {
        $this->posts=$posts;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tenant.post-index');
    }
}
