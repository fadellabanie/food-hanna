<?php

namespace App\Http\Livewire\Dashboard\Categories;

use App\Models\Category;
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
        Category::findOrFail($this->selectedId)->delete();
    }

    public function render()
    {
        return view('livewire.dashboard.categories.datatable',[
            'categories' => Category::paginate()
        ]);
    }
  
}
