<?php

namespace App\Livewire\Public\Auth;

use App\Models\User;
use Livewire\Component;

class SingUp extends Component
{
    public $name;
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.public.auth.sing-up');
    }
    public function rules()
    {
        return [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ];
    }
    public function store()
    {

        $this->validate();
        $user = User::create(
            [
                'name' => $this->name,
                'email' => $this->email,
                'password' => $this->password,

            ]
        );
        return redirect()->route('login');
    }
}
