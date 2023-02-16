<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Checkbox extends Component
{
    public $name;
    public $labelText;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $labelText)
    {
        $this->name = $name;
        $this->labelText = $labelText;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.checkbox');
    }
}
