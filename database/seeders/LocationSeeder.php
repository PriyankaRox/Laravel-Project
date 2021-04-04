<?php

namespace Database\Seeders;
use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = [
            [
                'cid' => '1',
                'name' => 'Kavya',
                'street' => 'sangam',
                'address' => 'NTTF',
                'city' => 'Dharwad',
                'pin' => '560005',
                'contact_person' => 'Aishwarya',
                'mobile' => '9809878909'

            ],
            [
                'cid' => '1',
                'name' => 'Prarthana',
                'street' => 'Gandhi',
                'address' => 'Ring road',
                'city' => 'Dharwad',
                'pin' => '560007',
                'contact_person' => 'Suraiyya',
                'mobile' => '9809878988'


            ],
        ];

        foreach ($locations as $location) {
            Location::create(array(
                'cid' => $location['cid'],
                'name' => $location['name'],
                'street' => $location['street'],
                'address' => $location['address'],
                'city' => $location['city'],
                'pin' => $location['pin'],
                'contact_person' => $location['contact_person'],
                'mobile' => $location['mobile']
            ));
        }
    }
}

