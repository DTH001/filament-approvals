<div>
    <p class="px-3">
        <small>
            @if ($getRecord()->approvalStatus)
                {{ $getRecord()->approvalStatus->status }} by
                @if ($getRecord()->lastApproval)
                    {{ $getRecord()->lastApproval->approver_name }}
                @else
                    {{ optional($getRecord()->createdBy())->name ?? 'N/A' }}
                @endif
            @else
                Status not available
            @endif
        </small>
    </p>
    <p class="px-3 text-xs">
        <small>
            {{ $getRecord()->isApprovalCompleted() ? 'Completed' : 'In process' }}
        </small>
    </p>
</div>
