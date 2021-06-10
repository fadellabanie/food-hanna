<?php

namespace App\Http\Livewire\Dashboard\Categories;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $name_en;
    public $name_nl;
    public $parent_id;
    public $image;

    public $father;
    public $category;
    public $SubCategory;

    public $selectedFather = null;
    public $selectedCategory = null;
    public $selectedSubCategory = null;


    protected $rules = [
        'name_en' => 'required|string|min:2|max:50',
        'name_nl' => 'required|string|min:2|max:50',
        'father' => 'required',
        'parent_id' => 'nullable',
        'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
    ];
    public function updatedFather($father)
    {
        $this->category = Category::where('father', $father)->get();
        $this->selectedSubCategory = NULL;
    } 
    public function updatedCategory($category)
    {
        $this->selectedSubCategory = Category::where('parent_id', $category)->get();
    }
    public function submit()
    {
        $validatedData = $this->validate();
        $validatedData['image'] = ($this->image) ? $this->image->store('categories', 'public') : '';

        Category::create($validatedData);

        session()->flash('alert', __('Saved Successfully.'));

        return redirect()->route('categories.index');
    }
  
    public function render()
    {
        return view('livewire.dashboard.categories.create',[
            'categories' => Category::Parent()->get(),
        ]);
    }
}
