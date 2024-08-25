<?php

namespace App\Livewire;

use App\Utilities\Cache\Setting;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Card;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Tables\Filters\QueryBuilder\Constraints\BooleanConstraint\Operators\IsTrueOperator;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Filament\Infolists\Components\ImageEntry;

class GeneralSetting extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill(Setting::init(true));
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->placeholder("lorem ipsum ...")
                    ->required(),
                TextInput::make('keywords')
                    ->placeholder(str_replace(" ", ", ", "lorem ipsum dolor sit amet"))
                    ->required(),
                MarkdownEditor::make('description')
                    ->placeholder("lorem ipsum dolor sit amet ...")
                    ->required(),
                TextInput::make('author')
                    ->placeholder(env("APP_AUTHOR", "your name"))
                    ->nullable(),
                FileUpload::make('icon')
                    ->image()
                    ->imageEditorAspectRatios([
                        '1:1',
                    ])
                    ->directory("assets")
                    ->maxSize(10) // 10 kb
                    ->maxSize(1024) // 1 mb
                    ->nullable()
                    ->visibility("public")
                    ->imageEditor(),
                FileUpload::make('graph_image')
                    ->label("Graph image")
                    ->image()
                    ->imageEditorAspectRatios([
                        '16:9',
                    ])
                    ->directory("assets")
                    ->visibility("public")
                    ->minSize(10) // 10 kb
                    ->maxSize(1024 * 10) // 10 mb
                    ->imageEditor()
                    ->nullable(),
            ])
            ->statePath('data');
    }

    public function create(): void
    {
        $data = $this->form->getState();
        Setting::store($data);
        Notification::make()
            ->title("general setting successfully updated!")
            ->success()
            ->send();
    }

    public function render(): View
    {
        return view('livewire.general-setting');
    }
}