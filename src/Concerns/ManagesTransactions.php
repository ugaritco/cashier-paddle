<?php

namespace Ugarit\Paddle\Concerns;

use Ugarit\Paddle\Cashier;

trait ManagesTransactions
{
    /**
     * Get all of the transactions for the Billable model.
     *
     * @return \Heritage\Database\Eloquent\Relations\MorphMany
     */
    public function transactions()
    {
        return $this->morphMany(Cashier::$transactionModel, 'billable')->orderByDesc('billed_at');
    }
}
