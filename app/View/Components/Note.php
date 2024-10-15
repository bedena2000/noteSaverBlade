<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Note extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public $createdAt;
    public $content;
    public function __construct($title, $createdAt, $content)
    {
        $this->title = $title;
        $this->createdAt = $createdAt;
        $this->content = $content;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.note');
    }
}
