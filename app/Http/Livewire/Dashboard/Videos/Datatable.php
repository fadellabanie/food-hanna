<?php

namespace App\Http\Livewire\Dashboard\Videos;

use App\Models\Video;
use Livewire\Component;
use Livewire\WithPagination;

class Datatable extends Component
{
    use WithPagination;

    public $url, $status,$name;
    public $data_id;
    public $editMode = false;

    protected $rules = [
        'name' => 'required',
        'url' => 'required|min:3',
        'status' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function resetForm()
    {
        $this->reset();
        $this->resetErrorBag();
        $this->resetValidation();
    }
    public function store()
    {
        $this->editMode = false;

        $validatedData = $this->validate();

        Video::create($validatedData);

        session()->flash('alert', __('Saved Successfully.'));

        $this->emit('BankModal'); // Close model to using to jquery

        $this->resetForm();
    }

    public function edit($id)
    {
        $this->editMode = true;

        $data = Video::findOrFail($id);
        $this->data_id = $id;
        $this->name = $data->name;
        $this->url = $data->url;
        $this->status = $data->status;
    }

    public function update()
    {
        $this->editMode = true;
        $validatedData = $this->validate();

        $bank = Video::find($this->data_id);

        $bank->update($validatedData);

        $this->resetForm();

        $this->emit('Modal'); // Close model to using to jquery

        session()->flash('alert', __('Update Successfully.'));
    }

    public function confirm($id)
    {
        $this->emit('deleteModalOpen'); // Open model to using to jquery
        $this->data_id = $id;
    }

    public function destroy()
    {
        $bank = Video::findOrFail($this->data_id);
        $bank->delete();

        $this->emit('deleteModalClose'); // Close model to using to jquery
    }

    public function render()
    {
        return view('livewire.dashboard.videos.datatable',[
            'videos' => Video::paginate(),
        ]);
    }
}
