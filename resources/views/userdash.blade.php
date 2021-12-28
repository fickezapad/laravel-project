<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for user') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in as user!
                </div>
            </div>
        </div>
    </div>
    <!DOCTYPE html>
    <html lang="en">

    <div>
        <button id="lista" onclick="window.location='{{ url("list-data") }}'">List of contacts</button>
    </div>
    <style>
        #lista {
            background-color: grey;
            margin-left: 30%;
            padding: 3px;
        }
    </style>
</x-app-layout>