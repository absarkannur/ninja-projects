<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactPageResource\Pages;
use App\Filament\Resources\ContactPageResource\RelationManagers;
use App\Models\ContactPage;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
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

class ContactPageResource extends Resource
{
    protected static ?string $model = ContactPage::class;

    protected static ?string $navigationGroup = 'Pages';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Contact';
    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('banner_image')->directory('public'),
                Section::make('')->schema([
                    TextInput::make('contact_title'),
                    Textarea::make('contact_description')
                ]),
                Section::make('Google Map')->schema([
                    Textarea::make('google_map')
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('contact_title')
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
            'index' => Pages\ListContactPages::route('/'),
            'create' => Pages\CreateContactPage::route('/create'),
            'edit' => Pages\EditContactPage::route('/{record}/edit'),
        ];
    }
}
