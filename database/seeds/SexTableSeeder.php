<?php

use Illuminate\Database\Seeder;

class SexTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sex')->insert([
            'id'              => 1,
            'name'             => '男性',
        ]);
        DB::table('sex')->insert([
            'id'              => 2,
            'name'             => '女性',
        ]);
    }
}
