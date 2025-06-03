<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BannerWidgetsResource\Pages;
use App\Filament\Resources\BannerWidgetsResource\RelationManagers;
use App\Models\BannerWidgets;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BannerWidgetsResource extends Resource
{
    protected static ?string $model = BannerWidgets::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Widgets';
    protected static ?int $navigationSort = 9;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('banner_slogan'),
                TextInput::make('banner_title'),
                Textarea::make('banner_description')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('banner_slogan'),
                TextColumn::make('banner_title'),
            ])
            ->paginated(false)
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListBannerWidgets::route('/'),
            'create' => Pages\CreateBannerWidgets::route('/create'),
            'edit' => Pages\EditBannerWidgets::route('/{record}/edit'),
        ];
    }
}
