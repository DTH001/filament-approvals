<?php

namespace dth001\Approvals\Filament\Resources\ApprovalFlowResource\Pages;

use dth001\Approvals\Filament\Resources\ApprovalFlowResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use RingleSoft\LaravelProcessApproval\Facades\ProcessApproval;
use Illuminate\Support\Str;

class CreateApprovalFlow extends CreateRecord
{
    protected static string $resource = ApprovalFlowResource::class;


    protected function handleRecordCreation(array $data): Model
    {
        $class = config("process_approval.models_path") . "\\" .$data["name"];
        if(Str::startsWith($class, '\\')){
            $class = Str::replaceFirst("\\", "", $class);
        }
        return ProcessApproval::createFlow(
            $data["name"],
            $class
        );
    }
}
