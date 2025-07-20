<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ValuesPageResource\Pages;
use App\Filament\Resources\ValuesPageResource\RelationManagers;
use App\Models\ValuesPage;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ValuesPageResource extends Resource
{
    protected static ?string $model = ValuesPage::class;

    protected static ?string $navigationGroup = 'Pages';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Values';
    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Banner Sections')->schema([
                    FileUpload::make('banner_image')->directory('public'),
                    TextInput::make('banner_title'),
                    Textarea::make('banner_sub_title'),
                ]),
                Section::make()->schema([
                    Repeater::make('values')->schema([
                        FileUpload::make('image')->directory('icons'),
                        TextInput::make('title'),
                        TextInput::make('desc'),
                    ])->columns(3)
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListValuesPages::route('/'),
            'create' => Pages\CreateValuesPage::route('/create'),
            'edit' => Pages\EditValuesPage::route('/{record}/edit'),
        ];
    }
}
