<?php

namespace App\Livewire\Forms\Products;

use App\Models\Product;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ProductForm extends Form
{
    public ?Product $product = null;

    #[Validate('required|string|max:255')]
    public string $code = '';

    #[Validate('required|string|max:255')]
    public string $bnf_code = '';

    #[Validate('required|string|max:255')]
    public string $bnf_name = '';

    #[Validate('required|integer')]
    public int $items = 0;

    #[Validate('required|string|max:255')]
    public string $nic = '';

    #[Validate('required|numeric')]
    public int $act_cost = 0;

    #[Validate('integer')]
    public int $quantity = 0;

    #[Validate('nullable|string')]
    public string $discr = '';

    #[Validate('nullable|string')]
    public string $notice = '';

    public function setProduct(Product $product): void
    {
        $this->product = $product;
        $this->fill($product);
    }

    public function create(): void
    {
        $this->validate();
        /** @phpstan-ignore argument.type */
        Product::create($this->all());

        $this->reset();
        session()->flash('message', 'Product created successfully.');
    }

    public function update(): void
    {
        $this->validate();
        if (!$this->product) {
            session()->flash('error', 'Product not found.');
            return;
        }
        /** @phpstan-ignore argument.type */
        $this->product->update($this->all());

        session()->flash('message', 'Product updated successfully.');
    }
}
