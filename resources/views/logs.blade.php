<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Logs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="grid grid-cols-5">
                        <p class="font-bold">Level</p>
                        <p class="font-bold">Date and Time</p>
                        <p class="font-bold">Source</p>
                        <p class="font-bold">Event ID</p>
                        <p class="font-bold">Task Category</p>
                    </div>
                    @foreach($logs as $log)
                        <div class="grid grid-cols-5 my-6 bg-white border-b border-gray-200 shadow-sm">
                            @if($log->level == 1)
                                <p class="">Critical</p>
                            @endif
                            @if($log->level == 2)
                                <p class="">Error</p>
                            @endif
                            @if($log->level == 3)
                                <p class="">Warning</p>
                            @endif
                            @if($log->level == 4)
                                <p class="">Information</p>
                            @endif
                            <p class="">{{ $log->date }}</p>
                            <p class="">{{ $log->source }}</p>
                            <p class="">{{ $log->eventid }}</p>
                            <p class="">{{ $log->category }}</p>
                        </div>
                    @endforeach
                    {{ $logs->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
