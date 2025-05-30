<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiteInfoResource\Pages;
use App\Filament\Resources\SiteInfoResource\RelationManagers;
use App\Models\SiteInfo;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;

class SiteInfoResource extends Resource
{
    protected static ?string $model = SiteInfo::class;

    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';
    protected static ?string $navigationLabel = 'Website Info';
    protected static ?string $navigationGroup = 'Admin';
    protected static ?int $navigationSort = 9;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('Compnay Address')
                    ->schema([
                        Textarea::make('compnay_address')->columnSpanFull(),
                        TextInput::make('compnay_email')->email(),
                        TextInput::make('compnay_phone1')->label('Phone #1'),
                        TextInput::make('compnay_phone2')->label('Phone #2'),

                    ]),
                Fieldset::make('Compnay Info')
                    ->schema([
                        TextInput::make('year_experience')->label('Year Experience'),
                        TextInput::make('customers')->label('Happy Customers'),
                        TextInput::make('client_satisfaction')->label('Client Satisfaction'),
                        TextInput::make('established')->label('We Established On'),

                    ]),
                Fieldset::make('Compnay Social Media')
                    ->schema([
                        TextInput::make('compnay_fb')->label('Facebook'),
                        TextInput::make('compnay_insta')->label('Instagram'),
                        TextInput::make('compnay_x')->label('X (Twitter)'),
                        TextInput::make('compnay_linkd')->label('LinkedIn'),
                    ]),
                Fieldset::make('Compnay Logo')
                    ->schema([
                        FileUpload::make('header_logo'),
                        FileUpload::make('mobile_header_logo'),
                        FileUpload::make('footer_logo'),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // TextColumn::make('compnay_address'),
                TextColumn::make('compnay_email'),
                TextColumn::make('compnay_phone1'),
                TextColumn::make('compnay_phone2'),
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
            'index' => Pages\ListSiteInfos::route('/'),
            'create' => Pages\CreateSiteInfo::route('/create'),
            'edit' => Pages\EditSiteInfo::route('/{record}/edit'),
        ];
    }
}
