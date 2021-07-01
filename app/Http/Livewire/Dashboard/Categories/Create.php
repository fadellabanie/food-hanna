<?php

namespace App\Http\Livewire\Dashboard\Categories;

use Livewire\Component;
use App\Models\Category;
use App\Support\HFUpload;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $name_en;
    public $name_nl;
    public $parent_id;
    public $child_id;
    public $sub_child_id;
    public $image;

    public $category;
    public $father = 'do_ghazal';
    public $categories;
    public $childs;
    public $subChilds;
    public $hideChild = false;
    public $hideSubChild = false;

    protected $rules = [
        'name_en' => 'required|string|min:1|max:50',
        'name_nl' => 'required|string|min:1|max:50',
        'father' => 'required',
        'parent_id' => 'nullable',
        'child_id' => 'nullable',
        'sub_child_id' => 'nullable',
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

        $this->childs = Category::where('father', $this->father)->where('parent_id', $this->parent_id)->where('child_id',0)->get();
        if ($this->parent_id != 0) {
            $this->hideChild = true;
        } else {
            $this->hideChild = false;
            $this->hideSubChild = false;
        }
    }
    public function updatedChildId()
    {
        $this->subChilds = Category::where('father', $this->father)->where('parent_id', $this->parent_id)->where('child_id', $this->child_id)->get();

        if ($this->child_id != 0) {
            $this->hideSubChild = true;
        } else {
            $this->hideSubChild = false;
        }
    }

    public function submit()
    {
        $validatedData = $this->validate();


        $validatedData['image'] = ($this->image) ? HFUpload::make($this->image)->folder('categories')->upload() : '';

        if ($validatedData['parent_id'] == 0) {
            $validatedData['parent_id'] = 0;
            $validatedData['child_id'] = 0;
            $validatedData['sub_child_id'] = 0;
        }
        if ($validatedData['parent_id'] != 0 && $validatedData['child_id'] == 0) {
            $validatedData['parent_id'] =  $validatedData['parent_id'];
            $validatedData['child_id'] = 0;
            $validatedData['sub_child_id'] = 0;
        }
        if ($validatedData['parent_id'] != 0 && $validatedData['child_id'] != 0) {
            $validatedData['parent_id'] =  $validatedData['parent_id'];
            $validatedData['child_id'] = $validatedData['child_id'];
            $validatedData['sub_child_id'] = 0;
        }
        if ($validatedData['parent_id'] != 0 && $validatedData['child_id'] != 0  && $validatedData['sub_child_id'] != 0) {
            $validatedData['parent_id'] =  $validatedData['parent_id'];
            $validatedData['child_id'] = $validatedData['child_id'];
            $validatedData['sub_child_id'] = $validatedData['sub_child_id'];
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
