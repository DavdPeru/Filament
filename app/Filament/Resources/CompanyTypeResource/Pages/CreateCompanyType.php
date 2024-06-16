<?php

namespace App\Filament\Resources\CompanyTypeResource\Pages;

use App\Filament\Resources\CompanyTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCompanyType extends CreateRecord
{
    protected static string $resource = CompanyTypeResource::class;

    protected static ?string $title = 'Registrar nuevo tipo empresa';

    protected static bool $canCreateAnother = false;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
