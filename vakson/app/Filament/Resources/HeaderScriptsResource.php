<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeaderScriptsResource\Pages;
use App\Filament\Resources\HeaderScriptsResource\RelationManagers;
use App\Models\HeaderScripts;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HeaderScriptsResource extends Resource
{
    protected static ?string $model = HeaderScripts::class;

    protected static ?string $navigationGroup = 'Admin';
    protected static ?string $navigationLabel = 'Headers';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 18;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Textarea::make('page_title')->rows(4)->columnSpanFull(),
                Textarea::make('description')->rows(4)->columnSpanFull(),
                Textarea::make('keywords')->rows(4)->columnSpanFull(),
                Textarea::make('scripts')->rows(10)->autosize()->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHeaderScripts::route('/'),
            'create' => Pages\CreateHeaderScripts::route('/create'),
            'edit' => Pages\EditHeaderScripts::route('/{record}/edit'),
        ];
    }
}
