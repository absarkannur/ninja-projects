<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TherapeuticCategoriesResource\Pages;
use App\Filament\Resources\TherapeuticCategoriesResource\RelationManagers;
use App\Models\TherapeuticCategories;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class TherapeuticCategoriesResource extends Resource
{
    protected static ?string $model = TherapeuticCategories::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Products Section';
    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('therapeutic_category_name')
                ->live(onBlur:true)
                ->afterStateUpdated(function( string $operation, string $state, Forms\Set $set ){
                    //if($operation == 'edit') return false;
                    $set( 'therapeutic_category_slug', Str::slug($state) );
                })->required()->label('Therapeutic Category'),
                TextInput::make('therapeutic_category_slug')->readOnly()->required()->label('Slug'),
                FileUpload::make('therapeutic_category_image')->label('Select Image')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('therapeutic_category_name')->label('Therapeutic Category')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()->label(''),
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
            'index' => Pages\ListTherapeuticCategories::route('/'),
            'create' => Pages\CreateTherapeuticCategories::route('/create'),
            'edit' => Pages\EditTherapeuticCategories::route('/{record}/edit'),
        ];
    }
}
