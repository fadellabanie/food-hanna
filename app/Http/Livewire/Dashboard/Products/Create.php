<?php

namespace App\Http\Livewire\Dashboard\Products;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use Livewire\WithFileUploads;

class Create extends Component
{

    use WithFileUploads;

    public $name_en;
    public $name_nl;
    public $category_id;
    public $description_en;
    public $description_nl;
    public $size;
    public $weight;
    public $image;

    public $father = 'do_ghazal';
    public $categories;
    public $category;
    public $child;
    public $childs;
    public $subChilds;
    public $subChild_id;

    protected $rules = [
        'father' => 'required',
        'category_id' => 'required',
        'name_en' => 'required|string|min:3|max:100',
        'name_nl' => 'required|string|min:3|max:100',
        'description_nl' => 'required|string|max:500',
        'description_en' => 'required|string|max:500',
        'weight' => 'required|max:100',
        'size' => 'required||max:100',
        'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
    ];
    public function mount()
    {
        $this->categories = Category::Father($this->father)
        ->SubChild()
        ->get();
    }
    public function updatedFather()
    {
        $this->categories = Category::Parent()->Father($this->father)->get();
    }

    public function submit()
    {
        $validatedData = $this->validate();
        $validatedData['image'] = ($this->image) ? $this->image->store('products', 'public') : '';

        Product::create($validatedData);

        session()->flash('alert', __('Saved Successfully.'));

        return redirect()->route('products.index');
    }
    public function render()
    {
        return view('livewire.dashboard.products.create', [
            'categories' => Category::Parent()->where('father', $this->father)->get(),

        ]);
    }
}
