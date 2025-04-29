<?php

namespace App\Filament\Resources\TrekkingPackageResource\Pages;

use App\Filament\Resources\TrekkingPackageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTrekkingPackages extends ListRecords
{
    protected static string $resource = TrekkingPackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
