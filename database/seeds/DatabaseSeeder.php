<?php

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
        $this->call(UserTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(ClientTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(Hearder_orderTableSeeder::class);
        $this->call(Line_orderTableSeeder::class);
    }
}
