<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminManageOrdersComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-manage-orders-component')->layout('layouts.base2');
    }
}
