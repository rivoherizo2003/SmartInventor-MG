<?php

namespace App\Livewire\Admin\Inventory;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class ListMovements extends Component
{
    use WithPagination;
    protected $paginationTheme = 'tailwind';

    #[Layout("layouts.app")]
    public function render()
    {
        return view('livewire.admin.inventory.list-movements', [
            'movements' => $this->getMovements(),
        ]);
    }

    public function getMovements()
    {
        return \App\Models\Movement::query()
            ->orderBy('movement_date', 'desc')
            ->paginate(10);
    }
}
