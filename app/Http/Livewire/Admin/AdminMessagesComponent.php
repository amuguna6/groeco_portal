<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminMessagesComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-messages-component')->layout('layouts.base2');
    }
}
