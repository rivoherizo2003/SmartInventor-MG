<?php

namespace App\Livewire\Admin\Products;

use App\Livewire\Forms\Products\ProductForm;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class EditProduct extends Component
{
    public ProductForm $productForm;

    public function mount(Product $product): void
    {
        $this->productForm->setProduct($product);
    }

    public function update(): void
    {
        $this->productForm->update();

        session()->flash('message', 'Product updated successfully.');
    }

    #[Layout("layouts.app")]
    public function render(): View
    {
        return view('livewire.admin.products.edit-product', [
            'productForm' => $this->productForm,
        ]);
    }
}
