<?php

namespace App\Http\Livewire;
use App\Models\Category;
use Livewire\Component;

class SellerCategoriesComponent extends Component
{
    public function render()
    {	 

    	$scategories = Category::all();
        return view('livewire.seller-categories-component',['scategories'=>$scategories])->layout('layouts.base');
    }
}
