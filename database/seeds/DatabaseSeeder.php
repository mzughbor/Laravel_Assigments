<?php

use App\Customer;
use App\Employee;
use App\Office;
use App\Order;
use App\OrderProduct;
use App\Paymment;
use App\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // For Make Seed
        $this->call(ProductLineSeed::class);
        $this->call(ProductSeed::class);
        $this->call(OfficeSeed::class);
        $this->call(EmployeeSeed::class);

        // For Make Factotry
        factory(Customer::class, 5)->create();
        factory(Order::class, 2)->create();
        factory(OrderProduct::class, 10)->create();
        factory(Paymment::class, 4)->create();
    }
}
