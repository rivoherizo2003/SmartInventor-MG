<x-admin.app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="text-gray-900">
        {{ __("You're logged in!") }}
    </div>
</x-admin.app-layout>