<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JourneyPageResource\Pages;
use App\Filament\Resources\JourneyPageResource\RelationManagers;
use App\Models\JourneyPage;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JourneyPageResource extends Resource
{
    protected static ?string $model = JourneyPage::class;

    protected static ?string $navigationGroup = 'Pages';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Journey';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Banner Section')->schema([
                    FileUpload::make('banner_video')->directory('public'),
                    FileUpload::make('banner_video_poster')->directory('public'),
                    TextInput::make('banner_title'),
                    TextInput::make('banner_sub_title')
                ]),
                Section::make('Descriptions Section')->schema([
                    TextInput::make('excellence_title'),
                    Textarea::make('excellence_desc'),
                ]),
                Section::make('Excellence Section')->schema([
                    Repeater::make('excellence')->schema([
                        TextInput::make('title'),
                        FileUpload::make('image')->directory('public')
                    ])->columns(2)
                ]),
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
            'index' => Pages\ListJourneyPages::route('/'),
            'create' => Pages\CreateJourneyPage::route('/create'),
            'edit' => Pages\EditJourneyPage::route('/{record}/edit'),
        ];
    }
}
