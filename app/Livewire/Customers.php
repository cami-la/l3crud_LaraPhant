<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;

class Customers extends Component
{
	public $customers = [];
	public $search = '';

	/*
    public function mount()
    {
        $this->customers = Customer::all();
    }
    */


	public function deleteCustomer(Customer $customer)
	{
		$customer->delete();
		session()->flash('success', 'Customer successfully deleted.');
		return $this->redirect('/customers', navigate: true);
	}

	public function render()
	{
		//dd(Auth::user()->name);
		if ($this->search != '') {
			$this->customers = Customer::where('name', 'like', '%' . $this->search . '%')->get();
		} else {
			$this->customers = Customer::all();
		}

		return view('livewire.customers');
	}
}
