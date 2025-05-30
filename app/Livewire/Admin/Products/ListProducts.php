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

    public $search_id = '';
    public $search_code = '';
    public $search_bnf_code = '';
    public $search_bnf_name = '';

    protected $queryString = [
        'search_id' => ['except' => ''],
        'search_code' => ['except' => ''],
        'search_bnf_code' => ['except' => ''],
        'search_bnf_name' => ['except' => '']
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function resetFilters()
    {
        $this->reset(['search_id', 'search_code', 'search_bnf_code', 'search_bnf_name']);
        $this->resetPage();
    }

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
            'products' => $this->getProducts()
        ]);
    }

    public function getProducts()
    {
        return Product::query()
                ->when($this->search_id, fn($query) => $query->where('id', 'like', '%' . $this->search_id . '%'))
                ->when($this->search_code, fn($query) => $query->where('code', 'like', '%' . $this->search_code . '%'))
                ->when($this->search_bnf_code, fn($query) => $query->where('bnf_code', 'like', '%' . $this->search_bnf_code . '%'))
                ->when($this->search_bnf_name, fn($query) => $query->where('bnf_name', 'ilike', '%' . $this->search_bnf_name . '%'))
                ->paginate(10);
    }
}
