<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class Customers extends Component
{
	use WithPagination;

	protected $paginationTheme = 'bootstrap';
	//public $customers = [];
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
			$customers = Customer::where('name', 'like', '%' . $this->search . '%')->get()->paginate(10);
		} else {
			$customers = Customer::paginate(10);
		}

		return view('livewire.customers', [
			'customers' => $customers
		]);
	}
}
