<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Filament\Resources\OrderResource;
use App\Models\order;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Tab ;

class ListOrders extends ListRecords
{
    protected static string $resource = OrderResource::class;


    public function getTabs():array {
        return[
            'all' => Tab::make('All')
            ->badge(order::count()),
            'Pending' => Tab::make('Pending')
            ->badge(order::query()->where('status', 'Pending')->count())
            ->modifyQueryUsing(function ($query) {
                return $query->where('status', 'Pending');
            }),
            'In Process' => Tab::make('In Process')
            ->badge(order::query()->where('status', 'In Process')->count())
            ->modifyQueryUsing(function($query){
                return $query->where('status','In Process');
            }),
            'Shipped' => Tab::make('Shipped')
            ->badge(order::query()->where('status', 'Shipped')->count())
            ->modifyQueryUsing(function ($query) {
                return $query->where('status', 'Shipped');
            }),
            'Delivered' => Tab::make('Delivered')
            ->badge(order::query()->where('status', 'Delivered')->count())
            ->modifyQueryUsing(function($query){
                return $query->where('status','Delivered');
            }),
            'archived' => Tab::make('Deleted')
            ->badge(order::onlyTrashed()->count())
            ->modifyQueryUsing(function($query){
                return $query->onlyTrashed();
            })
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
