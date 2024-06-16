<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanyTypeResource\Pages;
use App\Filament\Resources\CompanyTypeResource\RelationManagers;
use App\Models\CompanyType;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;

class CompanyTypeResource extends Resource
{
    protected static ?string $model = CompanyType::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';

    protected static ?string $navigationGroup = 'Configuraciones';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->label('Nombre')
                    ->maxLength(60),
                Forms\Components\TextInput::make('abbreviation')
                    ->required()
                    ->label('Tipo')
                    ->maxLength(5),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nombre')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('abbreviation')
                    ->label('Tipo')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->hiddenFilterIndicators()
            ->actions([
                EditAction::make()->label('Editar'),
                DeleteAction::make()->label('Eliminar'),
            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make(),
                // ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getNavigationLabel(): string
    {
        return 'Tipo empresa';
    }

    public static function getPluralLabel(): ?string
    {
        return 'Tipo empresa';
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCompanyTypes::route('/'),
            'create' => Pages\CreateCompanyType::route('/create'),
            'edit' => Pages\EditCompanyType::route('/{record}/edit'),
        ];
    }
}
