<?php

namespace App\Filament\Resources\PageResource\Pages;

use App\Filament\Resources\PageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPage extends EditRecord
{
    protected static string $resource = PageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (!$data["file"]) {
            file_put_contents(
                storage_path(sprintf("/app/public/%s", $data["view"])), $data["file_content"]
            );
            
            return $data;
        }

        $data["view"] = $data["file"];

        unset($data['file']);

        return $data;
    }
}
