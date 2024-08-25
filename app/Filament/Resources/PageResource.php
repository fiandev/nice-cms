<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Filament\Resources\PageResource\RelationManagers;
use App\Models\Page;
use Closure;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\TextInput::make('route')->required()->unique(ignoreRecord: true),
                Forms\Components\TextInput::make('path')->required()->unique(ignoreRecord: true),
                Forms\Components\Hidden::make('view')
                    ->afterStateHydrated(function (Set $set, $state){
                        if (!$state) return;

                        $content = file_get_contents(storage_path("/app/public/$state"));
                        $set("file_content", ($content));
                    })
                    ->required(fn(Page $page): bool => $page instanceof CreateRecord),
                Forms\Components\FileUpload::make('file')
                    ->label("File view")
                    ->directory("/pages")
                    ->afterStateUpdated(function (Set $set, $state) {
                        $content = file_get_contents($state->getRealPath());
                        $variables = extractPageVariables($content);
                        $set("data", json_encode($variables, JSON_PRETTY_PRINT, 8));
                        $set("file_content", ($content));
                    })
                    ->columnSpan([
                        'sm' => 2,
                    ])
                    ->required(fn(Page $page): bool => $page instanceof CreateRecord),
                Forms\Components\MarkdownEditor::make("data")
                    ->toolbarButtons([
                        "codeBlock"
                    ])
                    ->enableToolbarButtons([
                        "codeBlock"
                    ])
                    ->columnSpan([
                        'sm' => 2,
                    ])
                    ->nullable(),
                Forms\Components\MarkdownEditor::make("file_content")
                    ->label("file content")
                    ->toolbarButtons([
                        "codeBlock"
                    ])
                    ->enableToolbarButtons([
                        "codeBlock"
                    ])
                    ->columnSpan([
                        'sm' => 2,
                    ])
                    ->hiddenOn("create"),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->sortable(),
                Tables\Columns\TextColumn::make('route')->sortable(),
                Tables\Columns\TextColumn::make('path')->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }

}
