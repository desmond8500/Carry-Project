<?php

namespace App\View\Components\carry;

use Illuminate\View\Component;

class cars extends Component
{
    public $car;

    public function __construct($car)
    {
        $this->car = $car;
    }

    public function render()
    {
        return view('components.carry.cars');
    }
}
