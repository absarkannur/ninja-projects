<?php

namespace App\Filament\Resources;

use App\Filament\Clusters\PaymentsCluster;
use App\Filament\Resources\PaymentTypesResource\Pages;
use App\Filament\Resources\PaymentTypesResource\RelationManagers;
use App\Models\PaymentTypes;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PaymentTypesResource extends Resource
{
    protected static ?string $model = PaymentTypes::class;

    protected static ?string $cluster = PaymentsCluster::class;

    protected static ?string $navigationIcon = 'heroicon-s-credit-card';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('payment_type'),
                TextInput::make('payment_type_short'),
                Toggle::make('payment_type_visible')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('payment_type'),
                TextColumn::make('payment_type_short'),
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
            'index' => Pages\ListPaymentTypes::route('/'),
            'create' => Pages\CreatePaymentTypes::route('/create'),
            'edit' => Pages\EditPaymentTypes::route('/{record}/edit'),
        ];
    }
}
