<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AdminAdmins extends Component
{
    public $admins;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($admins)
    {
        $this->admins = $admins;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin-admins');
    }
}
