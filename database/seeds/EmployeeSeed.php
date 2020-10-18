<?php

use App\Employee;
use App\Office;
use Illuminate\Database\Seeder;

class EmployeeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::create([
            'office_id' => Office::first()->id,
            'reports_to' => '5',
            'first_name' => 'Ayman',
            'last_name' => 'Abed',
            'extention' => 'extention',
            'email' => 'Ayman@gmail.com',
            'job_title' => 'Web Developer',
        ]);
    }
}
