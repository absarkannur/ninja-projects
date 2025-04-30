<?php

namespace App\Filament\Resources;

use App\Filament\Clusters\CategoriesCluster;
use App\Filament\Resources\SubCategoriesResource\Pages;
use App\Filament\Resources\SubCategoriesResource\RelationManagers;
use App\Models\SubCategories;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class SubCategoriesResource extends Resource
{
    protected static ?string $model = SubCategories::class;

    protected static ?string $cluster = CategoriesCluster::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 2;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('categories_id')
                    ->relationship( 'categories', 'category_name' )
                    ->label('Categories')
                    ->searchable(false)
                    ->required(),
                TextInput::make('sub_category_name')
                    ->live(onBlur:true)
                    ->afterStateUpdated(function( string $operation, string $state, Forms\Set $set ){
                        $set( 'sub_category_slug', Str::slug($state) );
                    })->required()->label('Category Name'),
                TextInput::make('sub_category_slug')->readOnly()->label('Slug')->required(),
                Textarea::make('sub_category_description')->rows(4)->label('Description')->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('sub_category_name')->label('Sub Categories'),
                TextColumn::make('categories.category_name')->label('Category')
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
            'index' => Pages\ListSubCategories::route('/'),
            'create' => Pages\CreateSubCategories::route('/create'),
            'edit' => Pages\EditSubCategories::route('/{record}/edit'),
        ];
    }
}
