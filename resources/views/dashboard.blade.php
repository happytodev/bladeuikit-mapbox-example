<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-mapbox theme="light-v10" class="rounded-lg shadow-lg h-96 mt-6" :options="['center' => [6.9167, 43.6667], 'zoom' => 7 ]" :markers="[[6.9167, 43.6667]]" />
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
