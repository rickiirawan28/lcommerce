<?php

namespace App\View\Components;

use App\Models\Cart;
use Illuminate\View\Component;

class Navbar extends Component
{
    private $items;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = Cart::get()->where('user_id', auth()->id());
    }

    public function countItems()
    {
        $items = 0;
        foreach ($this->items as $item) {
            $items += $item->quantity;
        }
        return $items;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.navbar');
    }
}
