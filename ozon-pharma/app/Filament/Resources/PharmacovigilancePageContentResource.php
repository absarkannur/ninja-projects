<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PharmacovigilancePageContentResource\Pages;
use App\Filament\Resources\PharmacovigilancePageContentResource\RelationManagers;
use App\Models\PharmacovigilancePageContent;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
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

class PharmacovigilancePageContentResource extends Resource
{
    protected static ?string $model = PharmacovigilancePageContent::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationGroup = 'Pages';
    protected static ?string $navigationLabel = 'Pharmacovigilance Page';
    protected static ?int $navigationSort = 4;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Block 1')
                    ->schema([
                        TextInput::make('page_title'),
                    ]),
                Section::make('Block 2')
                    ->schema([
                        TiptapEditor::make('content_1')->label('')->columnSpanFull()
                    ]),
                Section::make('Block 3')
                    ->schema([
                        FileUpload::make('page_image'),
                        RichEditor::make('page_description')->label('Description')
                    ]),
                Section::make('Block 4')
                    ->schema([
                        TiptapEditor::make('content_2')->label('')->columnSpanFull()
                    ]),
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
            'index' => Pages\ListPharmacovigilancePageContents::route('/'),
            'create' => Pages\CreatePharmacovigilancePageContent::route('/create'),
            'edit' => Pages\EditPharmacovigilancePageContent::route('/{record}/edit'),
        ];
    }
}
