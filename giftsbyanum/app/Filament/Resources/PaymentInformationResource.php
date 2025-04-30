<?php

namespace App\Filament\Resources;

use App\Filament\Clusters\PaymentsCluster;
use App\Filament\Resources\PaymentInformationResource\Pages;
use App\Filament\Resources\PaymentInformationResource\RelationManagers;
use App\Models\PaymentInformations;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PaymentInformationResource extends Resource
{
    protected static ?string $model = PaymentInformations::class;

    protected static ?string $cluster = PaymentsCluster::class;

    protected static ?string $navigationIcon = 'heroicon-o-credit-card';
    protected static ?int $navigationSort = 1;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('customers_id')
                    ->relationship( 'customers', 'customer_name' )
                    ->label('Customer Name')
                    ->searchable(false)
                    ->required(),
                Select::make('payment_types_id')
                    ->relationship( 'payment_types', 'payment_type' )
                    ->label('Payment Type')
                    ->searchable(false)
                    ->required(),
                TextInput::make('provider'),
                TextInput::make('card_holder_name'),
                TextInput::make('card_type'),
                TextInput::make('card_no'),
                TextInput::make('expiry_month'),
                TextInput::make('expiry_year')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('customers.customer_name'),
                TextColumn::make('payment_types.payment_type'),
                TextColumn::make('card_type'),
                TextColumn::make('provider'),
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
            'index' => Pages\ListPaymentInformations::route('/'),
            'create' => Pages\CreatePaymentInformations::route('/create'),
            'edit' => Pages\EditPaymentInformations::route('/{record}/edit'),
        ];
    }
}
