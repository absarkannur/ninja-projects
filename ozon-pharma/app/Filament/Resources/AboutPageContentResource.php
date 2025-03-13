<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutPageContentResource\Pages;
use App\Filament\Resources\AboutPageContentResource\RelationManagers;
use App\Models\AboutPageContent;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use FilamentTiptapEditor\TiptapEditor;

class AboutPageContentResource extends Resource
{
    protected static ?string $model = AboutPageContent::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationGroup = 'Pages';
    protected static ?string $navigationLabel = 'About Page';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('page_title'),
                Section::make('Block 1')
                    ->schema([
                        TiptapEditor::make('content_1')->label('')->columnSpanFull()
                    ]),
                Section::make('Block 2')
                    ->schema([
                        TiptapEditor::make('content_2')->label('')->columnSpanFull()
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('page_title')
            ])
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
            'index' => Pages\ListAboutPageContents::route('/'),
            'create' => Pages\CreateAboutPageContent::route('/create'),
            'edit' => Pages\EditAboutPageContent::route('/{record}/edit'),
        ];
    }
}
