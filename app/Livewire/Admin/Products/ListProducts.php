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

    public bool $showDeleteModal = false;

    public ?int $productIdToDelete = null;

    public ?string $productToDeleteName = '';

    public function confirmDelete(int $productId, string $productName)
    {
        $this->productIdToDelete = $productId;
        $this->productToDeleteName = $productName;
        $this->showDeleteModal = true;
    }

    public function cancelDelete()
    {
        $this->showDeleteModal = false;
        $this->productIdToDelete = null;
        $this->productToDeleteName = '';
    }

    public function deleteProduct()
    {
        if(null === $this->productIdToDelete) {
            session()->flash('error', 'Product not found.');
            $this->cancelDelete();
            return;
        }

        $product = Product::find($this->productIdToDelete);

        if (!$product) {
            session()->flash('error', 'Product not found or already deleted.');
            $this->cancelDelete();
            return;
        }

        $product->delete();
        session()->flash('message', "Product '{$this->productToDeleteName}' deleted successfully.");

        $this->cancelDelete();
    }

    #[Layout("layouts.app")]
    public function render()
    {
        return view('livewire.admin.products.list-products', [
            'products' => Product::paginate(10),
        ]);
    }
}
