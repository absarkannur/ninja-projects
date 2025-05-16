<?php

namespace App\Filament\Resources\OrdersResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\ToggleButtons;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Enums\PaymentStatus;

class PaymentsTransactionRelationManager extends RelationManager
{
    protected static string $relationship = 'PaymentsTransaction';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                ToggleButtons::make('payment_status')
                    ->inline()
                    ->options( PaymentStatus::class )
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('payment_status')
            ->columns([
                Tables\Columns\TextColumn::make('payment_types.payment_type'),
                Tables\Columns\TextColumn::make('payment_status'),
                Tables\Columns\TextColumn::make('transaction_amount')->money(env('APP_CURRENCY')),
            ])
            ->paginated(false)
            ->filters([
                //
            ])
            ->headerActions([
                // Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                // Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
