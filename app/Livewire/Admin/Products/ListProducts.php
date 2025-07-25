<?php

namespace App\Livewire\Admin\Products;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class ListProducts extends Component
{
    use WithPagination;

    protected string $paginationTheme = 'tailwind';

    public bool $showDeleteModal = false;

    public ?int $productIdToDelete = null;

    public ?string $productToDeleteName = '';

    public string $search_id = '';
    public string $search_code = '';
    public string $search_bnf_code = '';
    public string $search_bnf_name = '';

    /**
     * The query string parameters for the search filters.
     *
     * @var array<string, array<string, string>>
     */
    protected array $queryString = [
        'search_id' => ['except' => ''],
        'search_code' => ['except' => ''],
        'search_bnf_code' => ['except' => ''],
        'search_bnf_name' => ['except' => '']
    ];

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function resetFilters(): void
    {
        $this->reset(['search_id', 'search_code', 'search_bnf_code', 'search_bnf_name']);
        $this->resetPage();
    }

    public function confirmDelete(int $productId, string $productName): void
    {
        $this->productIdToDelete = $productId;
        $this->productToDeleteName = $productName;
        $this->showDeleteModal = true;
    }

    public function cancelDelete(): void
    {
        $this->showDeleteModal = false;
        $this->productIdToDelete = null;
        $this->productToDeleteName = '';
    }

    public function deleteProduct(): void
    {
        if (null === $this->productIdToDelete) {
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
    public function render(): View
    {
        return view('livewire.admin.products.list-products', [
            'products' => $this->getProducts()
        ]);
    }

    /**
     * @return LengthAwarePaginator<Product>
     */
    public function getProducts(): LengthAwarePaginator
    {
        return Product::query()
                ->when($this->search_id, fn ($query) => $query->where('id', 'like', '%' . $this->search_id . '%'))
                ->when($this->search_code, fn ($query) => $query->where('code', 'like', '%' . $this->search_code . '%'))
                ->when($this->search_bnf_code, fn ($query) => $query->where('bnf_code', 'like', '%' . $this->search_bnf_code . '%'))
                ->when($this->search_bnf_name, fn ($query) => $query->where('bnf_name', 'ilike', '%' . $this->search_bnf_name . '%'))
                ->paginate(10);
    }
}
