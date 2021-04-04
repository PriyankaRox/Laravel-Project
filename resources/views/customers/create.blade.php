<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Customer
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('customers.store') }}">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="name" class="block font-medium text-sm text-gray-700">name</label>
                            <input type="text" name="name" id="name" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('name', '') }}" />
                            @error('name')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="dob" class="block font-medium text-sm text-gray-700">Date of birth</label>
                            <input type="date" name="dob" id="dob" type="date" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('dob', '') }}" />
                            @error('dob')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="gender" class="block font-medium text-sm text-gray-700">gender</label>
                            <input type="text" name="gender" id="gender" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('gender', '') }}" />
                            @error('gender')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="email" class="block font-medium text-sm text-gray-700">email</label>
                            <input type="email" name="email" id="email" type="email" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('email', '') }}" />
                            @error('email')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="mobile" class="block font-medium text-sm text-gray-700">mobile</label>
                            <input type="number" name="mobile" id="mobile"  class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('mobile', '') }}" />
                            @error('mobile')
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
                            <input type="number" name="pin" id="pin" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('pin', '') }}" />
                            @error('pin')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="state" class="block font-medium text-sm text-gray-700">state</label>
                            <input type="text" name="state" id="state" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('state', '') }}" />
                            @error('state')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="country" class="block font-medium text-sm text-gray-700">country</label>
                            <input type="text" name="country" id="country" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('country', '') }}" />
                            @error('country')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="adhar_number" class="block font-medium text-sm text-gray-700">adhar number</label>
                            <input type="number" name="adhar_number" id="adhar_number" type="number" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('adhar_number', '') }}" />
                            @error('adhar_number')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="religion" class="block font-medium text-sm text-gray-700">religion</label>
                            <input type="text" name="religion" id="religion" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('religion', '') }}" />
                            @error('religion')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="caste" class="block font-medium text-sm text-gray-700">caste</label>
                            <input type="text" name="caste" id="caste" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('caste', '') }}" />
                            @error('caste')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="category" class="block font-medium text-sm text-gray-700">category</label>
                            <input type="text" name="category" id="category" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('category', '') }}" />
                            @error('category')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="emergency_contacts" class="block font-medium text-sm text-gray-700">emergency contacts</label>
                            <input type="number" name="emergency_contacts" id="emergency_contacts" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('emergency_contacts', '') }}" />
                            @error('emergency_contacts')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        
                            <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

                            <head>
                                <meta charset="utf-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1">

                                <title>Laravel</title>
                                <link rel="stylesheet" type="text/css"
                                    href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                                 <!-- Styles -->
                                <style>
                                    .container {
                                        max-width: 500px;
                                    }
                                    .reload {
                                        font-family: Lucida Sans Unicode
                                    }
                                </style>
                            </head>
                            <body>
                                <div class="container mt-5">
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div><br />
                                    @endif
                                    <form method="post" action="{{url('captcha-validation')}}">
                                    
                                    {{ method_field('POST') }}
                                        @csrf
                                    <div class="form-group mt-4 mb-4">
                                        <div class="captcha">
                                            <span>{!! captcha_img() !!}</span>
                                            <button type="button" class="btn btn-danger" class="reload" id="reload">
                                                &#x21bb;
                                            </button>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                                    </div>           
                                </form>
                            </div>
                        </body>
                        <script type="text/javascript">
                            $('#reload').click(function () {
                                $.ajax({
                                    type: 'GET',
                                    url: 'reload-captcha',
                                    success: function (data) {
                                        $(".captcha span").html(data.captcha);
                                    }
                                });
                            });

                        </script>
                        </html>
                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Create
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
