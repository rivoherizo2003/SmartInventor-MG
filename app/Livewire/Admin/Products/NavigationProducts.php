<?php

namespace App\Livewire\Admin\Products;

use Livewire\Component;

class NavigationProducts extends Component
{
    public $activeTab;

    public function mount($activeTab = 'list')
    {
        $this->activeTab = $activeTab;
    }

    public function switchTab($activeTab)
    {
        $this->activeTab = $activeTab;
        $this->dispatch('navigateToProductTab', tabName: $activeTab);
    }

    public function render()
    {
        return view('livewire.admin.products.navigation-products');
    }
}