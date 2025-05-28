
<div class="table-auto md:table-fixed border-collapse text-sm w-full">
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