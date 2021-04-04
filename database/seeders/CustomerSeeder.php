<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;


class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers = [
            [
                'name' => 'Kavya',
                'dob' => '1998-09-09',
                'gender' => 'female',
                'email' => 'kavyagoudar8@gmail.com',
                'mobile' => '98764343',
                'address' => 'NTTF',
                'city' => 'Dharwad',
                'pin' => '580006',
                'state' => 'Karnataka',
                'country' => 'India',
                'adhar_number' => '676754533432',
                'religion' => 'Hindu',
                'caste' => 'potadar',
                'category' => '3A',
                'emergency_contacts' => '9809097654'

            ],
            [
                'name' => 'Prarthana',
                'dob' => '1998-06-09',
                'gender' => 'female',
                'email' => 'prarathanacharankar@gmail.com',
                'mobile' => '98764666',
                'address' => 'Gandhi nagar',
                'city' => 'Dharwad',
                'pin' => '580004',
                'state' => 'Karnataka',
                'country' => 'India',
                'adhar_number' => '676754533666',
                'religion' => 'Hindu',
                'caste' => 'Brahmin',
                'category' => 'general',
                'emergency_contacts' => '9809097999'

            ],
        ];

        foreach ($customers as $customer) {
            Customer::create(array(
                'name' => $customer['name'],
                'dob' => $customer['dob'],
                'gender' => $customer['gender'],
                'email' => $customer['email'],
                'mobile' => $customer['mobile'],
                'address' => $customer['address'],
                'city' => $customer['city'],
                'pin' => $customer['pin'],
                'state' => $customer['state'],
                'country' => $customer['country'],
                'adhar_number' => $customer['adhar_number'],
                'religion' => $customer['religion'],
                'caste' => $customer['caste'],
                'category' => $customer['category'],
                'emergency_contacts' => $customer['emergency_contacts']
            ));
        }
    }
}
