<?php

use Illuminate\Database\Seeder;
use App\Branches;
class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Branches::create([
            'name' => 'Segamat Branch',
            'phone' => '07-9311389',
            'type' => 'Office',
            'startHours' => '9.00 a.m.',
            'closingHours' => '5.00 p.m.',
            'Address1' => '13-1194, Fong Jang Park',
            'Address2' => 'Off Batu 1 3/4 Jalan Buloh Kasap',
            'postcode' => '85000',
            'city' => 'Segamat',
            'Province' => 'Johor',
            'Country' => 'Malaysia',
        ]);
    }
}
