<?php

namespace App\Http\Livewire;

use App\Models\User;

use Livewire\Component;

class App extends Component
{
    public User $user;

    protected $rules = [
        'user.balance' => 'required',
        'user.salary' => 'required'
    ];

    public function mount()
    {
        $this->user = User::find(1);
    }

    public function render()
    {
        return view('livewire.app');
    }
}
