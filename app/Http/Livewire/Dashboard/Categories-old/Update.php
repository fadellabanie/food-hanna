<?php

namespace App\Http\Livewire\Dashboard\Categories;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Update extends Component
{
    use WithFileUploads;

    public Category $category;
    public $image;
    public $father = 'do_ghazal';
    public $categories;
    public $childs;
    public $child;
    public $parent_id;

    public $subChilds;
    public $subChild_id;

    public $subCategory;

    public $selectedFather = null;
    public $selectedCategory = null;
    public $selectedSubCategory = null;

    public $hideChild = false;
    public $hideSubChild = false;

    protected $rules = [
        'category.name_en' => 'required|string|min:2|max:50',
        'category.name_nl' => 'required|string|min:2|max:50',
        'category.father' => 'nullable',
        'category.parent_id' => 'nullable',
        'category.child' => 'nullable',
        'category.subChild_id' => 'nullable',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
    ];
 public function mount()
    {
        $this->categories = Category::Parent()->where('father', $this->category->father)->get();
    }
    public function updatedCategoryFather()
    {
        $this->categories = Category::Parent()->where('father', $this->category->father)->get();
    }

    public function updatedCategoryParentId()
    {
       // dd($this->category->parent_id);
        $this->childs = Category::where('parent_id', $this->category->parent_id)->get();
        if($this->category->parent_id == null){
            $this->hideChild = true;
         }else{
            $this->hideChild = false;
         }
    
    }
    public function updatedCategoryChild()
    {
        $this->subChilds = Category::where('parent_id', $this->category->child)->get();
        if($this->category->child == null){
            $this->hideSubChild = true;
         }else{
            $this->hideSubChild = false;
         }
    }
    public function submit()
    {
        $validatedData=   $this->validate();
   
        if ($this->image) {
            if (Storage::disk('public')->exists($this->category->image)) {
                Storage::disk('public')->delete($this->category->image);
            }

            $this->category->image = $this->image->store('categories', 'public');
        }
        if ($validatedData['category']['parent_id'] == null) {
            $validatedData['category']['parent_id'] = null;
        } 
         if ($validatedData['category']['parent_id'] == "") {
            $validatedData['category']['parent_id'] =null;
        }
        if ($validatedData['category']['parent_id'] !=  array_key_exists('child',$validatedData['category'] ) || null && $validatedData['category']['child'] == null) {
            $validatedData['category']['parent_id'] = $validatedData['category']['parent_id'];
        }

        if ($validatedData['category']['parent_id'] != array_key_exists('child',$validatedData['category']) || null && $validatedData['category']['child'] != null && $validatedData['subChild_id'] != null) {
            $validatedData['category']['parent_id'] = $validatedData['category']['subChild_id'];
        }
      
        $this->category->save();

        $this->reset('image');

        $this->dispatchBrowserEvent('pondReset');

        session()->flash('alert', __('Saved Successfully.'));

        return redirect()->route('categories.index');

    }
    public function render()
    {
        return view('livewire.dashboard.categories.update');
    }
}
