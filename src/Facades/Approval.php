<?php

namespace dth001\Approvals\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \EightyNine\Approval\Approval
 */
class Approval extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \dth001\Approval\Approval::class;
    }
}
