<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Closure;
use Doctrine\DBAL\Schema\Column;
use Filament\Tables\Actions\ReplicateAction;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Symfony\Contracts\Service\Attribute\Required;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Product Detail')
                    ->description('Settings for publishing this post.')
                    ->schema([
                        TextInput::make('name')->columnSpan(1)->hiddenLabel()->prefix('Product name'),
                                TextInput::make('sku')->columnSpan(1)->required()->unique(ignoreRecord:true)->hiddenLabel()->prefix('Sku Code'),
                                TextInput::make('qte')->columnSpan(1)->numeric()->hiddenLabel()->prefix('Quantity'),
                                RichEditor::make('description')->columnSpan(3),

                    ])->columns('3'),

                Section::make('Product Setting')
                    ->description('Settings for publishing this post.')
                    ->schema([
                        Select::make('availability')->columnSpan(2)
                        ->options([
                            'In Stock' => 'In Stock',
                            'Sold OUT' => 'Sold OUT',
                            'Coming Soon' => 'Coming Soon',
                        ])->native(false),

                                Toggle::make('isVisible')->columnSpan(1)->inline()->default(TRUE),
                                FileUpload::make('attachement')->columnSpan(2) ->directory('product')
                                ->imageEditor()->visibility('public'),

                    ])->columns('2'),

                Section::make('Product Pricing')
                    ->description('Settings for publishing this post.')
                    ->schema([
                        TextInput::make('price')->columnSpan(2)->prefix('$')->Required(),

                        Toggle::make('isDiscount')->columnSpan(2)->label('Discount')->live()
                        ->reactive()
                        ->requiredWith('percentage','compared_price')
                        ->afterStateUpdated(
                            fn ($state, callable $set) => $state ? $set('percentage', null) : $set('percentage', 'hidden')
                        ),


                        TextInput::make('percentage')->prefix('%')->numeric()->maxValue(100)->default(0)
                        ->requiredWith('isDiscount')
                        ->numeric()
                        ->live()

                        ->reactive()
                        ->afterStateUpdated(function(get $get,Set $set):void{


                            $set(('compared_price'),( $get('price')-(($get('price')*$get('percentage'))/100)));
                        })
                        ->hidden(
                            fn (get $get): bool => $get('isDiscount') == false
                        ),

                        TextInput::make('compared_price')->prefix('$')
                        ->requiredWith('isDiscount')
                        ->numeric()
                        ->hidden(
                            fn (get $get): bool => $get('isDiscount') == false
                        ),
                    ])->columns('2'),


            ]);
    }


    // public static function updateDiscount(Get $get, Set $set):void{
    //     $set(('compared_price'),( $get('price')-(($get('price')*$get('percentage'))/100)));
    // }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                ReplicateAction::make(),

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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
