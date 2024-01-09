<?php

namespace dth001\Approvals\Models;

use dth001\Approvals\Traits\Approvable;
use Illuminate\Database\Eloquent\Model;
use RingleSoft\LaravelProcessApproval\Contracts\ApprovableModel as ContractsApprovableModel;

class ApprovableModel extends Model implements ContractsApprovableModel
{
    use Approvable;


}
