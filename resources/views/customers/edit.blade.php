<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit customer
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('customers.update',$customer->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="name" class="block font-medium text-sm text-gray-700">name</label>
                            <input type="text" name="name" id="name" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('name',  $customer->name) }}" />
                            @error('name')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="dob" class="block font-medium text-sm text-gray-700">Date of birth</label>
                            <input type="text" name="dob" id="dob" type="date" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('dob',  $customer->dob) }}" />
                            @error('dob')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="gender" class="block font-medium text-sm text-gray-700">gender</label>
                            <input type="text" name="gender" id="gender" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('gender',  $customer->gender) }}" />
                            @error('gender')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="email" class="block font-medium text-sm text-gray-700">email</label>
                            <input type="text" name="email" id="email" type="email" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('email',  $customer->email) }}" />
                            @error('email')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="mobile" class="block font-medium text-sm text-gray-700">mobile</label>
                            <input type="text" name="mobile" id="mobile" type="number" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('mobile',  $customer->mobile) }}" />
                            @error('mobile')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="address" class="block font-medium text-sm text-gray-700">address</label>
                            <input type="text" name="address" id="address" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('address',  $customer->address) }}" />
                            @error('address')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="city" class="block font-medium text-sm text-gray-700">city</label>
                            <input type="text" name="city" id="city" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('city',  $customer->city) }}" />
                            @error('city')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="pin" class="block font-medium text-sm text-gray-700">pin</label>
                            <input type="text" name="pin" id="pin" type="number" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('pin',  $customer->pin) }}" />
                            @error('pin')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="state" class="block font-medium text-sm text-gray-700">state</label>
                            <input type="text" name="state" id="state" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('state',  $customer->state) }}" />
                            @error('state')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="country" class="block font-medium text-sm text-gray-700">country</label>
                            <input type="text" name="country" id="country" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('country',  $customer->country) }}" />
                            @error('country')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="adhar_number" class="block font-medium text-sm text-gray-700">adhar number</label>
                            <input type="text" name="adhar_number" id="adhar_number" type="number" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('adhar_number',  $customer->adhar_number) }}" />
                            @error('adhar_number')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="religion" class="block font-medium text-sm text-gray-700">religion</label>
                            <input type="text" name="religion" id="religion" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('religion',  $customer->religion) }}" />
                            @error('religion')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="caste" class="block font-medium text-sm text-gray-700">caste</label>
                            <input type="text" name="caste" id="caste" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('caste',  $customer->caste) }}" />
                            @error('caste')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="category" class="block font-medium text-sm text-gray-700">category</label>
                            <input type="text" name="category" id="category" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('category',  $customer->category) }}" />
                            @error('category')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="emergency_contacts" class="block font-medium text-sm text-gray-700">emergency contacts</label>
                            <input type="text" name="emergency_contacts" id="emergency_contacts" type="number" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('emergency_contacts',  $customer->emergency_contacts) }}" />
                            @error('emergency_contacts')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Edit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>