<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VisionWidgetsResource\Pages;
use App\Filament\Resources\VisionWidgetsResource\RelationManagers;
use App\Models\VisionWidgets;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VisionWidgetsResource extends Resource
{
    protected static ?string $model = VisionWidgets::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Widgets';
    protected static ?int $navigationSort = 11;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Textarea::make('title')->columnSpanFull(),
                RichEditor::make('content')->columnSpanFull(),
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
            'index' => Pages\ListVisionWidgets::route('/'),
            'create' => Pages\CreateVisionWidgets::route('/create'),
            'edit' => Pages\EditVisionWidgets::route('/{record}/edit'),
        ];
    }
}
