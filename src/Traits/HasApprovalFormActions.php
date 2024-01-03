<?php

namespace dth001\Approvals\Traits;

use dth001\Approvals\Forms\Actions\ApproveAction;
use dth001\Approvals\Forms\Actions\DiscardAction;
use dth001\Approvals\Forms\Actions\RejectAction;
use dth001\Approvals\Forms\Actions\SubmitAction;
use Filament\Actions\Action;

trait HasApprovalFormActions
{

    protected function getFormActions(): array
    {
        return [
            ...$this->formActions(),
            ...parent::getFormActions(),
        ];
    }

    protected function formActions(): array
    {
        return [
            ApproveAction::make(),
            RejectAction::make(),
            DiscardAction::make(),
            SubmitAction::make()
        ];
    }
}
