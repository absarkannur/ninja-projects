<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomePageContentResource\Pages;
use App\Filament\Resources\HomePageContentResource\RelationManagers;
use App\Models\HomePageContent;
use Filament\Forms;
use Filament\Forms\Components\Field;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use FilamentTiptapEditor\TiptapEditor;

class HomePageContentResource extends Resource
{
    protected static ?string $model = HomePageContent::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationGroup = 'Pages';
    protected static ?string $navigationLabel = 'Home Page';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Block 1')
                    ->schema([
                        TextInput::make('page_title')
                    ]),
                Section::make('Block 2')
                    ->schema([
                        TextInput::make('page_heading')->label('Heading'),
                        Textarea::make('page_description')->label('Description'),
                        TextInput::make('page_description_url')->label('#URL')
                    ]),
                Section::make('Block 3')
                    ->schema([
                        Fieldset::make('Banner Product')
                            ->schema([
                                TextInput::make('page_banner_product_title')->columnSpanFull()->label('Heading'),
                                Textarea::make('page_banner_product_description')->columnSpanFull()->label('Description'),
                                TextInput::make('page_banner_product_url')->columnSpanFull()->label('#URL')
                            ]),
                        Fieldset::make('Blue Section')
                            ->schema([
                                Textarea::make('page_banner_section_description')
                                    ->rows(4)
                                    ->columnSpanFull()->label('Banner Short Description'),
                                TextInput::make('page_banner_section_url')->columnSpanFull()->label('#URL')
                            ]),
                    ])->columnSpan(2),
                Section::make('Block 4')
                    ->schema([
                        TextInput::make('page_facilities_section_heading')->label('Facilities Heading')
                    ]),
                Section::make('Block 5')
                    ->schema([
                        TextInput::make('page_therapeutic_section_heading')->label('Therapeutic Heading')
                    ]),
                Section::make('Block 6')
                    ->schema([
                        TextInput::make('page_articles_section_heading')->label('Article Heading')
                    ]),
                Section::make('Block 7')
                    ->schema([
                        Fieldset::make('About Banner Section')
                            ->schema([
                                FileUpload::make('page_abouts_section_image')->columnSpanFull()->label('Banner Image'),
                                TextInput::make('page_abouts_section_image_text')->columnSpanFull()->label('Banner Image Text'),
                                TextInput::make('page_abouts_section_video_url')->columnSpanFull()->label('YouTube Video URL')
                            ]),
                        Fieldset::make('About Content Section')
                            ->schema([
                                TiptapEditor::make('page_abouts_section_content')->label('About Content')->columnSpanFull(),
                                TextInput::make('page_abouts_section_url')->columnSpanFull()->label('#URL')
                            ])
                    ])

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
            'index' => Pages\ListHomePageContents::route('/'),
            'create' => Pages\CreateHomePageContent::route('/create'),
            'edit' => Pages\EditHomePageContent::route('/{record}/edit'),
        ];
    }
}
