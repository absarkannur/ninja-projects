<?php

namespace App\Filament\Resources;

use App\Enums\OrderStatus;
use App\Filament\Resources\OrdersResource\Pages;
use App\Filament\Resources\OrdersResource\RelationManagers;
use App\Filament\Resources\OrdersResource\RelationManagers\OrderItemsRelationManager;
use App\Filament\Resources\OrdersResource\RelationManagers\PaymentsTransactionRelationManager;
use App\Models\Orders;
use Faker\Core\Color;
use Filament\Actions\ActionGroup;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Resources\RelationManagers\RelationGroup;

class OrdersResource extends Resource
{
    protected static ?string $model = Orders::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';
    protected static ?string $navigationGroup = "Sales";
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationBadgeTooltip = 'The number of New Orders';


    public static function getNavigationBadge(): ?string
    {
        // return static::getModel()::count();
        return static::getModel()::where('order_status', 'new')->count();

    }

    public static function form(Form $form): Form
    {

        $order_number = static::generateOrderNumber();

        return $form
            ->schema([
                TextInput::make('order_number')
                    ->label('Order Number')
                    ->default( $order_number )
                    ->disabled()
                    ->dehydrated()
                    ->required()
                    ->maxLength(32),
                Select::make('customers_id')
                    ->relationship( 'customers', 'customer_name' )
                    ->label('Customer Name')
                    ->searchable(false)
                    ->required(),
                Select::make('payment_types_id')
                    ->relationship( 'payment_types', 'payment_type' )
                    ->label('Payment Types')
                    ->searchable(false)
                    ->required(),
                Select::make('shipping_methods_id')
                    ->relationship( 'shipping_methods', 'shipping_title' )
                    ->label('Shipping Methods')
                    ->searchable(false),
                Section::make('')->schema([
                    ToggleButtons::make('order_status')
                        ->label('Order Status')
                        ->inline()
                        ->options( OrderStatus::class )
                        ->required(),
                    DatePicker::make('order_date')
                        ->required()
                        ->label('Order Date'),
                ])->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('order_number')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('customers.customer_name')
                    ->searchable(),
                TextColumn::make('order_status')->badge(),
                TextColumn::make('order_date')
                    ->date()
                    ->label('Order Date'),
            ])
            ->defaultSort('order_number', 'desc')
            ->filters([
                // Tables\Filters\TrashedFilter::make(),

            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                // Tables\Actions\ViewAction::make(),
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
            RelationGroup::make('', [
                PaymentsTransactionRelationManager::class,
                OrderItemsRelationManager::class,
            ]),
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrders::route('/create'),
            'view' => Pages\ViewOrders::route('/{record}'),
            'edit' => Pages\EditOrders::route('/{record}/edit'),
        ];
    }

    public static function generateOrderNumber(){

        $lastOrder = Orders::latest()->first();

        if( $lastOrder ) {

            $split = explode( '-', $lastOrder['order_number'] );
            $number =  $split[1]+1;
            $number = sprintf('%06d',$number);
            return 'ORD-'. $number;

        } else{
            return $order_number = 'ORD-000001';
        }

    }



}
