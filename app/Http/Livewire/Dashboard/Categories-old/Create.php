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

    public $category;
    public $father = 'do_ghazal';
    public $categories;
    public $childs;
    public $child;

    public $subChilds;
    public $subChild_id;

    public $subCategory;

    public $selectedFather = null;
    public $selectedCategory = null;
    public $selectedSubCategory = null;

    public $hideChild = false;
    public $hideSubChild = false;


    protected $rules = [
        'name_en' => 'required|string|min:2|max:50',
        'name_nl' => 'required|string|min:2|max:50',
        'father' => 'nullable',
        'parent_id' => 'nullable',
        'child' => 'nullable',
        'subChild_id' => 'nullable',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
    ];
    public function mount()
    {
        $this->categories = Category::Parent()->where('father', $this->father)->get();
    }
    public function updatedFather()
    {
       
        $this->categories = Category::Parent()->where('father', $this->father)->get();
    }

    public function updatedParentId()
    {
        $this->childs = Category::where('parent_id', $this->parent_id)->get();
        if($this->parent_id == null){
            $this->hideChild = true;
        }else{
           $this->hideChild = false;
           $this->hideSubChild = false;
        }
    }
    public function updatedChild()
    {
        $this->subChilds = Category::where('parent_id', $this->child)->get();
        if($this->child == null){
            $this->hideSubChild = true;
         }else{
            $this->hideSubChild = false;
         }
    }

    public function submit()
    {
        $validatedData = $this->validate();
         // dd(  $validatedData);
        $validatedData['image'] = ($this->image) ? $this->image->store('categories', 'public') : '';

        if ($validatedData['parent_id'] == null) {
            $validatedData['parent_id'] = null;
        } 
         if ($validatedData['parent_id'] == "") {
            $validatedData['parent_id'] =null;
        }
        if ($validatedData['parent_id'] != null && $validatedData['child'] == null) {
            $validatedData['parent_id'] = $validatedData['parent_id'];
        }

        if ($validatedData['parent_id'] != null && $validatedData['child'] != null) {
            $validatedData['parent_id'] = $validatedData['child'];
        }
        if ($validatedData['parent_id'] != null && $validatedData['child'] != null && $validatedData['subChild_id'] != null) {
            $validatedData['parent_id'] = $validatedData['subChild_id'];
        }

        Category::create($validatedData);

        session()->flash('alert', __('Saved Successfully.'));

        return redirect()->route('categories.index');
    }

    public function render()
    {
        return view('livewire.dashboard.categories.create');
    }
}
