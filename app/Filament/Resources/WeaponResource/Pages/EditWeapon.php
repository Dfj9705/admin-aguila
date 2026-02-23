<?php

namespace App\Filament\Resources\WeaponResource\Pages;

use App\Filament\Resources\WeaponResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\EditRecord;

class EditWeapon extends EditRecord
{
    protected static string $resource = WeaponResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Action::make('Nueva arma')
                ->label('Nueva arma')
                ->icon('heroicon-m-plus')
                ->color('success')
                ->url(fn() => static::getResource()::getUrl('create')),
        ];
    }
}
