<div>
<h1 class="text-2xl font-bold">List movements</h1>
<div class="table-auto md:table-fixed border-collapse text-sm w-full">
        <table class="border-collapse border border-gray-100 w-full text-left">
            <thead class="bg-gray-200 dark:bg-gray-700">
                <tr>
                    <th class="border border-gray-100 p-4 pl-8">ID</th>
                    <th class="border border-gray-100 p-4 pl-8">Type</th>
                    <th class="border border-gray-100 p-4 pl-8">Date</th>
                    <th class="border border-gray-100 p-4 pl-8">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white dark:bg-gray-800">
                @foreach ($movements as $movement)
                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200 ease-in-out"
                    wire:key="{{ $movement->id }}">
                    <td class="border-b border-gray-100 p-4 pl-8 text-gray-500 dark:border-gray-700 dark:text-gray-400">
                        {{ $movement->id }}</td>
                    <td class="border-b border-gray-100 p-4 pl-8 text-gray-500 dark:border-gray-700 dark:text-gray-400">
                        {{ $movement->movement_type }}</td>
                    <td class="border-b border-gray-100 p-4 pl-8 text-gray-500 dark:border-gray-700 dark:text-gray-400">
                        {{ $movement->movement_date }}</td>
                    <td class="border-b border-gray-100 p-4 pl-8 text-gray-500 dark:border-gray-700 dark:text-gray-400">
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="7">
                        {{ $movements->links() }}
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
