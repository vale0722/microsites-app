<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{$site->name}}
        </h2>
    </x-slot>
    <div class="flex w-full justify-center my-4">
        <div class="container align-middle p-4 sm:p-6 lg:p-8 bg-white">
            <div class="mb-4">
                <label class="block text-gray-700">Category</label>
                <p class="text-gray-900">{{ $site->category->name }}</p>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Slug</label>
                <p class="text-gray-900">{{ $site->slug }}</p>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Name</label>
                <p class="text-gray-900">{{ $site->name }}</p>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Document Type</label>
                <p class="text-gray-900">{{ $site->documentType }}</p>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Document</label>
                <p class="text-gray-900">{{ $site->document }}</p>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Enabled At</label>
                <p class="text-gray-900">{{ $site->enabled_at }}</p>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Created At</label>
                <p class="text-gray-900">{{ $site->created_at }}</p>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Updated At</label>
                <p class="text-gray-900">{{ $site->updated_at }}</p>
            </div>
        </div>
    </div>
</x-app-layout>
