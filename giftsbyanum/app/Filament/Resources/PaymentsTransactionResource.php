<?php

namespace App\Filament\Resources;

use App\Enums\PaymentStatus;
use App\Filament\Resources\PaymentsTransactionResource\Pages;
use App\Filament\Resources\PaymentsTransactionResource\RelationManagers;
use App\Models\PaymentsTransaction;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PaymentsTransactionResource extends Resource
{
    protected static ?string $model = PaymentsTransaction::class;

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';
    protected static ?string $navigationGroup = "Sales";
    protected static ?string $navigationParentItem = "Orders";
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('orders_id')
                    ->relationship( 'orders', 'order_number' )
                    ->label('Order ID')
                    ->searchable(false)
                    ->required(),
                Select::make('payment_types_id')
                    ->relationship( 'payment_types', 'payment_type' )
                    ->label('Payment Types')
                    ->searchable(false)
                    ->required(),
                Select::make('payment_informations_id')
                    ->relationship( 'payment_informations', 'provider' )
                    ->label('Payment Informations')
                    ->searchable(false),
                ToggleButtons::make('payment_status')
                    ->inline()
                    ->options( PaymentStatus::class )
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('orders.order_number'),
                TextColumn::make('payment_types.payment_type'),
                TextColumn::make('payment_informations.provider'),
                TextColumn::make('payment_status')->badge()
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
            'index' => Pages\ListPaymentsTransactions::route('/'),
            'create' => Pages\CreatePaymentsTransaction::route('/create'),
            'edit' => Pages\EditPaymentsTransaction::route('/{record}/edit'),
        ];
    }
}
