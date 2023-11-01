<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between">
                        <p class="font-bold">Level</p>
                        <p class="font-bold">Date and Time</p>
                        <p class="font-bold">Source</p>
                        <p class="font-bold">Event ID</p>
                        <p class="font-bold">Task Category</p>
                    </div>
                    <div class="flex justify-between">
                        <p class="">Information</p>
                        <p class="">1/11/2023 09:14:00</p>
                        <p class="">WindowsUpdateClient</p>
                        <p class="">19</p>
                        <p class="">Windows Update Client</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
