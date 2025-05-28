<?php

namespace App\Livewire\Admin\Products;

use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class ListProducts extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    #[Layout("layouts.app")]
    public function render()
    {
        return view('livewire.admin.products.list-products', [
            'products' => Product::paginate(10),
        ]);
    }
}
