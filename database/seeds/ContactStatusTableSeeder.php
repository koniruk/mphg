<?php

use Illuminate\Database\Seeder;

class ContactStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_status')->insert([
            'id'              => 1,
            'name'             => '未対応',
        ]);
        DB::table('contact_status')->insert([
            'id'              => 2,
            'name'             => '対応中',
        ]);
        DB::table('contact_status')->insert([
            'id'              => 3,
            'name'             => '支払い待機中',
        ]);
        DB::table('contact_status')->insert([
            'id'              => 4,
            'name'             => '作業中',
        ]);
        DB::table('contact_status')->insert([
            'id'              => 5,
            'name'             => '確認中',
        ]);
        DB::table('contact_status')->insert([
            'id'              => 6,
            'name'             => '完了',
        ]);
    }
}
