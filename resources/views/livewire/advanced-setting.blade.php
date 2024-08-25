<div>
    <form wire:submit="create">
        {{ $this->form }}

        <button type="submit" class="p-2 bg-primary-500 font-bold my-2 rounded-md">
            Save
        </button>
    </form>

    <x-filament-actions::modals />
</div>