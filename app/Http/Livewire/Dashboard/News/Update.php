<?php

namespace App\Http\Livewire\Dashboard\News;

use App\Models\News;
use Livewire\Component;
use App\Support\HFUpload;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class Update extends Component
{
    use WithFileUploads;

    public News $news;
    public $image;

    protected $rules = [
        'news.title_en' => 'required|string|min:3|max:25',
        'news.title_nl' => 'required|string|min:3|max:25',
        'news.description_nl' => 'required|string|max:500',
        'news.description_en' => 'required|string|max:500',
        'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
    ];

    public function submit()
    {
        $this->validate();

        if ($this->image) {
            if (File::exists($this->news->image)) {
                File::delete($this->news->image);
            }

            $this->news->image = HFUpload::make($this->image)->folder('news')->upload();
        }

        $this->news->save();

        $this->reset('image');

        $this->dispatchBrowserEvent('pondReset');

        session()->flash('alert', __('Saved Successfully.'));

        return redirect()->route('news.index');
    }

    public function render()
    {
        return view('livewire.dashboard.news.update');
    }
}
