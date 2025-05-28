<?php

namespace App\Livewire\Admin\Products;

use App\Livewire\Forms\Products\ProductForm;
use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateProduct extends Component
{
    public ProductForm $productForm;

    public function save()
    {
        $this->productForm->create();

        session()->flash('message', 'Product created successfully.');
    }

    #[Layout("layouts.app")]
    public function render()
    {
        return view('livewire.admin.products.create-product');
    }
}
