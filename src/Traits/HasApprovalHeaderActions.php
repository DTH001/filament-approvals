<?php

namespace dth001\Approvals\Traits;


use dth001\Approvals\Forms\Actions\ApproveAction;
use dth001\Approvals\Forms\Actions\DiscardAction;
use dth001\Approvals\Forms\Actions\RejectAction;
use dth001\Approvals\Forms\Actions\SubmitAction;
use dth001\Approvals\Models\ApprovableModel;
use Exception;
use Filament\Actions\Action;

trait HasApprovalHeaderActions
{

    protected function getHeaderActions(): array
    {
        return [
            ...$this->getApprovalHeaderActions()
        ];
    }

    protected function getApprovalHeaderActions(): array
    {
        return [
            ApproveAction::make(),
            RejectAction::make(),
            DiscardAction::make(),
            SubmitAction::make(),
            $this->getOnCompletionAction()
                ->visible(fn (ApprovableModel $record) => $record->isApprovalCompleted())
        ];
    }

    /**
     * Get the completion action
     * 
     * @return Filament\Actions\Action
     * @throws Exception 
     */
    protected function getOnCompletionAction(): Action
    {
        throw new Exception("Completion action not defined");
    }
}
