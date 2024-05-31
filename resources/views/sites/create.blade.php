<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Site
        </h2>
    </x-slot>
    <div class="flex w-full justify-center my-4">
        <div class="container align-middle p-4 sm:p-6 lg:p-8 bg-white">
            <form action="{{ route('sites.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="category_id" class="block text-gray-700">Category</label>
                    <select name="category_id" id="category_id" class="w-full border-gray-300 rounded" required>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="slug" class="block text-gray-700">Slug</label>
                    <input type="text" name="slug" id="slug" class="w-full border-gray-300 rounded" required>
                </div>
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Name</label>
                    <input type="text" name="name" id="name" class="w-full border-gray-300 rounded" required>
                </div>
                <div class="mb-4">
                    <label for="documentType" class="block text-gray-700">Document Type</label>
                    <select name="documentType" id="documentType" class="w-full border-gray-300 rounded" required>
                        @foreach ($documentTypes as $type)
                            <option value="{{ $type->name }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="document" class="block text-gray-700">Document</label>
                    <input type="text" name="document" id="document" class="w-full border-gray-300 rounded" required>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
            </form>
        </div>
    </div>
</x-app-layout>
