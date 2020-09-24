<?php

namespace App\View\Components;

use Illuminate\View\Component;

class modal extends Component
{
    public $modal;

    public function __construct()
    {
    }

    public function render()
    {
        return view('components.modal');
    }
}
