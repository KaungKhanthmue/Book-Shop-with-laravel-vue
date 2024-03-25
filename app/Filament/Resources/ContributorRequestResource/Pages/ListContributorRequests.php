<?php

namespace App\Filament\Resources\ContributorRequestResource\Pages;

use App\Filament\Resources\ContributorRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContributorRequests extends ListRecords
{
    protected static string $resource = ContributorRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
