<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminAddItemComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-add-item-component')->layout('layouts.base2');
    }
}
