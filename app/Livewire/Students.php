<?php

namespace App\Livewire;

use App\Models\Student;
use Livewire\Component;

class Students extends Component
{
    public $students, $student_id , $name, $email, $class, $subject;
    public $updateMode = false;

    public function render()
    {
        $this->students = Student::all();
        return view('livewire.students');
    }

    public function resetInputFields()
    {
        $this->name = '';
        $this->email = '';
        $this->class = '';
        $this->subject = '';
    }

    public function store()
    {
        $validatedData  = $this->validate([
            'name' => 'required',
            'class' => 'required',
            'subject' => 'required',
            'email' => 'required|email|unique:users,email',
        ]);

        Student::create($validatedData);

        session()->flash('message', 'Student Created Successfully');

        $this->resetInputFields();
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        $this->student_id = $id;

        $this->name = $student->name ;
        $this->email = $student->email;
        $this->class = $student->class;
        $this->subject = $student->subject;

        $this->updateMode = true;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'class' => 'required',
            'subject' => 'required',
            'email' => 'required|email|unique:users,email',
        ]);

        $student = Student::find($this->student_id);
        $student->update([
           'name' => $this->name,
            'email' => $this->email,
           'class' => $this->class,
           'subject' => $this->subject,
        ]);

        $this->updateMode = false;

        session()->flash('message', 'Student Created Successfully');


        $this->resetInputFields();
    }

    public function delete($id)
    {
        Student::find($id)->delete();
        session()->flash('message', 'Student Created Successfully');

    }
}
