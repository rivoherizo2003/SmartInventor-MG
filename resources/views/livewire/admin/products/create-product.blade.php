<div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
    <form wire:submit.prevent="save" class="space-y-6">
        @if (session()->has('message'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                {{ session('message') }}
            </div>
        @endif

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
            <!-- Code -->
            <div>
                <label for="code" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Code</label>
                <input type="text" wire:model="code" id="code" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                @error('code') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- BNF Code -->
            <div>
                <label for="bnf_code" class="block text-sm font-medium text-gray-700 dark:text-gray-300">BNF Code</label>
                <input type="text" wire:model="bnf_code" id="bnf_code" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                @error('bnf_code') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                <input type="text" wire:model="bnf_name" id="name" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Items -->
            <div>
                <label for="items" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Items</label>
                <input type="text" wire:model="items" id="items" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                @error('items') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- NIC -->
            <div>
                <label for="nic" class="block text-sm font-medium text-gray-700 dark:text-gray-300">NIC</label>
                <input type="text" wire:model="nic" id="nic" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                @error('nic') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Price -->
            <div>
                <label for="price" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Price</label>
                <input type="number" step="0.01" wire:model="act_cost" id="price" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                @error('price') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Quantity -->
            <div>
                <label for="quantity" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Quantity</label>
                <input type="number" wire:model="quantity" id="quantity" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                @error('quantity') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
        </div>

        <!-- Description -->
        <div>
            <label for="discr" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Description</label>
            <textarea wire:model="discr" id="discr" rows="3" 
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"></textarea>
            @error('discr') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <!-- Notice -->
        <div>
            <label for="notice" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Notice</label>
            <textarea wire:model="notice" id="notice" rows="3" 
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"></textarea>
            @error('notice') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="flex items-center justify-end mt-6">
            <button type="submit" 
                class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors duration-200">
                Create Product
            </button>
        </div>
    </form>
</div>
