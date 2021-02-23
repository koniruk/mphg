<?php

use Illuminate\Database\Seeder;

class PublicStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('public_status')->insert([
            'id'              => 1,
            'name'             => '公開',
        ]);
        DB::table('public_status')->insert([
            'id'              => 2,
            'name'             => '非公開',
        ]);
    }
}
