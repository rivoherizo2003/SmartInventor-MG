<?php

namespace App\Livewire\Admin\Inventory;

use Illuminate\Contracts\View\View;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class ListMovements extends Component
{
    use WithPagination;
    protected string $paginationTheme = 'tailwind';

    #[Layout("layouts.app")]
    public function render(): View
    {
        return view('livewire.admin.inventory.list-movements', [
            'movements' => $this->getMovements(),
        ]);
    }

    /**
     * @return LengthAwarePaginator<\App\Models\Movement>
     */
    public function getMovements(): LengthAwarePaginator
    {
        return \App\Models\Movement::query()
            ->orderBy('movement_date', 'desc')
            ->paginate(10);
    }
}
