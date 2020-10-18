<?php

use App\Office;
use Illuminate\Database\Seeder;

class OfficeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Office::create([
            'city' => 'Gaza',
            'phone' => '0595658192',
            'address1' => 'Gaza',
            'address2' => 'Jablia',
            'country' => 'Palestine',
            'state' => '1',
            'postal_code' => '972',
            'temtory' => 'temtory',
        ]);
    }
}
