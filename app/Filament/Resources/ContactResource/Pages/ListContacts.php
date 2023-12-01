<?php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Filament\Resources\ContactResource;
use App\Models\Contact;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Tab ;

class ListContacts extends ListRecords
{
    protected static string $resource = ContactResource::class;

    public function getTabs():array {
        return[
            'all' => Tab::make('All')
            ->badge(Contact::count()),
            'Read Messages' => Tab::make('Read Messages')
            ->badge(Contact::query()->where('is_seen', true)->count())
            ->modifyQueryUsing(function ($query) {
                return $query->where('is_seen', true);
            }),
            'Unread Messages' => Tab::make('Unread Messages')
            ->badge(Contact::query()->where('is_seen', false)->count())
            ->modifyQueryUsing(function($query){
                return $query->where('is_seen',false);
            }),
            'archived' => Tab::make('Deleted')
            ->badge(Contact::onlyTrashed()->count())
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
