<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Location
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('locations.store') }} ">
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
                            <label for="name" class="block font-medium text-sm text-gray-700">name</label>
                            <input type="text" name="name" id="name" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('name', '') }}" />
                            @error('name')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="street" class="block font-medium text-sm text-gray-700">Street</label>
                            <input type="text" name="street" id="street" type="date" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('street', '') }}" />
                            @error('street')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="address" class="block font-medium text-sm text-gray-700">address</label>
                            <input type="text" name="address" id="address" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('address', '') }}" />
                            @error('address')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="city" class="block font-medium text-sm text-gray-700">city</label>
                            <input type="text" name="city" id="city" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('city', '') }}" />
                            @error('city')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="pin" class="block font-medium text-sm text-gray-700">pin</label>
                            <input type="text" name="pin" id="pin" type="number" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('pin', '') }}" />
                            @error('pin')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="contact_person" class="block font-medium text-sm text-gray-700">contact person</label>
                            <input type="text" name="contact_person" id="contact_person" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('contact_person', '') }}" />
                            @error('contact_person')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="mobile" class="block font-medium text-sm text-gray-700">mobile</label>
                            <input type="number" name="mobile" id="mobile" type="number" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('mobile', '') }}" />
                            @error('mobile')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button  class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Create
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>