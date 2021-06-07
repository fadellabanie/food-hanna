<?php

namespace App\Http\Livewire\Dashboard\News;

use App\Models\News;
use Livewire\Component;
use Livewire\WithPagination;

class Datatable extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $selectedId;

    public function confirm($id)
    {
        $this->emit('openDeleteModal');
        $this->selectedId = $id;
    }

    public function destroy()
    {
        News::findOrFail($this->selectedId)->delete();
    }

    public function render()
    {
        return view('livewire.dashboard.news.datatable',[
            'all_news' => News::paginate(12)
        ]);
    }
}
