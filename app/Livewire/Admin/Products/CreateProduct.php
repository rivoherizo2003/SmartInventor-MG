<?php

namespace App\Livewire\Admin\Products;

use App\Livewire\Forms\Products\ProductForm;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class CreateProduct extends Component
{
    public ProductForm $productForm;

    public function save(): void
    {
        $this->productForm->create();

        session()->flash('message', 'Product created successfully.');
    }

    #[Layout("layouts.app")]
    public function render(): View
    {
        return view('livewire.admin.products.create-product');
    }
}
