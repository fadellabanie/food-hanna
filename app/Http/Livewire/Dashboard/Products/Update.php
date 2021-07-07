<?php

namespace App\Http\Livewire\Dashboard\Products;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Support\HFUpload;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class Update extends Component
{

    use WithFileUploads;

    public Product $product;
    public $father;
    public $image;

    protected $rules = [
        'product.father' => 'required',
        'product.category_id' => 'required',
        'product.name_en' => 'required|string|min:3|max:100',
        'product.name_nl' => 'required|string|min:3|max:100',
        'product.description_nl' => 'required|string|max:500',
        'product.description_en' => 'required|string|max:500',
        'product.weight' => 'required|max:100',
        'product.size' => 'required||max:100',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
    ];
    public function mount()
    {
        $this->categories = Category::Father($this->father)
        ->SubChild()
        ->get();
        $this->father = $this->product->father;
    }
    public function updatedFather()
    {
        $this->categories = Category::Parent()->Father($this->father)->get();
    }

    public function updatedImage()
    {
        $this->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);
    }
    public function submit()
    {
        $this->validate();
        if ($this->image) {
            if (File::exists($this->product->image)) {
                File::delete($this->product->image);
            }

            $this->product->image = HFUpload::make($this->image)->folder('products')->upload();
        }
        $this->product->save();
        $this->reset('image');

        $this->dispatchBrowserEvent('pondReset');
        
        session()->flash('alert', __('Saved Successfully.'));


        return redirect()->route('products.index');
    }
    public function render()
    {
        return view('livewire.dashboard.products.update',[
            'categories' => Category::Parent()->where('father', $this->father)->get(),
        ]);
    }
}
