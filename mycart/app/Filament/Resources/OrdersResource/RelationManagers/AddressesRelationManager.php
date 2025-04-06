<?php

namespace App\Filament\Resources\OrdersResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AddressesRelationManager extends RelationManager
{
    protected static string $relationship = 'Addresses';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('address_line_1')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('address_line_2')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('countries_id')
                    ->relationship( 'countries', 'country_name' )
                    ->label('Country')
                    ->searchable(true)
                    ->required(),
                Forms\Components\TextInput::make('city'),
                Forms\Components\TextInput::make('postal_code'),
                Forms\Components\TextInput::make('landmark'),
                Forms\Components\TextInput::make('phone_number'),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('address_line_1')
            ->columns([
                Tables\Columns\TextColumn::make('address_line_1')->toggleable(),
                Tables\Columns\TextColumn::make('address_line_2')->toggleable(),
                Tables\Columns\TextColumn::make('countries.country_name')->toggleable(),
                Tables\Columns\TextColumn::make('city')->toggleable(),
                Tables\Columns\TextColumn::make('postal_code')->toggleable(),
                Tables\Columns\TextColumn::make('landmark')->toggleable(),
                Tables\Columns\TextColumn::make('phone_number')->toggleable(),
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
