<?php

namespace App\Filament\Resources\NationalityResource\Pages;

use App\Filament\Resources\NationalityResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateNationality extends CreateRecord
{
    protected static string $resource = NationalityResource::class;

    protected static ?string $title = 'Registrar un nueva nacionalidad';

    protected static bool $canCreateAnother = false;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
