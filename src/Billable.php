<?php

namespace Ugarit\Paddle;

use Ugarit\Paddle\Concerns\ManagesCustomer;
use Ugarit\Paddle\Concerns\ManagesSubscriptions;
use Ugarit\Paddle\Concerns\ManagesTransactions;
use Ugarit\Paddle\Concerns\PerformsCharges;

trait Billable
{
    use ManagesCustomer;
    use ManagesSubscriptions;
    use ManagesTransactions;
    use PerformsCharges;
}
