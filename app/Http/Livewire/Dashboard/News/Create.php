<?php

namespace App\Http\Livewire\Dashboard\News;

use App\Models\News;
use Livewire\Component;
use App\Support\HFUpload;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $title_en;
    public $title_nl;
    public $description_en;
    public $description_nl;
    public $image;

    protected $rules = [
        'title_en' => 'required|string|min:3|max:25',
        'title_nl' => 'required|string|min:3|max:25',
        'description_nl' => 'required|string|max:500',
        'description_en' => 'required|string|max:500',
        'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
    ];

    public function submit()
    {
        $validatedData = $this->validate();
        $validatedData['image'] = ($this->image) ? HFUpload::make($this->image)->folder('news')->upload() : '';

        News::create($validatedData);

        $this->reset('image');

        $this->dispatchBrowserEvent('pondReset');

        session()->flash('alert', __('Saved Successfully.'));

        return redirect()->route('news.index');
    }

    public function render()
    {
        return view('livewire.dashboard.news.create');
    }
}
