<?php

namespace App\Http\Livewire\Dashboard\Questions;

use Livewire\Component;
use App\Models\Question;
use Livewire\WithPagination;

class Datatable extends Component
{
    use WithPagination;

    public $question_nl,$question_en,$answer_nl,$answer_en;
    public $data_id;
    public $editMode = false;

    protected $rules = [
        'question_en' => 'required',
        'question_nl' => 'required',
        'answer_nl' => 'required',
        'answer_en' => 'required',
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
        Question::create($validatedData);
       

        session()->flash('alert', __('Saved Successfully.'));

        $this->emit('Modal'); // Close model to using to jquery

        $this->resetForm();
    }

    public function edit($id)
    {
        $this->editMode = true;

        $data = Question::findOrFail($id);
        $this->data_id = $id;
        $this->question_en = $data->question_en;
        $this->question_nl = $data->question_nl;
        $this->answer_nl = $data->answer_nl;
        $this->answer_en = $data->answer_en;
      
     
    }

    public function update()
    {
        $this->editMode = true;
        $validatedData = $this->validate();

        $question = Question::find($this->data_id);

        $question->update($validatedData);

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
        $questions = Question::findOrFail($this->data_id);
        $questions->delete();

        $this->emit('deleteModalClose'); // Close model to using to jquery
    }

    public function render()
    {
        return view('livewire.dashboard.questions.datatable',[
            'questions' => Question::paginate(),

        ]);
    }
}
