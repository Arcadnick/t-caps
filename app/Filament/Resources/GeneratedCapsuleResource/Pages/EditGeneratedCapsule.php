<?php

namespace App\Filament\Resources\GeneratedCapsuleResource\Pages;

use App\Filament\Resources\GeneratedCapsuleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGeneratedCapsule extends EditRecord
{
    protected static string $resource = GeneratedCapsuleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
