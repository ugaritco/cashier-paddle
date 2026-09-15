<?php

namespace Ugarit\Paddle\Components;

use Heritage\View\Component;
use Ugarit\Paddle\Checkout as PaddleCheckout;

class Button extends Component
{
    /**
     * Initialise the Button component class.
     */
    public function __construct(public PaddleCheckout $checkout)
    {
        //
    }

    /**
     * Get the view / view contents that represent the component.
     *
     * @return \Heritage\View\View|string
     */
    public function render()
    {
        return view('cashier::components.button');
    }
}
