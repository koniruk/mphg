<?php

use Illuminate\Database\Seeder;

class SizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sizes')->insert([
            'id'              => 1,
            'name'             => 'Sサイズ',
        ]);
        DB::table('sizes')->insert([
            'id'              => 2,
            'name'             => 'Mサイズ',
        ]);
        DB::table('sizes')->insert([
            'id'              => 3,
            'name'             => 'Lサイズ',
        ]);
        DB::table('sizes')->insert([
            'id'              => 4,
            'name'             => 'アパルトメント',
        ]);
        DB::table('sizes')->insert([
            'id'              => 5,
            'name'             => '個室',
        ]);
    }
}
