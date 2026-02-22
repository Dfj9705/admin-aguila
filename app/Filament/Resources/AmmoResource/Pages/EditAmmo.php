<?php

namespace App\Filament\Resources\AmmoResource\Pages;

use App\Filament\Resources\AmmoResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\EditRecord;

class EditAmmo extends EditRecord
{
    protected static string $resource = AmmoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Action::make('nuevo')
                ->label('Nueva munición')
                ->icon('heroicon-m-plus')
                ->color('success')
                ->url(fn() => static::getResource()::getUrl('create')),
            ,

        ];
    }
}
