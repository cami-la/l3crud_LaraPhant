<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;

class Customers extends Component
{
    public $customers = [];

    public function mount()
    {
        $this->customers = Customer::all();
    }

    
    public function deleteCustomer(Customer $customer)
    {
        $customer->delete();
        session()->flash('success', 'Customer successfully deleted.');
        return $this->redirect('/customers', navigate:true);
    }

    public function render()
    {
        return view('livewire.customers');
    }
}
