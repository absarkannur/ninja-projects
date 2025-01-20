<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FacilitiesCategoryResource\Pages;
use App\Filament\Resources\FacilitiesCategoryResource\RelationManagers;
use App\Models\FacilitiesCategory;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Str;

class FacilitiesCategoryResource extends Resource
{
    protected static ?string $model = FacilitiesCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('facility_category_name')
                    ->live(onBlur:true)
                    ->afterStateUpdated(function( string $operation, string $state, Forms\Set $set ){
                        //if($operation == 'edit') return false;
                        $set( 'facility_category_slug', Str::slug($state) );
                    })->required()->label('Facility Category'),
                TextInput::make('facility_category_slug')->readOnly()->required()->label('Slug'),
                Textarea::make('facility_category_description')->label('Description')->columnSpanFull(),
                FileUpload::make('facility_category_icon')->label('Select Icon'),
                FileUpload::make('facility_category_image')->label('Select Image')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('facility_category_name')->label('Facility Category')
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
            'index' => Pages\ListFacilitiesCategories::route('/'),
            'create' => Pages\CreateFacilitiesCategory::route('/create'),
            'edit' => Pages\EditFacilitiesCategory::route('/{record}/edit'),
        ];
    }
}
