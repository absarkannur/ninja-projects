<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServicesCategoriesContentResource\Pages;
use App\Filament\Resources\ServicesCategoriesContentResource\RelationManagers;
use App\Models\ServicesCategoriesContent;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServicesCategoriesContentResource extends Resource
{
    protected static ?string $model = ServicesCategoriesContent::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Services';
    protected static ?string $navigationLabel = 'Service Contents';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('services_categories_id')
                    ->relationship( 'servicesCategories', 'service_category_name' )
                    ->preload()
                    ->required(),
                Section::make()
                    ->schema([
                        FileUpload::make('service_category_contect_image'),
                        RichEditor::make('service_category_contect_description')
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('service_category_contect_image')->label('Image')
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
            'index' => Pages\ListServicesCategoriesContents::route('/'),
            'create' => Pages\CreateServicesCategoriesContent::route('/create'),
            'edit' => Pages\EditServicesCategoriesContent::route('/{record}/edit'),
        ];
    }
}
