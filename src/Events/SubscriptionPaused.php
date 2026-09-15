<?php

namespace Ugarit\Paddle\Events;

use Heritage\Foundation\Events\Dispatchable;
use Heritage\Queue\SerializesModels;
use Ugarit\Paddle\Subscription;

class SubscriptionPaused
{
    use Dispatchable, SerializesModels;

    /**
     * The subscription instance.
     *
     * @var \Ugarit\Paddle\Subscription
     */
    public $subscription;

    /**
     * The webhook payload.
     *
     * @var array
     */
    public $payload;

    /**
     * Create a new event instance.
     *
     * @param  \Ugarit\Paddle\Subscription  $subscription
     * @param  array  $payload
     * @return void
     */
    public function __construct(Subscription $subscription, array $payload)
    {
        $this->subscription = $subscription;
        $this->payload = $payload;
    }
}
