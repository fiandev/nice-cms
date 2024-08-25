<?php

namespace App\Livewire;

use App\Utilities\Cache\Setting;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
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

class AdvancedSetting extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    public function mount(): void
    {
        $setting = Setting::init(true);
        $this->form->fill($setting);
    }

    public function form(Form $form): Form
    {
        $setting = Setting::init();

        return $form
            ->schema([
                TextInput::make('google_verification')
                    ->label("Google verification token")
                    ->placeholder("xxx-xxxxxxxxzxxx_xxxxx"),
                TextInput::make('bing_verification')
                    ->label("Bing verification token")
                    ->placeholder("xxxxxxxxxxxxxxxxxxxx"),
                TextInput::make('yandex_verification')
                    ->label("Yandex verification token")
                    ->placeholder("xxxxxxxxxxxx"),
                RichEditor::make('custom_meta_tag')
                    ->toolbarButtons([
                        "codeBlock"
                    ])
                    ->nullable(),
                TextInput::make('custom_external_css')
                    ->label("Custom external stylesheet")
                    ->placeholder("https://example.com/css/style.css")
                    ->nullable(),
                TextInput::make('custom_external_js')
                    ->label("Custom external javascript")
                    ->placeholder("https://example.com/js/script.js")
                    ->nullable(),
                // ...
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
        return view('livewire.advanced-setting');
    }
}