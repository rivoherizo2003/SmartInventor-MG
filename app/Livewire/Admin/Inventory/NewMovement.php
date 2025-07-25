<?php

namespace App\Livewire\Admin\Inventory;

use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class NewMovement extends Component
{
    #[Layout("layouts.app")]
    public function render(): View
    {
        return view('livewire.admin.inventory.new-movement');
    }
}
