<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FlipCard extends Component
{
    public $icon;
    public $front;
    public $back;

    public function __construct($icon = null, $front, $back)
    {
        $this->icon = $icon;
        $this->front = $front;
        $this->back = $back;
    }

    public function render()
    {
        return view('components.flip-card');
    }
}
