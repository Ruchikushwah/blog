<?php

namespace App\Livewire\Public\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

use function Laravel\Prompts\password;

class Login extends Component
{
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.public.auth.login');
    }
    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ];
    }
    public function login()
    {
        $this->validate();
        $credentials = $this->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('/');
        } else {
            session()->flash('error', 'invalid credentials');
        }
    }
}
