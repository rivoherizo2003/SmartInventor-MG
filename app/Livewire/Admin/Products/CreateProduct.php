<?php

namespace App\Livewire\Admin\Products;

use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Component;

class CreateProduct extends Component
{
    public $code = 'test';
    public $bnf_code = '';
    public $bnf_name = '';
    public $items = '';
    public $nic = '';
    public $act_cost = '';
    public $quantity = '';
    public $discr = '';
    public $notice = '';

    public function save()
    {
        $validated = $this->validate([
            'code' => 'required|string|max:255',
            'bnf_code' => 'required|string|max:255',
            'bnf_name' => 'required|string|max:255',
            'items' => 'required|integer',
            'nic' => 'required|string|max:255',
            'act_cost' => 'required|numeric',
            'quantity' => 'required|integer',
            'discr' => 'nullable|string',
            'notice' => 'nullable|string',
        ]);

        Product::create($validated);

        $this->reset();
        session()->flash('message', 'Product created successfully.');
    }

    #[Layout("layouts.app")]
    public function render()
    {
        return view('livewire.admin.products.create-product');
    }
}
