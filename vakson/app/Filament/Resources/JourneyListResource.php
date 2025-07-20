<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JourneyListResource\Pages;
use App\Filament\Resources\JourneyListResource\RelationManagers;
use App\Models\JourneyList;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JourneyListResource extends Resource
{
    protected static ?string $model = JourneyList::class;

    protected static ?string $navigationGroup = 'List';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Journey List';
    protected static ?int $navigationSort = 8;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('journey_image')->directory('journey'),
                Section::make('')->schema([
                    TextInput::make('journey_title'),
                    Textarea::make('journey_desc'),
                    TextInput::make('journey_year')
                ]),
                Section::make('')->schema([
                    Repeater::make('journey_properties')->schema([
                        FileUpload::make('image')->directory('journey'),
                        TextInput::make('year'),
                        TextInput::make('title'),
                        TextInput::make('location'),
                        Textarea::make('desc')->label('Description')
                    ])
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('journey_title')
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
            'index' => Pages\ListJourneyLists::route('/'),
            'create' => Pages\CreateJourneyList::route('/create'),
            'edit' => Pages\EditJourneyList::route('/{record}/edit'),
        ];
    }
}
