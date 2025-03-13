<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactPageContentResource\Pages;
use App\Filament\Resources\ContactPageContentResource\RelationManagers;
use App\Models\ContactPageContent;
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

class ContactPageContentResource extends Resource
{
    protected static ?string $model = ContactPageContent::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationGroup = 'Pages';
    protected static ?string $navigationLabel = 'Contact Page';
    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Block 1')
                    ->schema([
                        TextInput::make('page_title')->label('Page Title'),
                        TiptapEditor::make('content_1')->label('Page Content')->columnSpanFull()
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
            'index' => Pages\ListContactPageContents::route('/'),
            'create' => Pages\CreateContactPageContent::route('/create'),
            'edit' => Pages\EditContactPageContent::route('/{record}/edit'),
        ];
    }
}
