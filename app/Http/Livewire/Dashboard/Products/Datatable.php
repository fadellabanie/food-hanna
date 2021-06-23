<?php

namespace App\Http\Livewire\Dashboard\Products;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Datatable extends Component
{
    use WithPagination;


    public $selectedId;

    public function confirm($id)
    {
        $this->emit('openDeleteModal');
        $this->selectedId = $id;
    }

    public function destroy()
    {
        Product::findOrFail($this->selectedId)->delete();
    }

    public function render()
    {
        return view('livewire.dashboard.products.datatable',[
            'products' => Product::with('category')->paginate()
        ]);
    }
  
}
