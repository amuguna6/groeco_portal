<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminAddBannerComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-add-banner-component')->layout('layouts.base2');
    }
}
