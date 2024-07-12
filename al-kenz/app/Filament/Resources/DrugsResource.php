<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DrugsResource\Pages;
use App\Filament\Resources\DrugsResource\RelationManagers;
use App\Models\Drugs;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DrugsResource extends Resource
{
    protected static ?string $model = Drugs::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Products';
    protected static ?int $navigationSort = 0;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),
                Select::make('drug_classes_id')->required()
                    ->label('Category')
                    // ->options(ProductCategories::all()->pluck('name','id')),
                    ->relationship( 'drug_classes', 'name' )
                    ->searchable()
                    ->preload(),
                Textarea::make('description')->columnSpanFull(),
                FileUpload::make('attachment')->disk('public')->directory('attachments')->label('Attachment')->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('drug_classes.name')
            ])
            ->filters([
                SelectFilter::make( 'drug_classes_id' )
                    ->label('Category')
                    ->relationship( 'drug_classes', 'name' )
                    ->preload()
                    ->multiple()
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
            'index' => Pages\ListDrugs::route('/'),
            'create' => Pages\CreateDrugs::route('/create'),
            'edit' => Pages\EditDrugs::route('/{record}/edit'),
        ];
    }
}
