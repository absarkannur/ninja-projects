<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostsResource\Pages;
use App\Filament\Resources\PostsResource\RelationManagers;
use App\Models\Posts;
use App\Models\Categories;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Markdown;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class PostsResource extends Resource
{
    protected static ?string $model = Posts::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';
    protected static ?string $navigationGroup = 'Insights';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('')
                    ->schema([
                        TextInput::make('title')->required()
                        ->live(onBlur:true)
                        ->afterStateUpdated(function( string $operation, string $state, Forms\Set $set ){
                            //if($operation == 'edit') return false;
                            $set( 'slug', Str::slug($state) );
                        }),
                        TextInput::make('slug')->unique(ignoreRecord:true)->required(),
                        TagsInput::make('tags'),
                    
                        Select::make('categories_id')
                            ->label('Category')
                            ->relationship( 'categories', 'name' )
                            ->searchable(false),
                            // ->options(Categories::all()->pluck('name','id')),

                        MarkdownEditor::make('content')->columnSpanFull(),
                    ])->columnSpan(2)->columns(2),

                Section::make('Meta')
                    ->schema([
                        FileUpload::make('thumbnail')->disk('public')->directory('thumbnails')->columnSpanFull(),
                        Checkbox::make('published'),
                    ])->columnSpan(1)

            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->sortable()->searchable(),
                TextColumn::make('categories.name'),
                ImageColumn::make('thumbnail'),
                TextColumn::make('created_at')
                    ->label("Published On")
                    ->date()
            ])
            ->filters([
                Filter::make('Published Post')->query(
                    function ($query){
                        return $query->where( 'published', true );
                    }
                ),
                SelectFilter::make( 'categroies_id' )
                    ->label('Category')
                    ->relationship( 'categories', 'name' )
                    ->preload()
                    ->multiple()
            ])
            ->actions([
                Tables\Actions\EditAction::make()->label(''),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePosts::route('/create'),
            'edit' => Pages\EditPosts::route('/{record}/edit'),
        ];
    }
}
