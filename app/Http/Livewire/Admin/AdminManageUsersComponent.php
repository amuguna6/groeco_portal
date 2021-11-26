<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminManageUsersComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-manage-users-component')->layout('layouts.base2');
    }
}
