<?php

namespace App\Filament\Resources\ProvinceResource\Pages;

use App\Filament\Resources\ProvinceResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProvince extends CreateRecord
{
    protected static string $resource = ProvinceResource::class;

    protected static ?string $title = 'Registrar provincia';

    protected static bool $canCreateAnother = false;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
