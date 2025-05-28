<?php

namespace App\Livewire\Admin\Products;

use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Component;

class DetailProduct extends Component
{
    public $product;

    public function mount($product)
    {
        $this->product = $product;
    }
    
    #[Layout("layouts.app")]
    public function render()
    {
        return view('livewire.admin.products.detail-product', [
            'productDetail' => Product::findOrFail($this->product),
        ]);
    }
}
