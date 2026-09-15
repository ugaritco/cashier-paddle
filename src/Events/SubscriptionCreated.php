<?php

namespace Ugarit\Paddle\Events;

use Heritage\Database\Eloquent\Model;
use Heritage\Foundation\Events\Dispatchable;
use Heritage\Queue\SerializesModels;
use Ugarit\Paddle\Subscription;

class SubscriptionCreated
{
    use Dispatchable, SerializesModels;

    /**
     * The billable entity.
     *
     * @var \Heritage\Database\Eloquent\Model
     */
    public $billable;

    /**
     * The subscription instance.
     *
     * @var \Ugarit\Paddle\Subscription
     */
    public $subscription;

    /**
     * The payload array.
     *
     * @var array
     */
    public $payload;

    /**
     * Create a new event instance.
     *
     * @param  \Heritage\Database\Eloquent\Model  $billable
     * @param  \Ugarit\Paddle\Subscription  $subscription
     * @param  array  $payload
     * @return void
     */
    public function __construct(Model $billable, Subscription $subscription, array $payload)
    {
        $this->billable = $billable;
        $this->subscription = $subscription;
        $this->payload = $payload;
    }
}
