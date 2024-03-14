<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Register extends Component
{
	public $name;
	public $email;
	public $password;

	public function storeUser()
	{
		$validated = $this->validate([
			'name' => 'required|max:255',
			'email' => 'required|email|unique:users|max:255',
			'password' => 'required|min:8|max:255'
		]);

		$user = User::create(
			[
				'name' => $this->name,
				'email' => $this->email,
				'password' => bcrypt($this->password)
			]
		);

		Auth::login($user, true);

		session()->flash('success', 'User created successfully');
		return $this->redirect('/customers', navigate: true);
	}

	public function render()
	{
		return view('livewire.register');
	}
}
