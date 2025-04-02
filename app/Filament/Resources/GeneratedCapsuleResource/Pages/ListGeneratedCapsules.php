<?php

namespace App\Filament\Resources\GeneratedCapsuleResource\Pages;

use App\Filament\Resources\GeneratedCapsuleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGeneratedCapsules extends ListRecords
{
    protected static string $resource = GeneratedCapsuleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
