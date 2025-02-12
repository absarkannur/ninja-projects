<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FacilitiesResource\Pages;
use App\Filament\Resources\FacilitiesResource\RelationManagers;
use App\Models\Facilities;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use FilamentTiptapEditor\TiptapEditor;

class FacilitiesResource extends Resource
{
    protected static ?string $model = Facilities::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Facilities';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('facilities_categories_id')
                    ->relationship( 'facilities_categories', 'facility_category_name' )
                    ->preload()
                    ->required(),
                FileUpload::make('facilities_inner_banner')->label('Banner Image')->columnSpanFull(),
                TiptapEditor::make('facilities_content')->columnSpanFull()
                // MarkdownEditor::make('facilities_content')->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('facilities_categories.facility_category_name')->label('Facilities'),
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
            'index' => Pages\ListFacilities::route('/'),
            'create' => Pages\CreateFacilities::route('/create'),
            'edit' => Pages\EditFacilities::route('/{record}/edit'),
        ];
    }
}
