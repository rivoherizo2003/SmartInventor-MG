{{-- @props(['activeTab']) --}}

<div>
    <x-slot name="header">
        <livewire:admin.products.navigation-products :activeTab="$activeTab" />
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if ($activeTab === "list")
                    <livewire:admin.products.list-products />
                    @elseif ($activeTab === "create")
                    <livewire:admin.products.create-product />
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>