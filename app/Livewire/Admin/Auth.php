<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Auth as AuthUser;

class Auth extends Component
{

    public $email;
    public $password;

    /**
     * Authenticates the user.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function authenticate()
    {

            // Validate the input fields.
            $this->validate([
                'email'     => 'required|email',
                'password'  => 'required'
            ]);

            // Attempt to authenticate the user.
            $credentials = [
                'email'     => $this->email,
                'password'  => $this->password,
            ];
            if (AuthUser::attempt($credentials)) {
                // Authentication was successful.
                return redirect()->intended('/admin/home');
            } else {
                // Authentication failed, show an error message.
                $this->addError('loginError', 'Datos de acceso no válidos');
            }
        
    }

    public function render()
    {
        return view('livewire.admin.auth')
        ->extends('livewire.layouts.auth')
        ->section('content');;
    }
}
