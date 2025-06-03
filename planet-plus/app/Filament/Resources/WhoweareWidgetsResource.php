<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WhoweareWidgetsResource\Pages;
use App\Filament\Resources\WhoweareWidgetsResource\RelationManagers;
use App\Models\WhoweareWidgets;
use Filament\Forms;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WhoweareWidgetsResource extends Resource
{
    protected static ?string $model = WhoweareWidgets::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Widgets';
    protected static ?int $navigationSort = 12;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Textarea::make('title')->columnSpanFull(),
                MarkdownEditor::make('content')->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
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
            'index' => Pages\ListWhoweareWidgets::route('/'),
            'create' => Pages\CreateWhoweareWidgets::route('/create'),
            'edit' => Pages\EditWhoweareWidgets::route('/{record}/edit'),
        ];
    }
}
