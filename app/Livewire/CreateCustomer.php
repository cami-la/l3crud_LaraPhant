<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;

class CreateCustomer extends Component
{
	public $name = '';
	public $email = '';
	public $phone = '';


	/*public function updatedEmail()
    {
        $existingEmail = Customer::where('email', $this->email)->count();
        if ($existingEmail > 0) {
            $this->addError('email', 'Email já cadastrado');
        }
    }*/

	public function save()
	{
		$validatedData = $this->validate([
			'name' => 'required|max:255',
			'email' => 'required|unique:customers|email|max:255',
			'phone' => 'required|unique:customers|max:255'
		]);
		/*$this->validate([
            'name' => 'required|max:255',
            'phone' => 'required|unique:customers'
        ]);

        $existingEmail = Customer::where('email', $this->email)->count();

        if ($existingEmail > 0) {
            $this->addError('email', 'Email já cadastrado.');
            return;
        }

        Customer::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone
        ]);*/

		Customer::create($validatedData);
		session()->flash('success', 'Customer successfully created.');
		return $this->redirect('/customers');
	}

	public function render()
	{
		return view('livewire.create-customer');
	}
}
