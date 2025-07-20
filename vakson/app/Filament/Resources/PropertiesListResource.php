<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PropertiesListResource\Pages;
use App\Filament\Resources\PropertiesListResource\RelationManagers;
use App\Models\PropertiesList;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Split;
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

class PropertiesListResource extends Resource
{
    protected static ?string $model = PropertiesList::class;

    protected static ?string $navigationGroup = 'List';
    protected static ?string $navigationIcon = 'heroicon-o-home-modern';
    protected static ?string $navigationLabel = 'Properties List';
    protected static ?int $navigationSort = 7;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Section::make([
                    TextInput::make('title')
                        ->required()
                        ->live(onBlur:true)
                        ->afterStateUpdated(function( string $operation, ?string $state, Forms\Set $set){
                            $set( 'slug', Str::slug($state) );
                        }),
                    TextInput::make('slug')->readOnly(),
                    TextInput::make('sub_title')->columnSpanFull(),
                    Textarea::make('description')->columnSpanFull()

                ])->columns(2)->columnSpan(2),

                Section::make([

                    // Types
                    // Status

                    Checkbox::make('latest')
                ])->columnSpan(1),

                Section::make([
                    FileUpload::make('banner_video')->directory('public'),
                    FileUpload::make('banner_video_poster')->directory('public'),
                ])->columns(2)->columnSpan(2),

                Section::make([
                    FileUpload::make('video')->label('Property Video')->directory('public'),
                    FileUpload::make('floor_paln_pdf')->directory('download'),
                    ])->columns(2)->columnSpan(2),

                    Section::make([
                        TextInput::make('location_name'),
                        FileUpload::make('location_image')->directory('public'),
                        Textarea::make('location_description'),
                ])->columns(1)->columnSpan(2),

                Section::make([])->columns(2)->columnSpan(2),

            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
            ])->defaultSort('id', 'desc')
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
            'index' => Pages\ListPropertiesLists::route('/'),
            'create' => Pages\CreatePropertiesList::route('/create'),
            'edit' => Pages\EditPropertiesList::route('/{record}/edit'),
        ];
    }
}
