<?php

namespace App\Livewire\Admin\Products;

use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ProductsLayout extends Component
{
    public string $activeTab = "list";

    protected $listeners = [
        'navigateToProductTab',
        'productCreated' => 'handleProductCreated',
    ];

    public function mount(string $activeTab = 'list'): void
    {
        $this->activeTab = $activeTab;
    }
    
    public function navigateToProductTab(string $tabName): void
    {
        if (in_array($tabName, ['list', 'create'])) {
            $this->activeTab = $tabName;
        }
    }

    public function handleProductCreated(): void
    {
        $this->activeTab = 'list';
    }

    /**
     * Get the view / contents that represents the component.
     */
    #[Layout('layouts.app')]
    public function render(): View
    {
        return view('livewire.admin.products.products-layout', [
            'activeTab' => $this->activeTab,
        ]);
    }
}
