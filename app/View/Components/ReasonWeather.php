<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ReasonWeather extends Component
{

    public $weatherReport;
    /**
     * Create a new component instance.
     */
    public function __construct($weatherReport)
    {
        //
        $this->weatherReport = $weatherReport;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.reason-weather');
    }
}