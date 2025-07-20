<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomePageResource\Pages;
use App\Filament\Resources\HomePageResource\RelationManagers;
use App\Models\HomePage;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
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

class HomePageResource extends Resource
{
    protected static ?string $model = HomePage::class;

    protected static ?string $navigationGroup = 'Pages';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Home';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Banner Section')->schema([
                    TextInput::make('banner_title'),
                    TextInput::make('banner_sub_title'),
                    TextInput::make('banner_url'),
                    FileUpload::make('banner_video')->directory('public'),
                    FileUpload::make('banner_video_poster')->directory('public'),
                ]),
                Section::make('About Section')->schema([
                    TextInput::make('about_title'),
                    MarkdownEditor::make('about_sub_title'),
                    Repeater::make('about_numbers')->schema([
                        TextInput::make('title')->required(),
                        TextInput::make('value')->required(),
                        FileUpload::make('icon')->directory('icons')->previewable(false)->required()
                    ])->label('Count')->columns(3)
                ]),
                Section::make('Journey Section')->schema([
                    TextInput::make('journey_title'),
                    TextInput::make('journey_sub_title'),
                    Textarea::make('journey_desc')
                ]),
                Section::make('Footer Section')->schema([
                    FileUpload::make('footer_video')->directory('public'),
                    FileUpload::make('footer_video_poster')->directory('public'),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('banner_title')->label('Home Page')
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
            'index' => Pages\ListHomePages::route('/'),
            'create' => Pages\CreateHomePage::route('/create'),
            'edit' => Pages\EditHomePage::route('/{record}/edit'),
        ];
    }
}
