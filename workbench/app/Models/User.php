<?php

namespace Workbench\App\Models;

use Heritage\Foundation\Auth\User as Authenticable;
use Ugarit\Paddle\Billable;

class User extends Authenticable
{
    use Billable;

    protected $guarded = [];
}
