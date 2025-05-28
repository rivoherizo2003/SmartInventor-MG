<?php

namespace App\Livewire\Forms\Products;

use App\Models\Product;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ProductForm extends Form
{
    public ?Product $product = null;

    #[Validate('required|string|max:255')]
    public $code = '';

    #[Validate('required|string|max:255')]
    public $bnf_code = '';

    #[Validate('required|string|max:255')]
    public $bnf_name = '';

    #[Validate('required|integer')]
    public $items = '';

    #[Validate('required|string|max:255')]
    public $nic = '';

    #[Validate('required|numeric')]
    public $act_cost = '';

    #[Validate('integer')]
    public $quantity = 0;

    #[Validate('nullable|string')]
    public $discr = '';

    #[Validate('nullable|string')]
    public $notice = '';
    
    public function setProduct(Product $product)
    {
        $this->product = $product;
        $this->fill($product);
    }

    public function create()
    {
        $this->validate();

        Product::create($this->all());

        $this->reset();
        session()->flash('message', 'Product created successfully.');
    }

    public function update()
    {
        $this->validate();
        if (!$this->product) {
            session()->flash('error', 'Product not found.');
            return;
        }
        $this->product->update($this->all());

        session()->flash('message', 'Product updated successfully.');
    }
}
