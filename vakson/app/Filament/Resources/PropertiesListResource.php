<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PropertiesListResource\Pages;
use App\Filament\Resources\PropertiesListResource\RelationManagers;
use App\Models\PropertiesList;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
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
                    Textarea::make('description')->rows(4)->columnSpanFull(),
                    FileUpload::make("thumbnail")->directory('thumbnail')

                ])->columns(2)->columnSpan(2),

                Section::make([

                    //
                    Select::make('types')
                        ->options([
                            'lease' => 'Lease',
                            'sale' => 'Sale'
                        ]),

                    Select::make('status')
                        ->options([
                            'available' => 'Available',
                            'leased' => 'Leased',
                            'sold' => 'Sold',
                        ]),

                    Checkbox::make('latest'),
                    Checkbox::make('template')->label('New Template'),

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
                    Textarea::make('location_google_map'),
                ])->columns(1)->columnSpan(2),

                Section::make([

                    Repeater::make('amenities')->schema([
                        TextInput::make('title'),
                        FileUpload::make('icon')->directory('icons')->previewable(false)
                    ])->columns(2)

                ])->columns(1)->columnSpan(2),

                Section::make([

                    Repeater::make('image_slider')->schema([
                        FileUpload::make('image')->directory('carousel')
                    ])->label('Property Carousel')

                ])->columns(1)->columnSpan(2),


                Section::make([

                    Repeater::make('convenient_location_distance')
                        ->schema([
                            TextInput::make('title'),
                            TextInput::make('value'),
                            TextInput::make('suffix'),
                        ])->columns(3),

                ])->columns(1)->columnSpan(2),

                Section::make([
                    Repeater::make('floor_plans')
                        ->schema([

                            TextInput::make('tab_header'),
                            Repeater::make('plan_image')->schema([
                                FileUpload::make('p_image')->label('Image')->directory('floor_plans')
                            ])

                        ]),

                ])->columns(1)->columnSpan(2),


                Section::make([
                    Repeater::make('gallery')
                        ->schema([

                            TextInput::make('tab_header'),
                            Repeater::make('gallery_image')->schema([
                                FileUpload::make('g_image')->label('Image')->directory('gallery')
                            ])

                        ]),
                ])->columns(1)->columnSpan(2),


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
