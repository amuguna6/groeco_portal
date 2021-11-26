<?php

namespace App\Http\Livewire\Admin;
use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AdminAddCategoryComponent extends Component
{
	public $category_name;
	public $category_image;

	use WithFileUploads;

	public function update($fields)
	{
		$this->validateOnly($fields,[
			'category_name'	=> 'required',
			'category_image' => 'required|mimes:jpeg,png'
		]);
	}

	public function createNewCategory(){

		$this->validate([
			'category_name'	=> 'required',
			'category_image' => 'required|mimes:jpeg,png'
		]);
		
	
		$imageName = Carbon::now().'.'.$this->category_image->extension();


		Category::create([
			"name" => $this->category_name,
			"slug" => Str::slug($this->category_name),
			"image" => $imageName,
		]);

		$this->category_image->storeAs('categories', $imageName);
	
		session()->flash('message', 'Category has been created successfully !');

		return redirect()->route('admin.manage_category');
	}


    public function render()
    {
        return view('livewire.admin.admin-add-category-component')->layout('layouts.base2');
    }
}
