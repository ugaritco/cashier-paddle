<?php

namespace Ugarit\Paddle\Events;

use Heritage\Database\Eloquent\Model;
use Heritage\Foundation\Events\Dispatchable;
use Heritage\Queue\SerializesModels;
use Ugarit\Paddle\Transaction;

class TransactionUpdated
{
    use Dispatchable, SerializesModels;

    /**
     * The billable entity.
     *
     * @var \Heritage\Database\Eloquent\Model
     */
    public $billable;

    /**
     * The transaction instance.
     *
     * @var \Ugarit\Paddle\Transaction
     */
    public $transaction;

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
     * @param  \Ugarit\Paddle\Transaction  $transaction
     * @param  array  $payload
     * @return void
     */
    public function __construct(Model $billable, Transaction $transaction, array $payload)
    {
        $this->billable = $billable;
        $this->transaction = $transaction;
        $this->payload = $payload;
    }
}
