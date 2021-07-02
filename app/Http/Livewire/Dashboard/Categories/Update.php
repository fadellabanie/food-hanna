<?php

namespace App\Http\Livewire\Dashboard\Categories;

use Livewire\Component;
use App\Models\Category;
use App\Support\HFUpload;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class Update extends Component
{
    use WithFileUploads;

    public Category $category;
    public $name_en;
    public $name_nl;
    public $parent_id;
    public $child_id;
    public $sub_child_id;
    public $image;

    public $father;
    public $categories;
    public $childs;
    public $subChilds;
    public $hideChild = false;
    public $hideSubChild = false;

    protected $rules = [
        'category.name_en' => 'required|string|min:2|max:50',
        'category.name_nl' => 'required|string|min:2|max:50',
        'category.father' => 'nullable',
        'category.parent_id' => 'nullable',
        'category.child_id' => 'nullable',
        'category.sub_child_id' => 'nullable',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
    ];
    public function mount()
    {
        $this->categories = Category::Parent()->where('father', $this->category->father)->get();
        $this->childs = Category::where('father', $this->category->father)->where('parent_id', $this->category->parent_id)->where('child_id',0)->get();
        if ($this->category->parent_id != 0) {
            $this->hideChild = true;
        } else {
            $this->hideChild = false;
            $this->hideSubChild = false;
        }
        $this->subChilds = Category::where('father', $this->category->father)->where('parent_id', $this->category->parent_id)->where('child_id', $this->category->child_id)->get();
        if ($this->category->child_id != 0) {
            $this->hideSubChild = true;
        } else {
            $this->hideSubChild = false;
        }
    }
    public function updatedCategoryFather()
    {
        $this->categories = Category::Parent()->where('father', $this->category->father)->get();
     
    }

    public function updatedCategoryParentId()
    {

        $this->childs = Category::where('father', $this->category->father)->where('parent_id', $this->category->parent_id)->where('child_id',0)->get();
        if ($this->category->parent_id != 0) {
            $this->hideChild = true;
        } else {
            $this->hideChild = false;
            $this->hideSubChild = false;
        }
    }
    public function updatedCategoryChildId()
    {
        $this->subChilds = Category::where('father', $this->father)->where('parent_id', $this->category->parent_id)->where('child_id', $this->category->child_id)->get();

        if ($this->category->child_id != 0) {
            $this->hideSubChild = true;
        } else {
            $this->hideSubChild = false;
        }
    }

    public function submit()
    {
        $validatedData = $this->validate();

        if ($this->image) {
            if (File::exists($this->category->image)) {
                File::delete($this->category->image);
            }

            $this->category->image = HFUpload::make($this->image)->folder('categories')->upload();
        }

        $validatedData['image'] = ($this->image) ? $this->image->store('categories', 'public') : '';

        if ($validatedData['category']['parent_id'] == 0) {
            $validatedData['category']['parent_id'] = 0;
            $validatedData['category']['child_id'] = 0;
            $validatedData['category']['sub_child_id'] = 0;
        }
        if ($validatedData['category']['parent_id'] != 0 && $validatedData['category']['child_id'] == 0) {
            $validatedData['category']['parent_id'] =  $validatedData['category']['parent_id'];
            $validatedData['category']['child_id'] = 0;
            $validatedData['category']['sub_child_id'] = 0;
        }
        if ($validatedData['category']['parent_id'] != 0 && $validatedData['category']['child_id'] != 0) {
            $validatedData['category']['parent_id'] =  $validatedData['category']['parent_id'];
            $validatedData['category']['child_id'] = $validatedData['category']['child_id'];
            $validatedData['category']['sub_child_id'] = 0;
        }
        if ($validatedData['category']['parent_id'] != 0 && $validatedData['category']['child_id'] != 0  && $validatedData['category']['sub_child_id'] != 0) {
            $validatedData['category']['parent_id'] =  $validatedData['category']['parent_id'];
            $validatedData['category']['child_id'] = $validatedData['category']['child_id'];
            $validatedData['category']['sub_child_id'] = $validatedData['category']['sub_child_id'];
        }
        $validatedData['category']['name_en'] = Str::slug($validatedData['category']['name_en'] , "-");
        $validatedData['category']['name_nl'] = Str::slug($validatedData['category']['name_nl'] , "-");
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
