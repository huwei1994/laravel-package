<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(BuyerTableSeeder::class);
        $this->call(SalerTableSeeder::class);
        $this->call(TransportTableSeeder::class);
        $this->call(PaymentMethodTableSeeder::class);
    }
}
