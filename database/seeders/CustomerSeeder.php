<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Customer::factory()->count(25)->create();
        Customer::factory()->count(100)->create();
        Customer::factory()->count(100)->create();
        Customer::factory()->count(5)->create();

    }
}
