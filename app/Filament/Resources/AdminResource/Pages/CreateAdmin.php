<?php

namespace App\Filament\Resources\AdminResource\Pages;

use App\Filament\Resources\AdminResource;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CreateAdmin extends CreateRecord
{
    protected static string $resource = AdminResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        unset($data['password_confirm']);
        $data["password"] = bcrypt("password");

        return $data;
    }

    protected function handleRecordCreation(array $data): Model
    {
        return static::getModel()::create($data);
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }


    protected function getCreatedNotificationTitle(): ?string
    {
        return 'New admin successfully created!';
    }
}
