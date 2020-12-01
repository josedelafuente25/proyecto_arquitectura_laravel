<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;

class ServiceForm extends Component
{
    public $type_service;
    public $description;
    public $phone;

    public function submit()
    {
        $validatedData = $this->validate([
            'type_service' => 'required|min:6',
            'description' => 'required',
            'phone' => 'required',
        ]);
        Service::create($validatedData);

        return redirect()->to('/form');
    }

    public function render()
    {
        return view('livewire.service-form');
    }
}
