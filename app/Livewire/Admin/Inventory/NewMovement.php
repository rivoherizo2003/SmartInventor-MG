<?php

namespace App\Livewire\Admin\Inventory;

use Livewire\Attributes\Layout;
use Livewire\Component;

class NewMovement extends Component
{
    #[Layout("layouts.app")]
    public function render()
    {
        return view('livewire.admin.inventory.new-movement');
    }
}
