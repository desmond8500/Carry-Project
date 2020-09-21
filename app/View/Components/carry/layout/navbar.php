<?php

namespace App\View\Components\carry\layout;

use Illuminate\View\Component;

class navbar extends Component
{
    public $menus;

    public function __construct()
    {
        $this->menus = json_decode('
            [
                { "name": "Acceuil", "route": "carry.index" },
                { "name": "Notes", "route": "devnotes" }
            ]
        ');
    }


    public function render()
    {
        $menus = $this->menus;
        return view('components.carry.layout.navbar',compact('menus'));
    }
}
