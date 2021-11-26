<?php

namespace App\Http\Livewire\Admin;
use App\Models\Category;
use App\Models\Middleware\AuthAdmin;
use Livewire\Component;
use Livewire\WithPagination;

class AdminManageCategoryComponent extends Component
{
	use WithPagination;
	
    public function render()
    {
    	$scategories = Category::paginate(10);
        return view('livewire.admin.admin-manage-category-component', ['scategories'=>$scategories])->layout('layouts.base2');
    }
}
