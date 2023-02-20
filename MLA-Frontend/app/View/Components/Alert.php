<?php

namespace App\View\Components;

use Carbon\Carbon;
use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public string $type;
    public string $title;
    public string $message;
    public string $icon;
    public string $now;

    public function __construct(Carbon $now, string $type, string $title, string $message, string $icon = '')
    {
        $this->type = $type;
        $this->title = $title;
        $this->message = $message;
        $this->icon = $icon;
        $this->now = $now->now()->format('d/m/Y H:i:s');
    }

    public function getTitleClass()
    {
        $titleClass = [
            'success' => 'text-green-50',
            'error' => 'text-red-50',
            'warning' => 'text-yellow-50',
        ];

        return $titleClass[$this->type];
    }

    public function getBgClass()
    {
        $bgClass = [
            'success' => 'bg-green-800',
            'error' => 'bg-red-800',
            'warning' => 'bg-yellow-800',
        ];

        return $bgClass[$this->type];
    }

    public function getMessageClass()
    {
        $messageClass = [
            'success' => 'text-green-700',
            'error' => 'text-red-700',
            'warning' => 'text-yellow-700',
        ];

        return $messageClass[$this->type];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
