<?php

namespace App\Livewire;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithPagination;

class ShowEvents extends Component
{
    
    use WithPagination;

    public $search = '';

    protected $queryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }


    public function render()
    {
        return view('livewire.show-events', [
            'events' => Event::where('name', 'like', '%'.$this->search.'%')->paginate(5)
        ]);
    }
   
}



