<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AddressesResource\Pages;
use App\Filament\Resources\AddressesResource\RelationManagers;
use App\Models\Addresses;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
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

class AddressesResource extends Resource
{
    protected static ?string $model = Addresses::class;

    protected static ?string $navigationIcon = 'heroicon-o-map';
    protected static ?string $navigationGroup = "Store";
    protected static ?string $navigationParentItem = "Customers";
    protected static ?int $navigationSort = 7;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make()->schema([
                    Select::make('customers_id')
                        ->relationship( 'customers', 'customer_name' )
                        ->label('Customer Name')
                        ->searchable(false)
                        ->columnSpanFull()
                        ->required(),
                    Textarea::make('address_line_1'),
                    Textarea::make('address_line_2'),
                    Select::make('countries_id')
                        ->relationship( 'countries', 'country_name' )
                        ->label('Country')
                        ->searchable(true)
                        ->required(),
                    TextInput::make('city'),
                    TextInput::make('postal_code'),
                    TextInput::make('landmark'),
                    TextInput::make('phone_number'),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('address_line_1'),
                TextColumn::make('address_line_2'),
                TextColumn::make('countries.country_name'),
                TextColumn::make('phone_number'),
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
            'index' => Pages\ListAddresses::route('/'),
            'create' => Pages\CreateAddresses::route('/create'),
            'edit' => Pages\EditAddresses::route('/{record}/edit'),
        ];
    }
}
