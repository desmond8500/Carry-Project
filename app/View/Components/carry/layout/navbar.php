<?php

namespace App\View\Components\carry\layout;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class navbar extends Component
{
    public $menus;
    public $user;

    public function __construct($menus)
    {
        $this->menus = $menus;
        $this->user = Auth::user();
    }

    public function render()
    {
        return view('components.carry.layout.navbar');
    }
}
