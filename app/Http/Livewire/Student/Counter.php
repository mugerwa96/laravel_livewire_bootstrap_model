<?php

namespace App\Http\Livewire\Student;

use App\Models\Student;
use Livewire\Component;

class Counter extends Component
{
    public $count=0;
    public function render()
    {
        $this->count=Student::count();
        return view('livewire.student.counter');
    }
}
