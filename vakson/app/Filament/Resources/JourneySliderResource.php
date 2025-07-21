<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JourneySliderResource\Pages;
use App\Filament\Resources\JourneySliderResource\RelationManagers;
use App\Models\JourneySlider;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JourneySliderResource extends Resource
{
    protected static ?string $model = JourneySlider::class;

    protected static ?string $navigationGroup = 'List';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Journey Slider';
    protected static ?int $navigationSort = 9;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title'),
                FileUpload::make('image')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                ImageColumn::make('image')
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
            'index' => Pages\ListJourneySliders::route('/'),
            'create' => Pages\CreateJourneySlider::route('/create'),
            'edit' => Pages\EditJourneySlider::route('/{record}/edit'),
        ];
    }
}
