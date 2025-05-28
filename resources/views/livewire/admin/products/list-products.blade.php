
<div class="table-auto md:table-fixed border-collapse text-sm w-full">
    <h1 class="text-2xl font-bold mb-6">List of products</h1>
    <table class="border-collapse border border-gray-100 w-full text-left">
        <thead class="bg-gray-200 dark:bg-gray-700">
            <tr>
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
                        <button @click="open = !open" type="button" class="inline-flex items-center justify-center text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 focus:outline-none p-1 rounded-full hover:bg-gray-100 dark:hover:bg-gray-600" id="options-menu-{{ $product->id }}" aria-haspopup="true" :aria-expanded="open.toString()">
                            <span class="sr-only">Open options</span>
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                            </svg>
                        </button>
                    </div>

                    <div x-show="open"
                         x-transition:enter="transition ease-out duration-100"
                         x-transition:enter-start="transform opacity-0 scale-95"
                         x-transition:enter-end="transform opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-75"
                         x-transition:leave-start="transform opacity-100 scale-100"
                         x-transition:leave-end="transform opacity-0 scale-95"
                         class="origin-top-right absolute right-0 mt-2 w-40 rounded-md shadow-lg bg-white dark:bg-gray-800 ring-1 ring-black ring-opacity-5 focus:outline-none z-10"
                         role="menu" aria-orientation="vertical" aria-labelledby="options-menu-{{ $product->id }}"
                         @click.away="open = false"
                         style="display: none;"> <div class="py-1" role="none">
                            <a href="{{ route('admin.products.detail', $product->id) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white" role="menuitem" wire:navigate>
                                View
                            </a>
                            <a href="{{ route('admin.products.edit', $product->id) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white" role="menuitem" wire:navigate>
                                Edit
                            </a>
                            <button type="button" wire:click="deleteProduct({{ $product->id }})"
                                    onclick="confirm('Are you sure you want to delete this product? This action cannot be undone.') || event.stopImmediatePropagation()"
                                    class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100 hover:text-red-700 dark:text-red-400 dark:hover:bg-gray-700 dark:hover:text-red-300" role="menuitem">
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