<div>
    <div class="flex justify-between">
        <h1 class="text-2xl font-bold mb-4">Product Details</h1>
        <a href="{{ route('admin.products.list') }}"
            class="flex items-center justify-center rounded-xl border border-gray-300 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100"
            wire:navigate>
            Back to Products
        </a>
    </div>
    <div class="p-6 space-y-6">
        <div>
            <h2 class="text-xl font-semibold text-gray-800 mb-3">Identification</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4">
                <div>
                    <dt class="text-sm font-medium text-gray-500">ID</dt>
                    <dd class="mt-1 text-lg text-gray-900">{{ $productDetail->id }}</dd>
                </div>
                <div>
                    <dt class="text-sm font-medium text-gray-500">Product Code</dt>
                    <dd class="mt-1 text-lg text-gray-900">{{ $productDetail->code }}</dd>
                </div>
                <div>
                    <dt class="text-sm font-medium text-gray-500">BNF Code</dt>
                    <dd class="mt-1 text-lg text-gray-900">{{ $productDetail->bnf_code }}</dd>
                </div>
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold text-gray-800 mb-3">Name & Type</h2>
            <div class="space-y-4">
                <div>
                    <dt class="text-sm font-medium text-gray-500">BNF Name</dt>
                    <dd class="mt-1 text-xl text-gray-900 font-medium">{{ $productDetail->bnf_name }}</dd>
                </div>
                <div>
                    <dt class="text-sm font-medium text-gray-500">Description/Type</dt>
                    <dd class="mt-1 text-lg text-gray-900 capitalize">{{ $productDetail->discr }}</dd>
                </div>
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold text-gray-800 mb-3">Pricing & Stock</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-4">
                <div>
                    <dt class="text-sm font-medium text-gray-500">Items</dt>
                    <dd class="mt-1 text-lg text-gray-900">{{ $productDetail->items }}</dd>
                </div>
                <div>
                    <dt class="text-sm font-medium text-gray-500">NIC</dt>
                    {{-- Assuming nic is a numeric value, you might want to format it as currency --}}
                    <dd class="mt-1 text-lg text-gray-900">£{{ number_format($productDetail->nic, 2) }}</dd>
                </div>
                <div>
                    <dt class="text-sm font-medium text-gray-500">Actual Cost</dt>
                    {{-- Assuming act_cost is a numeric value, you might want to format it as currency --}}
                    <dd class="mt-1 text-lg text-gray-900">£{{ number_format($productDetail->act_cost, 2) }}
                    </dd>
                </div>
                <div>
                    <dt class="text-sm font-medium text-gray-500">Quantity</dt>
                    <dd class="mt-1 text-lg text-gray-900">{{ $productDetail->quantity }}</dd>
                </div>
            </div>
        </div>

        <div>
            <h2 class="text-xl font-semibold text-gray-800 mb-3">Important Dates & Notices</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4">
                <div>
                    <dt class="text-sm font-medium text-gray-500">Expiration Date</dt>
                    @php
                    $expirationDate = \Carbon\Carbon::parse($productDetail->expiration_date);
                    $isExpired = $expirationDate->isPast();
                    @endphp
                    <dd class="mt-1 text-lg {{ $isExpired ? 'text-red-600 font-semibold' : 'text-gray-900' }}">
                        {{ $expirationDate->format('Y-m-d H:i:s') }}
                    </dd>
                    @if($isExpired)
                    <p class="mt-1 text-xs text-red-500">(Note: This product has expired)</p>
                    @endif
                </div>
                <div>
                    <dt class="text-sm font-medium text-gray-500">Notice</dt>
                    <dd class="mt-1 text-lg text-gray-900">{{ $productDetail->notice ?: 'N/A' }}</dd>
                </div>
            </div>
        </div>

        <div class="border-t pt-6">
            <h2 class="text-lg font-medium text-gray-700 mb-3">Record Information</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-4 text-sm">
                <div>
                    <dt class="font-medium text-gray-500">Created At</dt>
                    <dd class="mt-1 text-gray-900">{{ $productDetail->created_at ?
                        \Carbon\Carbon::parse($productDetail->created_at)->format('Y-m-d H:i:s') : 'N/A' }}</dd>
                </div>
                <div>
                    <dt class="font-medium text-gray-500">Updated At</dt>
                    <dd class="mt-1 text-gray-900">{{ $productDetail->updated_at ?
                        \Carbon\Carbon::parse($productDetail->updated_at)->format('Y-m-d H:i:s') : 'N/A' }}</dd>
                </div>
                <div>
                    <dt class="font-medium text-gray-500">Deleted At</dt>
                    <dd class="mt-1 text-gray-900">{{ $productDetail->deleted_at ?
                        \Carbon\Carbon::parse($productDetail->deleted_at)->format('Y-m-d H:i:s') : 'N/A' }}</dd>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gray-50 px-6 py-4">
        <p class="text-xs text-gray-500 text-center">Product data is current as of display time.</p>
    </div>
</div>