<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Feedback
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('feedbacks.store') }}">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                       
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="cid" class="block font-medium text-sm text-gray-700">CustomerID</label>
                            <input type="text" name="cid" id="cid" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('cid', '') }}" />
                            @error('cid')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="title" class="block font-medium text-sm text-gray-700">title</label>
                            <input type="text" name="title" id="title" type="date" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('title', '') }}" />
                            @error('title')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="type" class="block font-medium text-sm text-gray-700">type</label>
                            <input type="text" name="type" id="type" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('type', '') }}" />
                            @error('type')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="description" class="block font-medium text-sm text-gray-700">description</label>
                            <input type="text" name="description" id="description" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('description', '') }}" />
                            @error('description')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="comment" class="block font-medium text-sm text-gray-700">comment</label>
                            <input type="text" name="comment" id="comment" type="number" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('comment', '') }}" />
                            @error('comment')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="status" class="block font-medium text-sm text-gray-700">status</label>
                            <input type="text" name="status" id="status" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('status', '') }}" />
                            @error('status')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button  class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opadescription-25 transition ease-in-out duration-150">
                                Create
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>