<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Curse;

class CourseList extends Component
{
    public function render()
    {
        return view('livewire.course-list', [
            'curses' => Curse::latest()->with('user')->take(9)->get()
        ]);
    }
}
