<?php

namespace App\Filament\Resources\PageResource\Pages;

use App\Filament\Resources\PageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use File;
use Illuminate\Database\Eloquent\Model;

class CreatePage extends CreateRecord
{
    protected static string $resource = PageResource::class;


    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data["view"] = $data["file"];
        unset($data['file']);

        return $data;
    }

    protected function handleRecordCreation(array $data): Model
    {
        // $file = $data["file"];
        // $file->save
        return static::getModel()::create($data);
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
