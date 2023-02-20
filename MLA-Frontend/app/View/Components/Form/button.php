<?php

namespace App\View\Components;

use Illuminate\View\Component;

class button extends Component
{
    public $type;
    public $variation;
    public $size;
    public $icon;
    public $iconPosition;
    public $text;


    public function __construct($type = 'button', $variation = 'primary', $size = 'md', $icon = "", $iconPosition = '', $text = '')
    {
        $this->type = $type;
        $this->variation = $variation;
        $this->size = $size;
        $this->icon = $icon;
        $this->iconPosition = $iconPosition;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.button');
    }
}
