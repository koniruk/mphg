<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            'id'              => 1,
            'name'             => 'ミスト・ヴィレッジ',
        ]);
        DB::table('locations')->insert([
            'id'              => 2,
            'name'             => 'ゴブレットビュート',
        ]);
        DB::table('locations')->insert([
            'id'              => 3,
            'name'             => 'ラベンダーベッド',
        ]);
        DB::table('locations')->insert([
            'id'              => 4,
            'name'             => 'シロガネ',
        ]);
    }
}
