<div>
    <h1 class="text-2xl font-bold">List of products</h1>
    <div class="mb-6">
        <form class="bg-white dark:bg-gray-800 shadow-sm rounded-lg p-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <!-- ID Search -->
                <div>
                    <x-input-label for="search_id"
                        class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">ID</x-input-label>
                    <x-text-input type="text" wire:model.live.debounce.300ms="search_id" id="search_id"
                        placeholder="Search by ID"></x-text-input>
                </div>

                <!-- Code Search -->
                <div>
                    <x-input-label for="search_code"
                        class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Code</x-input-label>
                    <x-text-input type="text" wire:model.live.debounce.300ms="search_code" id="search_code"
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white sm:text-sm"
                        placeholder="Search by code"></x-text-input>
                </div>

                <!-- BNF Code Search -->
                <div>
                    <x-input-label for="search_bnf_code"
                        class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">BNF Code</x-input-label>
                    <x-text-input type="text" wire:model.live.debounce.300ms="search_bnf_code" id="search_bnf_code"
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white sm:text-sm"
                        placeholder="Search by BNF code"></x-text-input>
                </div>

                <!-- BNF Name Search -->
                <div>
                    <x-input-label for="search_bnf_name"
                        class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">BNF Name</x-input-label>
                    <x-text-input type="text" wire:model.live.debounce.300ms="search_bnf_name" id="search_bnf_name"
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white sm:text-sm"
                        placeholder="Search by BNF name"></x-text-input>
                </div>
            </div>

            <!-- Reset Filters Button -->
            <div class="mt-4 flex justify-end">
                <button type="button" wire:click="resetFilters"
                    class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300 dark:hover:bg-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                    </svg>
                    Reset Filters
                </button>
            </div>
        </form>
    </div>

    <div class="table-auto md:table-fixed border-collapse text-sm w-full">
        <table class="border-collapse border border-gray-100 w-full text-left">
            <thead class="bg-gray-200 dark:bg-gray-700">
                <tr>
                    <th class="border border-gray-100 p-4 pl-8">ID</th>
                    <th class="border border-gray-100 p-4 pl-8">Code</th>
                    <th class="border border-gray-100 p-4 pl-8">BNF Code</th>
                    <th class="border border-gray-100 p-4 pl-8">BNF name</th>
                    <th class="border border-gray-100 p-4 pl-8">Items</th>
                    <th class="border border-gray-100 p-4 pl-8">NIC</th>
                    <th class="border border-gray-100 p-4 pl-8">Price</th>
                    <th class="border border-gray-100 p-4 pl-8">Quantity</th>
                    <th class="border border-gray-100 p-4 pl-8">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white dark:bg-gray-800">
                @foreach ($products as $product)
                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200 ease-in-out"
                    wire:key="{{ $product->id }}">
                    <td class="border-b border-gray-100 p-4 pl-8 text-gray-500 dark:border-gray-700 dark:text-gray-400">
                        {{ $product->id }}</td>
                    <td class="border-b border-gray-100 p-4 pl-8 text-gray-500 dark:border-gray-700 dark:text-gray-400">
                        {{ $product->code }}</td>
                    <td class="border-b border-gray-100 p-4 pl-8 text-gray-500 dark:border-gray-700 dark:text-gray-400">
                        {{ $product->bnf_code }}</td>
                    <td class="border-b border-gray-100 p-4 pl-8 text-gray-500 dark:border-gray-700 dark:text-gray-400">
                        {{ $product->bnf_name }}</td>
                    <td class="border-b border-gray-100 p-4 pl-8 text-gray-500 dark:border-gray-700 dark:text-gray-400">
                        {{ $product->items }}</td>
                    <td class="border-b border-gray-100 p-4 pl-8 text-gray-500 dark:border-gray-700 dark:text-gray-400">
                        {{ $product->nic }}</td>
                    <td class="border-b border-gray-100 p-4 pl-8 text-gray-500 dark:border-gray-700 dark:text-gray-400">
                        {{ $product->act_cost }}</td>
                    <td class="border-b border-gray-100 p-4 pl-8 text-gray-500 dark:border-gray-700 dark:text-gray-400">
                        {{ $product->quantity }}</td>
                    <td class="border-b border-gray-100 p-4 pl-8 text-gray-500 dark:border-gray-700 dark:text-gray-400">
                        <div x-data="{ open: false }" class="relative inline-block text-left">
                            <div>
                                <button @click="open = !open" type="button"
                                    class="inline-flex items-center justify-center text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 focus:outline-none p-1 rounded-full hover:bg-gray-100 dark:hover:bg-gray-600"
                                    id="options-menu-{{ $product->id }}" aria-haspopup="true"
                                    :aria-expanded="open.toString()">
                                    <span class="sr-only">Open options</span>
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                    </svg>
                                </button>
                            </div>

                            <div x-show="open" x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95"
                                class="origin-top-right absolute right-0 mt-2 w-40 rounded-md shadow-lg bg-white dark:bg-gray-800 ring-1 ring-black ring-opacity-5 focus:outline-none z-10"
                                role="menu" aria-orientation="vertical"
                                aria-labelledby="options-menu-{{ $product->id }}" @click.away="open = false"
                                style="display: none;">
                                <div class="py-1" role="none">
                                    <a href="{{ route('admin.products.detail', $product->id) }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white"
                                        role="menuitem" wire:navigate>
                                        View
                                    </a>
                                    <a href="{{ route('admin.products.edit', $product->id) }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white"
                                        role="menuitem" wire:navigate>
                                        Edit
                                    </a>
                                    <button type="button"
                                        wire:click="confirmDelete({{ $product->id }}, '{{ addslashes($product->bnf_name) ?: $product->code }}')"
                                        class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100 hover:text-red-700 dark:text-red-400 dark:hover:bg-gray-700 dark:hover:text-red-300"
                                        role="menuitem">
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="7">
                        {{ $products->links() }}
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>


    {{-- Delete Confirmation Modal --}}
    @if($showDeleteModal)
        <div class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                {{-- Background overlay, show/hide based on modal state. --}}
                <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" aria-hidden="true"
                    wire:click="cancelDelete"></div>

                {{-- This element is to trick the browser into centering the modal contents. --}}
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                {{-- Modal panel, show/hide based on modal state. --}}
                <div
                    class="inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl dark:bg-gray-800 sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
                    <div>
                        <div class="flex items-center justify-center w-12 h-12 mx-auto bg-red-100 rounded-full">
                            {{-- Heroicon name: outline/exclamation-triangle --}}
                            <svg class="w-6 h-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-5">
                            <h3 class="text-lg font-medium leading-6 text-gray-900 dark:text-gray-100" id="modal-title">
                                Delete Product
                            </h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500 dark:text-gray-300">
                                    Are you sure you want to delete the product
                                    @if($productToDeleteName)
                                    <strong>"{{ $productToDeleteName }}"</strong>?
                                    @else
                                    this product?
                                    @endif
                                    This action cannot be undone.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 sm:mt-6 sm:grid sm:grid-flow-row-dense sm:grid-cols-2 sm:gap-3">
                        <button wire:click="deleteProduct" type="button"
                            class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-red-600 border border-transparent rounded-md shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 sm:col-start-2 sm:text-sm">
                            Delete
                        </button>
                        <button wire:click="cancelDelete" type="button"
                            class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm dark:text-gray-300 dark:bg-gray-700 dark:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:col-start-1 sm:text-sm">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
    {{-- End Delete Confirmation Modal --}}
</div>