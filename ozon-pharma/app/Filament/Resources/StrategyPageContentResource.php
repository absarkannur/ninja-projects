<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StrategyPageContentResource\Pages;
use App\Filament\Resources\StrategyPageContentResource\RelationManagers;
use App\Models\StrategyPageContent;
use Doctrine\DBAL\Schema\Schema;
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

class StrategyPageContentResource extends Resource
{
    protected static ?string $model = StrategyPageContent::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationGroup = 'Pages';
    protected static ?string $navigationLabel = 'Strategy Page';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Block 1')
                    ->schema([
                        TextInput::make('page_title'),
                        RichEditor::make('page_description'),
                        FileUpload::make('page_image')
                    ]),
                Section::make('Block 2')
                    ->schema([
                        TiptapEditor::make('content_1')->label('')->columnSpanFull()
                    ]),
                Section::make('Block 4')
                    ->schema([
                        TiptapEditor::make('content_3')->label('')->columnSpanFull()
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
            'index' => Pages\ListStrategyPageContents::route('/'),
            'create' => Pages\CreateStrategyPageContent::route('/create'),
            'edit' => Pages\EditStrategyPageContent::route('/{record}/edit'),
        ];
    }
}
