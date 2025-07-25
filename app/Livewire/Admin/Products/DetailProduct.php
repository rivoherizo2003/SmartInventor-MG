<?php

namespace App\Livewire\Admin\Products;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class DetailProduct extends Component
{
    public int $product;

    public function mount(int $product): void
    {
        $this->product = $product;
    }

    #[Layout("layouts.app")]
    public function render(): View
    {
        return view('livewire.admin.products.detail-product', [
            'productDetail' => Product::findOrFail($this->product),
        ]);
    }
}
