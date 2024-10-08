<?php

namespace App\Livewire;

use Livewire\Component;


use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\Contracts\View\View;


class Inno extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([

            ])
            ->statePath('data');
    }

    public function create(): void
    {
        dd($this->form->getState());
    }


    public function render()
    {
        return view('livewire.inno');
    }
}
