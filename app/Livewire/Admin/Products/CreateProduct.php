<?php

namespace App\Livewire\Admin\Products;

use App\Models\Product;
use Livewire\Component;

class CreateProduct extends Component
{
    public $code = '';
    public $bnf_code = '';
    public $name = '';
    public $items = '';
    public $nic = '';
    public $price = '';
    public $quantity = '';
    public $discr = '';
    public $notice = '';

    public function save()
    {
        $validated = $this->validate([
            'code' => 'required|string|max:255',
            'bnf_code' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'items' => 'required|string',
            'nic' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'discr' => 'nullable|string',
            'notice' => 'nullable|string',
        ]);

        Product::create($validated);

        $this->reset();
        session()->flash('message', 'Product created successfully.');
    }

    public function render()
    {
        return view('livewire.admin.products.create-product');
    }
}
