<?php

namespace App\Filament\Resources\ContributorRequestResource\Pages;

use App\Filament\Resources\ContributorRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewContributorRequest extends ViewRecord
{
    protected static string $resource = ContributorRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
