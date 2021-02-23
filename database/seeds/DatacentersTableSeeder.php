<?php

use Illuminate\Database\Seeder;

class DatacentersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('datacenters')->insert([
            'id'              => 1,
            'name'             => 'Elemental',
        ]);
        DB::table('datacenters')->insert([
            'id'              => 2,
            'name'             => 'Gaia',
        ]);
        DB::table('datacenters')->insert([
            'id'              => 3,
            'name'             => 'Mana',
        ]);
    }
}
