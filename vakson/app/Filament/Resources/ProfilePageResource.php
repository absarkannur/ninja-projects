<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfilePageResource\Pages;
use App\Filament\Resources\ProfilePageResource\RelationManagers;
use App\Models\ProfilePage;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
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

class ProfilePageResource extends Resource
{
    protected static ?string $model = ProfilePage::class;

    protected static ?string $navigationGroup = 'Pages';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Profile';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Banner Section')->schema([
                    FileUpload::make('banner_video')->directory('public'),
                    FileUpload::make('banner_video_poster')->directory('public'),
                ]),
                Section::make('Overview')->schema([
                    Textarea::make('description')
                ]),
                Section::make('Vision')->schema([
                    Textarea::make('vision')
                ]),
                Section::make('Mission')->schema([
                    Textarea::make('mission')
                ]),
                Section::make('Core Values')->schema([
                    Repeater::make('core_values')->schema([
                        TextInput::make('title'),
                        Textarea::make('desc')
                    ])->columns(2)
                ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('description')
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
            'index' => Pages\ListProfilePages::route('/'),
            'create' => Pages\CreateProfilePage::route('/create'),
            'edit' => Pages\EditProfilePage::route('/{record}/edit'),
        ];
    }
}
