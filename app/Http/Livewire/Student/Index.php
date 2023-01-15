<?php

namespace App\Http\Livewire\Student;

use App\Models\Student;
use Livewire\Component;
use Illuminate\Support\Carbon;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme='bootstrap';
    public $name;
    public $gender;
    public $email;
    public $status;
    public $address;
    public $search='';
    public $contact;
     protected $rules=[
        'name'=>'required|string|min:5|max:10',
        'email'=>'required|email|unique:students,email',
        'gender'=>'required',
        'address'=>'required',
        'contact'=>'required|numeric|unique:students,contact',

     ];
     public function updated($fields)
     {
        $this->validateOnly($fields);
     }
     public function save()
     {
        $this->validate();
       $student=new Student();
       $student->name=$this->name;
       $student->gender=$this->gender;
       $student->email=$this->email;
       $student->contact=$this->contact;
       $student->address=$this->address;
       $student->save();
       $this->dispatchBrowserEvent('close_modal');
       $this->resetAll();

     }
     public function resetAll()
     {
        $this->reset();
     }
     public function close()
     {
        $this->reset();
     }
    //  edit student


    public function editStudent($id)
    {
        $student=Student::find($id);
        $this->name=$student->name;
        $this->email=$student->email;
        $this->address=$student->address;
        $this->contact=$student->contact;
        $this->gender=$student->gender;
        $this->dispatchBrowserEvent('edit_modal');
    }
    public function render()
    {
        if($this->search)
        {
            $students=Student::where('name','like','%'.$this->search.'%')
                                ->orwhere('contact','like','%'.$this->search.'%')
                                ->orWhere('email','like','%'.$this->search.'%')
                                ->orWhere('address','like','%'.$this->search.'%')
                                ->orderby('created_at','desc')
                                ->paginate(5);
        }else
        {
            $students=Student::orderby('created_at','desc')->paginate(5);
        }
        return view('livewire.student.index',compact('students'));
    }
}
