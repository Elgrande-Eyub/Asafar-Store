<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\Order;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\Summarizers\Sum;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('first_name'),
                TextInput::make('last_name'),
                TextInput::make('order_number'),
                TextInput::make('company_name'),
                TextInput::make('country'),
                TextInput::make('street_adchair'),
                TextInput::make('postcode'),
                TextInput::make('city'),
                TextInput::make('phone'),
                TextInput::make('email'),
                TextInput::make('note'),
                TextInput::make('payment_way'),
                TextInput::make('total_order'),
                TextInput::make('status'),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('order_number'),
                TextColumn::make('first_name'),
                TextColumn::make('last_name'),
                TextColumn::make('phone'),
                // TextColumn::make('total_order'),
                TextColumn::make('total_order')->summarize(Sum::make()->formatStateUsing(function ($state, Order $order) {
                    return number_format((float)$state, 2, '.', '') . ' $';
                }))
                ->formatStateUsing(function ($state, Order $order) {
                    return number_format((float)$state, 2, '.', '') . ' $';
                }),

            ])
            ->filters([
                //
            ])
            ->actions([

                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}
