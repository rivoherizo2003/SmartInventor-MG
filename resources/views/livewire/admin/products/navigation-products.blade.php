@props(['activeTab'])

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between">
        <div class="flex">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Products Management') }}
            </h2>
            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                <x-nav-link href="#" wire:click.prevent="switchTab('list')" :active="$activeTab === 'list'">
                    {{ __('List') }}
                </x-nav-link>
            </div>
            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                <x-nav-link href="#" wire:click.prevent="switchTab('create')" :active="$activeTab === 'create'">
                    {{ __('Create Product') }}
                </x-nav-link>
            </div>
        </div>
    </div>
</div>