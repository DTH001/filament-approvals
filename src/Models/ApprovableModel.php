<?php

namespace dth001\Approvals\Models;

use dth001\Approvals\Traits\Approvable;
use Illuminate\Database\Eloquent\Model;
use RingleSoft\LaravelProcessApproval\Contracts\ApprovableModel as ContractsApprovableModel;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class ApprovableModel extends Authenticatable implements ContractsApprovableModel
{
    use Approvable;
    use HasRoles;


}
