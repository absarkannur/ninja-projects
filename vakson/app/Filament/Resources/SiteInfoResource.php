<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiteInfoResource\Pages;
use App\Filament\Resources\SiteInfoResource\RelationManagers;
use App\Models\SiteInfo;
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

class SiteInfoResource extends Resource
{
    protected static ?string $model = SiteInfo::class;

    protected static ?string $navigationGroup = 'Admin';
    protected static ?string $navigationLabel = 'General';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 17;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Address')->schema([
                    Textarea::make('company_address'),
                    TextInput::make('company_email'),
                    TextInput::make('company_phone1'),
                    TextInput::make('company_phone2'),
                ]),
                Section::make('Social Media')->schema([
                    TextInput::make('company_fb'),
                    TextInput::make('company_ln'),
                    TextInput::make('company_in'),
                    TextInput::make('company_yb'),
                ]),

                Section::make('Logo')->schema([
                    FileUpload::make('logo')->directory('icons')
                ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('company_address')
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
            'index' => Pages\ListSiteInfos::route('/'),
            'create' => Pages\CreateSiteInfo::route('/create'),
            'edit' => Pages\EditSiteInfo::route('/{record}/edit'),
        ];
    }
}
