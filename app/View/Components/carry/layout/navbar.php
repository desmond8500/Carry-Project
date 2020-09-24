<?php

namespace App\View\Components\carry\layout;

use Illuminate\View\Component;

class navbar extends Component
{
    public $menus;

    public function __construct($menus)
    {
        $this->menus = $menus;
    }

    public function render()
    {
        return view('components.carry.layout.navbar');
    }
}
