 
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Customers List
        </h2>
    </x-slot>
    <!--class="font-semibold text-xl text-gray-800 leading-tight"-->
    
    <div class="max-w-6xl mx-auto py-10 sm:px-2 lg:px-5">
    <div class="block mb-8">
    <a class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" href="{{ URL::to('/customer/pdf') }}">Export to PDF</a>
    <a class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" href="{{ route('export') }}">Export User Data</a>
    <div>
    <!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>

  
       
        <div >
            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">       
                <!--<a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a>-->
            </form>
        </div>
</div>


        
        <div class="max-w-6xl mx-auto py-10 sm:px-2 lg:px-5" >
            <div class="block mb-8" >
                <a href="{{ route('customers.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add Customer</a>
            </div>
            <div class="flex flex-col" >
                <div class="-my-2 overflow-x-auto sm:-mx-5 lg:-mx-7">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-5 lg:px-7">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg" >
                            <table class="min-w-full divide-y divide-gray-200 w-full" >
                                <thead>
                                <tr>
                                    <th scope="col" width="50" class="px-5 py-2 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        ID
                                    </th>
                                    <th scope="col" class="px-5 py-2 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Name
                                    </th>
                                    <th scope="col" class="px-7 py-4 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Date Of Birth
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Gender
                                    </th>
                                    <th scope="col" class="px-5 py-2 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Mobile
                                    </th>
                                    <th scope="col" class="px-5 py-2 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Address
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        City
                                    </th>
                                    <th scope="col" class="px-5 py-2 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Pin
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        State
                                    </th>
                                    <th scope="col" class="px-5 py-2 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Country
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Adhar Number
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Religion
                                    </th>
                                    <th scope="col" class="px-5 py-2 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Caste
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Category
                                    </th>
                                    <th scope="col" class="px-5 py-2 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Emergency Contacts
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Action
                                    </th>
                                    <th scope="col" width="200" class="px-5 py-2 bg-gray-50">

                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($customers as $customer)
                                    <tr>
                                        <td class="px-5 py-3 whitespace-nowrap text-sm text-gray-900">
                                            {{ $customer->id }}
                                        </td>

                                        <td class="px-5 py-3 whitespace-nowrap text-sm text-gray-900">
                                            {{ $customer->name }}
                                        </td>

                                        <td class="px-7 py-5 whitespace-nowrap text-sm text-gray-900">
                                            {{ $customer->dob }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $customer->gender }}
                                        </td>

                                        <td class="px-5 py-3 whitespace-nowrap text-sm text-gray-900">
                                            {{ $customer->email }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $customer->mobile }}
                                        </td>

                                        <td class="px-5 py-3 whitespace-nowrap text-sm text-gray-900">
                                            {{ $customer->address }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $customer->city }}
                                        </td>

                                        <td class="px-5 py-3 whitespace-nowrap text-sm text-gray-900">
                                            {{ $customer->pin }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $customer->state }}
                                        </td>

                                        <td class="px-5 py-3 whitespace-nowrap text-sm text-gray-900">
                                            {{ $customer->country }}
                                        </td>

                                        <td class="px-5 py-3 whitespace-nowrap text-sm text-gray-900">
                                            {{ $customer->adhar_number }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $customer->religion }}
                                        </td>

                                        <td class="px-5 py-3 whitespace-nowrap text-sm text-gray-900">
                                            {{ $customer->caste }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $customer->category }}
                                        </td>

                                        <td class="px-5 py-3 whitespace-nowrap text-sm text-gray-900">
                                            {{ $customer->emergency_contacts }}
                                        </td>


                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="{{ route('customers.show', $customer->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-0 px-2 rounded" >View</a>
                                            <!--class="text-blue-600 hover:text-blue-900 mb-2 mr-2"-->
                                            <a href="{{ route('customers.edit', $customer->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-0 px-2 rounded">Edit</a>
                                            <form class="inline-block" action="{{ route('customers.destroy', $customer->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-0 px-2 rounded" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
