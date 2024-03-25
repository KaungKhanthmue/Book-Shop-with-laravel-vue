<?php

namespace App\Filament\Resources\ContributorRequestResource\Pages;

use App\Filament\Resources\ContributorRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditContributorRequest extends EditRecord
{
    protected static string $resource = ContributorRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
