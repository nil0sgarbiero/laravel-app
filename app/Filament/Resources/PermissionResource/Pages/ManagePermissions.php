<?php

namespace App\Filament\Resources\PermissionResource\Pages;

use App\Filament\Resources\PermissionResource;

use Filament\Actions\CreateAction;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePermissions extends ManageRecords
{
    protected static string $resource = PermissionResource::class;

    protected function getActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
