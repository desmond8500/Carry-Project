<?php

namespace App\View\Components\carry;

use Illuminate\View\Component;

class carInfo extends Component
{
    public $car;

    public function __construct($car)
    {
        $this->car = $car;
    }

    public function render()
    {
        return view('components.carry.car-info');
    }
}
