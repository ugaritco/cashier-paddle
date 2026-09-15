<?php

namespace Ugarit\Paddle\Events;

use Heritage\Database\Eloquent\Model;
use Heritage\Foundation\Events\Dispatchable;
use Heritage\Queue\SerializesModels;
use Ugarit\Paddle\Customer;

class CustomerUpdated
{
    use Dispatchable, SerializesModels;

    /**
     * The billable entity.
     *
     * @var \Heritage\Database\Eloquent\Model
     */
    public $billable;

    /**
     * The customer instance.
     *
     * @var \Ugarit\Paddle\Customer
     */
    public $customer;

    /**
     * The webhook payload.
     *
     * @var array
     */
    public $payload;

    /**
     * Create a new event instance.
     *
     * @param  \Heritage\Database\Eloquent\Model  $billable
     * @param  \Ugarit\Paddle\Customer  $customer
     * @param  array  $payload
     * @return void
     */
    public function __construct(Model $billable, Customer $customer, array $payload)
    {
        $this->billable = $billable;
        $this->customer = $customer;
        $this->payload = $payload;
    }
}
