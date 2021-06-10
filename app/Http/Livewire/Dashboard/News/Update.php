<?php

namespace App\Http\Livewire\Dashboard\News;

use App\Models\News;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $news;
    public $upload;

    protected $rules = [
        'news.title_en' => 'required|string|min:3|max:25',
        'news.title_nl' => 'required|string|min:3|max:25',
        'news.description_nl' => 'required|string|max:500',
        'news.description_en' => 'required|string|max:500',
        'news.image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
    ];

    public function mount(News $news)
    {
        $this->news = $news;
    }
    public function updatedUpload()
    {
        $this->validate([
            'upload' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);
    }

    public function submit()
    {
        $this->validate();

        $this->news->save();

        if ($this->upload) {
            $this->news->update([
                'image' => $this->upload->store('news', 'public')
            ]);
        }
        session()->flash('alert', __('Saved Successfully.'));
    
    }
    public function render()
    {
        return view('livewire.dashboard.news.update');
    }
}
